<?php

namespace App\Filament\Resources\SaranPenangananResource\Pages;

use App\Filament\Resources\SaranPenangananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSaranPenanganan extends EditRecord
{
    protected static string $resource = SaranPenangananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
