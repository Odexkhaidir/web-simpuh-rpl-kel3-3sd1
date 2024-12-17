<?php

namespace App\Filament\Resources\ParameterUmumResource\Pages;

use App\Filament\Resources\ParameterUmumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParameterUmums extends ListRecords
{
    protected static string $resource = ParameterUmumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
