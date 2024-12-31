<?php

namespace App\Filament\Resources\SaranPenangananResource\Pages;

use App\Filament\Resources\SaranPenangananResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateSaranPenanganan extends CreateRecord
{
    protected static string $resource = SaranPenangananResource::class;

    protected function afterCreate(): void
    {
        Notification::make()
            ->success()
            ->title('Saved successfully')
            ->body('Changes to the post have been saved.')
            ->sendToDatabase(auth()->user());
    }
}
