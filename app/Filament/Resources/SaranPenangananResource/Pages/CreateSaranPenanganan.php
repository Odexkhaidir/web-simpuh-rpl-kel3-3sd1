<?php

namespace App\Filament\Resources\SaranPenangananResource\Pages;

use App\Filament\Resources\SaranPenangananResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateSaranPenanganan extends CreateRecord
{
    protected static string $resource = SaranPenangananResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Saran Penanganan Terkirim')
            ->body('Saran Penanganan telah berhasil dikirim untuk Desa ' . $this->record->desa->nama_desa);
    }
}
