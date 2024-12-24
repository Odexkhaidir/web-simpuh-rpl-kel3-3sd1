<?php

namespace App\Filament\Resources\MapResource\Pages;

use Filament\Resources\Pages\Page;
use App\Filament\Resources\MapResource;
use App\Models\Desa;

class ViewMap extends Page
{
    protected static ?string $navigationLabel = 'Peta';

    protected static string $resource = MapResource::class;

    protected static ?string $modelLabel = 'Peta k';

    protected static ?string $pluralModelLabel = 'Peta 0';

    protected static ?string $slug = '';

    protected static string $view = 'filament.resources.map-resource.pages.view-map';

    public function getDesaData()
    {
        return Desa::with('kecamatan')->get();
    }
}

