<?php

namespace App\Filament\Resources\SaranPenangananResource\Pages;

use App\Filament\Resources\SaranPenangananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditSaranPenanganan extends EditRecord
{
    protected static string $resource = SaranPenangananResource::class;

    protected function afterSave(): void
    {
        Notification::make()
            ->success()
            ->title('Saved successfully')
            ->body('Changes to the post have been saved.')
            ->sendToDatabase(auth()->user());
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
