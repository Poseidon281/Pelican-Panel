<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ApiKeyResource\Pages;
use App\Models\ApiKey;
use Filament\Resources\Resource;

class ApiKeyResource extends Resource
{
    protected static ?string $model = ApiKey::class;
    protected static ?string $label = 'API Key';
    protected static ?string $navigationIcon = 'tabler-key';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('key_type', '2')->count() ?: null;
    }

    public static function canEdit($record): bool
    {
        return false;
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApiKeys::route('/'),
            'create' => Pages\CreateApiKey::route('/create'),
        ];
    }
}
