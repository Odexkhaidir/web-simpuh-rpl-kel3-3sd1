<?php

namespace App\Filament\Resources\OutputKekumuhanResource\Pages;

use App\Filament\Resources\OutputKekumuhanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOutputKekumuhan extends EditRecord
{
    protected static string $resource = OutputKekumuhanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
