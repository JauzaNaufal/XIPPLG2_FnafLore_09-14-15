<?php

namespace App\Filament\Resources\AnimatronicResource\Pages;

use App\Filament\Resources\AnimatronicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnimatronics extends ListRecords
{
    protected static string $resource = AnimatronicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
