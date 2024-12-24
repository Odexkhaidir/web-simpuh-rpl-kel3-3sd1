<?php

namespace App\Filament\Resources\PendataanRumahTanggaResource\Pages;

use App\Filament\Resources\PendataanRumahTanggaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendataanRumahTangga extends EditRecord
{
    protected static string $resource = PendataanRumahTanggaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
