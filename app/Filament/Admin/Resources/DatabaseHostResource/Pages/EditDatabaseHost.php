<?php

namespace App\Filament\Admin\Resources\DatabaseHostResource\Pages;

use App\Filament\Admin\Resources\DatabaseHostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;

class EditDatabaseHost extends EditRecord
{
    protected static string $resource = DatabaseHostResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns([
                        'default' => 2,
                        'sm' => 3,
                        'md' => 3,
                        'lg' => 4,
                    ])
                    ->schema([
                        Forms\Components\TextInput::make('host')
                            ->columnSpan(2)
                            ->helperText('The IP address or Domain name that should be used when attempting to connect to this MySQL host from this Panel to create new databases.')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, Forms\Set $set) => $set('name', $state))
                            ->maxLength(191),
                        Forms\Components\TextInput::make('port')
                            ->columnSpan(1)
                            ->helperText('The port that MySQL is running on for this host.')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(65535),
                        Forms\Components\TextInput::make('max_databases')
                            ->label('Max databases')
                            ->helpertext('Blank is unlimited.')
                            ->numeric(),
                        Forms\Components\TextInput::make('name')
                            ->label('Display Name')
                            ->helperText('A short identifier used to distinguish this location from others. Must be between 1 and 60 characters, for example, us.nyc.lvl3.')
                            ->required()
                            ->maxLength(60),
                        Forms\Components\TextInput::make('username')
                            ->helperText('The username of an account that has enough permissions to create new users and databases on the system.')
                            ->required()
                            ->maxLength(191),
                        Forms\Components\TextInput::make('password')
                            ->helperText('The password for the database user.')
                            ->password()
                            ->revealable()
                            ->maxLength(191)
                            ->required(),
                        Forms\Components\Select::make('node_id')
                            ->searchable()
                            ->preload()
                            ->helperText('This setting only defaults to this database host when adding a database to a server on the selected node.')
                            ->label('Linked Node')
                            ->relationship('node', 'name'),
                    ]),
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            $this->getSaveFormAction()->formId('form'),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['password'])) {
            $data['password'] = encrypt($data['password']);
        }

        return $data;
    }

    protected function getFormActions(): array
    {
        return [];
    }

    public function getRelationManagers(): array
    {
        return [
            DatabaseHostResource\RelationManagers\DatabasesRelationManager::class,
        ];
    }
}