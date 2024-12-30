<?php

namespace App\Filament\Resources\SaranPenangananResource\Pages;

use App\Filament\Resources\SaranPenangananResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditSaranPenanganan extends EditRecord
{
    protected static string $resource = SaranPenangananResource::class;

    // Aksi pada header
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title('Saran Penanganan Dihapus')
                        ->body('Saran Penanganan untuk Desa ' . $this->record->desa->nama_desa . ' telah berhasil dihapus.')
                ),
        ];
    }

    // Redirect setelah aksi edit selesai
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // Notifikasi untuk aksi edit
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Saran Penanganan Diperbarui')
            ->body('Saran Penanganan untuk Desa ' . $this->record->desa->nama_desa . ' telah berhasil diperbarui.');
    }
}
