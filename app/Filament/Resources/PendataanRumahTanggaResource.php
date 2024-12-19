<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendataanRumahTanggaResource\Pages;
use App\Filament\Resources\PendataanRumahTanggaResource\RelationManagers;
use App\Models\PendataanRumahTangga;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendataanRumahTanggaResource extends Resource
{
    protected static ?string $model = PendataanRumahTangga::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Pendataan';

    // protected static ?string $navigationGroup = 'Pendataan';

    protected static ?string $modelLabel = 'Pendataan Rumah Tangga';

    protected static ?string $pluralModelLabel = 'Pendataan Rumah Tangga';

    // protected static ?int $navigationSort = 2;

    protected static ?string $slug = 'Pendataan rumah tangga';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kepala_keluarga')
                    ->label('Nama Kepala Keluarga')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_keluarga')
                    ->label('Anggota Keluarga')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode_rt')
                    ->label('RT')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desa.nama_desa')
                    ->label('Desa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan.nama_kecamatan')
                    ->label('Kode Kecamatan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPendataanRumahTanggas::route('/'),
            'create' => Pages\CreatePendataanRumahTangga::route('/create'),
            'edit' => Pages\EditPendataanRumahTangga::route('/{record}/edit'),
        ];
    }
}
