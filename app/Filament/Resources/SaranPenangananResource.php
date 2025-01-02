<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SaranPenangananResource\Pages;
use App\Models\SaranPenanganan;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class SaranPenangananResource extends Resource
{
    protected static ?string $model = SaranPenanganan::class;

    protected static ?string $navigationIcon = 'heroicon-m-chat-bubble-oval-left-ellipsis';

    protected static ?string $navigationLabel = 'Saran Penanganan';

    protected static ?string $modelLabel = 'Saran Penanganan Desa';

    protected static ?string $pluralModelLabel = 'Saran Penanganan Desa';

    protected static ?string $slug = 'saran-penanganan';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_saran_penanganan')
                    ->columnSpan(2)
                    ->label('Kode Saran Penanganan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kecamatan_id')
                    ->label('Kecamatan')
                    ->relationship('kecamatan', 'nama_kecamatan')
                    ->required()
                    ->placeholder('Pilih Kecamatan...')
                    ->reactive()
                    ->afterStateUpdated(function (callable $set) {
                        $set('desa_id', null);
                    }),
                Forms\Components\Select::make('desa_id')
                    ->label('Desa')
                    ->required()
                    ->placeholder('Pilih Desa...')
                    ->options(function (callable $get) {
                        $kecamatanId = $get('kecamatan_id');
                        if (!$kecamatanId) {
                            return [];
                        }
                        return \App\Models\Desa::where('kecamatan_id', $kecamatanId)->pluck('nama_desa', 'id');
                    })
                    ->reactive()
                    ->afterStateUpdated(function (callable $set, $state) {
                        $desa = \App\Models\Desa::find($state);
                        $set('kode_desa', $desa?->kode_desa);
                    }),
                Forms\Components\Hidden::make('kode_desa') // Tetap mengirimkan data ke backend
                    ->afterStateHydrated(function (callable $set, $state) {
                        // Tetap memuat nilai awal dari kode desa
                        if ($state) {
                            $set('kode_desa', $state);
                        }
                    }),
                Forms\Components\Textarea::make('saran_penanganan')
                    ->label('Saran Penanganan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_saran_penanganan')
                    ->label('Kode Saran Penanganan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan.nama_kecamatan')
                    ->label('Nama Kecamatan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('desa.nama_desa')
                    ->label('Nama Desa')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_desa')
                    ->label('Kode Desa') // Tetap menampilkan di tabel
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('saran_penanganan')
                    ->label('Saran Penanganan'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSaranPenanganans::route('/'),
            'create' => Pages\CreateSaranPenanganan::route('/create'),
            'edit' => Pages\EditSaranPenanganan::route('/{record}/edit'),
        ];
    }
}
