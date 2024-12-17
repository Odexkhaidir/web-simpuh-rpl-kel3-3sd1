<?php

namespace App\Filament\Resources\SaranPenangananResource\Pages;

use App\Filament\Resources\SaranPenangananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSaranPenanganans extends ListRecords
{
    protected static string $resource = SaranPenangananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
