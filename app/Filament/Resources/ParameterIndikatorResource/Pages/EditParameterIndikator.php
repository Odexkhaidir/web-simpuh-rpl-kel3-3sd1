<?php

namespace App\Filament\Resources\ParameterIndikatorResource\Pages;

use App\Filament\Resources\ParameterIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParameterIndikator extends EditRecord
{
    protected static string $resource = ParameterIndikatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
