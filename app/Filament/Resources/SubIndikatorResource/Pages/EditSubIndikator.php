<?php

namespace App\Filament\Resources\SubIndikatorResource\Pages;

use App\Filament\Resources\SubIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubIndikator extends EditRecord
{
    protected static string $resource = SubIndikatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
