<?php

namespace App\Filament\Resources\ParameterUmumResource\Pages;

use App\Filament\Resources\ParameterUmumResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParameterUmum extends EditRecord
{
    protected static string $resource = ParameterUmumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
