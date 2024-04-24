<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Hash;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Forms\Components\TextInput::make('username')->required()->maxLength(191),
                    Forms\Components\TextInput::make('email')->email()->required()->maxLength(191),

                    Forms\Components\TextInput::make('name_first')
                        ->maxLength(191)
                        ->hidden(fn (string $operation): bool => $operation === 'create')
                        ->label('First Name'),
                    Forms\Components\TextInput::make('name_last')
                        ->maxLength(191)
                        ->hidden(fn (string $operation): bool => $operation === 'create')
                        ->label('Last Name'),

                    Forms\Components\TextInput::make('password')
                        ->dehydrateStateUsing(fn (string $state): string => Hash::make($state))
                        ->dehydrated(fn (?string $state): bool => filled($state))
                        ->required(fn (string $operation): bool => $operation === 'create')
                        ->password(),

                    Forms\Components\ToggleButtons::make('root_admin')
                        ->label('Administrator (Root)')
                        ->options([
                            false => 'No',
                            true => 'Admin',
                        ])
                        ->colors([
                            false => 'primary',
                            true => 'danger',
                        ])
                        ->disableOptionWhen(function (string $operation, $value, User $user) {
                            if ($operation !== 'edit' || $value) {
                                return false;
                            }

                            return $user->isLastRootAdmin();
                        })
                        ->hint(fn (User $user) => $user->isLastRootAdmin() ? 'This is the last root administrator!' : '')
                        ->helperText(fn (User $user) => $user->isLastRootAdmin() ? 'You must have at least one root administrator in your system.' : '')
                        ->hintColor('warning')
                        ->inline()
                        ->required()
                        ->default(false),

                    Forms\Components\Hidden::make('skipValidation')->default(true),

                    Forms\Components\Select::make('language')
                        ->required()
                        ->hidden()
                        ->default('en')
                        ->options(fn (User $user) => $user->getAvailableLanguages()),

                ])->columns(),
            ]);
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),

            Actions\Action::make('toggleSuspend')
                ->label(fn (User $user) => $user->is_suspended ? 'Enable User' : 'Disable User')
                ->color(fn (User $user) => $user->is_suspended ? 'success' : 'warning')
                ->action(function (User $user) {
                    $user->is_suspended = !$user->is_suspended;
                    $user->save();
                }),
        ];
    }
}
