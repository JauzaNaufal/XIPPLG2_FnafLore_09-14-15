<?php

namespace App\Filament\Resources\AnimatronicResource\Pages;

use App\Filament\Resources\AnimatronicResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnimatronic extends EditRecord
{
    protected static string $resource = AnimatronicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
