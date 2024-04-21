<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute muss akzeptiert werden.',
    'active_url' => ':attribute ist keine gültige URL.',
    'after' => ':attribute muss ein Datum nach :date sein.',
    'after_or_equal' => ':attribute muss ein Datum nach oder gleich :date sein.',
    'alpha' => ':attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => ':attribute darf nur Buchstaben, Zahlen und Bindestriche enthalten.',
    'alpha_num' => ':attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => ':attribute muss ein Array sein.',
    'before' => ':attribute muss ein Datum vor :date sein.',
    'before_or_equal' => ':attribute muss ein Datum vor oder gleich :date sein.',
    'between' => [
        'numeric' => ':attribute muss zwischen :min und :max liegen.',
        'file' => ':attribute muss zwischen :min und :max Kilobytes liegen.',
        'string' => ':attribute muss zwischen :min und :max Zeichen haben.',
        'array' => ':attribute muss zwischen :min und :max Elemente haben.',
    ],
    'boolean' => ':attribute muss wahr oder falsch sein.',
    'confirmed' => 'Die :attribute Bestätigung stimmt nicht überein.',
    'date' => ':attribute ist kein gültiges Datum.',
    'date_format' => ':attribute entspricht nicht dem Format :format.',
    'different' => ':attribute und :other müssen unterschiedlich sein.',
    'digits' => ':attribute muss :digits Zeichen enthalten.',
    'digits_between' => ':attribute muss zwischen :min und :max Zeichen haben.',
    'dimensions' => ':attribute hat ungültige Bildabmessungen.',
    'distinct' => ':attribute Feld hat einen doppelten Wert.',
    'email' => ':attribute muss eine gültige E-Mail Adresse sein.',
    'exists' => ':attribute ist ungültig.',
    'file' => ':attribute muss eine Datei sein.',
    'filled' => ':attribute Feld ist erforderlich.',
    'image' => ':attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte :attribute ist ungültig.',
    'in_array' => ':attribute Feld existiert nicht in :other.',
    'integer' => ':attribute muss eine ganze Zahl sein.',
    'ip' => ':attribute muss eine gültige IP-Adresse sein.',
    'json' => ':attribute muss ein gültiger JSON-String sein.',
    'max' => [
        'numeric' => ':attribute darf nicht größer als :max sein.',
        'file' => ':attribute darf nicht größer als :max Kilobytes sein.',
        'string' => ':attribute darf nicht größer als :max Zeichen sein.',
        'array' => ':attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => ':attribute muss den Dateityp :values haben.',
    'mimetypes' => ':attribute muss den Dateityp :values haben.',
    'min' => [
        'numeric' => ':attribute muss mindestens :min sein.',
        'file' => ':attribute muss mindestens :min Kilobytes groß sein.',
        'string' => ':attribute muss mindestens :min Zeichen enthalten.',
        'array' => ':attribute muss mindestens :min Elemente haben.',
    ],
    'not_in' => 'Das ausgewählte :attribute ist ungültig.',
    'numeric' => ':attribute muss eine Zahl sein.',
    'present' => ':attribute Feld muss vorhanden sein.',
    'regex' => ':attribute Format ist ungültig.',
    'required' => ':attribute Feld ist erforderlich.',
    'required_if' => ':attribute muss angegeben werden, wenn :other :value ist.',
    'required_unless' => ':attribute Feld ist erforderlich, sofern :other nicht in :values ist.',
    'required_with' => ':attribute muss angegeben werden, wenn :values vorhanden ist.',
    'required_with_all' => ':attribute muss angegeben werden, wenn :values vorhanden ist.',
    'required_without' => ':attribute muss angegeben werden, wenn :values nicht vorhanden sind.',
    'required_without_all' => ':attribute muss angegeben werden, wenn keine :values vorhanden sind.',
    'same' => ':attribute und :other müssen übereinstimmen.',
    'size' => [
        'numeric' => ':attribute muss :size sein.',
        'file' => ':attribute muss :size Kilobyte groß sein.',
        'string' => ':attribute muss :size Zeichen haben.',
        'array' => ':attribute muss :size Elemente enthalten.',
    ],
    'string' => ':attribute muss ein String sein.',
    'timezone' => ':attribute muss eine gültige Zone sein.',
    'unique' => ':attribute ist bereits vergeben.',
    'uploaded' => ':attribute konnte nicht hochgeladen werden.',
    'url' => ':attribute Format ist ungültig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Panel
    'internal' => [
        'variable_value' => ':env Variable',
        'invalid_password' => 'Das angegebene Passwort war für dieses Konto ungültig.',
    ],
];
