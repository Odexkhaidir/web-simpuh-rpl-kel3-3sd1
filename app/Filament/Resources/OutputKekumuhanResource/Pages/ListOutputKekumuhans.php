<?php

namespace App\Filament\Resources\OutputKekumuhanResource\Pages;

use App\Filament\Resources\OutputKekumuhanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOutputKekumuhans extends ListRecords
{
    protected static string $resource = OutputKekumuhanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
