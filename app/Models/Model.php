<?php

namespace App\Models;

use Carbon\CarbonInterface;
use DateTimeInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Container\Container;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Exceptions\Model\DataValidationException;
use Illuminate\Database\Eloquent\Model as IlluminateModel;
use Illuminate\Validation\Factory as ValidationFactory;
use Illuminate\Validation\Validator;
use InvalidArgumentException;

abstract class Model extends IlluminateModel
{
    use HasFactory;

    /**
     * Determines if the model should undergo data validation before it is saved
     * to the database.
     */
    protected bool $skipValidation = false;

    protected static ValidationFactory $validatorFactory;

    public static array $validationRules = [];

    /**
     * Listen for the model saving event and fire off the validation
     * function before it is saved.
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected static function boot()
    {
        parent::boot();

        static::$validatorFactory = Container::getInstance()->make(ValidationFactory::class);

        static::saving(function (Model $model) {
            try {
                $model->validate();
            } catch (ValidationException $exception) {
                throw new DataValidationException($exception->validator, $model);
            }

            return true;
        });
    }

    /**
     * Returns the model key to use for route model binding. By default, we'll
     * assume every model uses a UUID field for this. If the model does not have
     * a UUID and is using a different key it should be specified on the model
     * itself.
     *
     * You may also optionally override this on a per-route basis by declaring
     * the key name in the URL definition, like "{user:id}".
     */
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    protected function asDateTime($value)
    {
        $timezone = auth()->user()?->timezone ?? config('app.timezone', 'UTC');

        if ($value instanceof CarbonInterface) {
            return Date::instance($value->timezone($timezone));
        }

        if ($value instanceof DateTimeInterface) {
            return Date::parse($value->format('Y-m-d H:i:s.u'), $timezone);
        }

        if (is_numeric($value)) {
            return Date::createFromTimestamp($value, $timezone);
        }

        if ($this->isStandardDateFormat($value)) {
            return Date::instance(Carbon::createFromFormat('Y-m-d', $value)->timezone($timezone)->startOfDay());
        }

        $format = $this->getDateFormat();
        try {
            $date = Date::createFromFormat($format, $value)->timezone($timezone);
        } catch (InvalidArgumentException) {
            $date = false;
        }

        return $date ?: Date::parse($value);
    }

    /**
     * Returns the validator instance used by this model.
     */
    public function getValidator(): Validator
    {
        $rules = $this->exists ? static::getRulesForUpdate($this) : static::getRules();

        return static::$validatorFactory->make([], $rules);
    }

    /**
     * Returns the rules associated with this model.
     */
    public static function getRules(): array
    {
        $rules = static::$validationRules;
        foreach ($rules as &$rule) {
            $rule = is_array($rule) ? $rule : explode('|', $rule);
        }

        return $rules;
    }

    /**
     * Returns the rules for a specific field. If the field is not found an empty
     * array is returned.
     */
    public static function getRulesForField(string $field): array
    {
        return Arr::get(static::getRules(), $field) ?? [];
    }

    /**
     * Returns the rules associated with the model, specifically for updating the given model
     * rather than just creating it.
     */
    public static function getRulesForUpdate($model, string $column = 'id'): array
    {
        if ($model instanceof Model) {
            [$id, $column] = [$model->getKey(), $model->getKeyName()];
        }

        $rules = static::getRules();
        foreach ($rules as $key => &$data) {
            // For each rule in a given field, iterate over it and confirm if the rule
            // is one for a unique field. If that is the case, append the ID of the current
            // working model, so we don't run into errors due to the way that field validation
            // works.
            foreach ($data as &$datum) {
                if (!is_string($datum) || !Str::startsWith($datum, 'unique')) {
                    continue;
                }

                [, $args] = explode(':', $datum);
                $args = explode(',', $args);

                $datum = Rule::unique($args[0], $args[1] ?? $key)->ignore($id ?? $model, $column);
            }
        }

        return $rules;
    }

    /**
     * Determines if the model is in a valid state or not.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validate(): void
    {
        if ($this->skipValidation) {
            return;
        }

        $validator = $this->getValidator();
        $validator->setData(
            // Trying to do self::toArray() here will leave out keys based on the whitelist/blacklist
            // for that model. Doing this will return all the attributes in a format that can
            // properly be validated.
            $this->addCastAttributesToArray(
                $this->getAttributes(),
                $this->getMutatedAttributes()
            )
        );

        if (!$validator->passes()) {
            throw new ValidationException($validator);
        }
    }
}
