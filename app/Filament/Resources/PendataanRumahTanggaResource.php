<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\PendataanRumahTangga;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PendataanRumahTanggaResource\Pages;
use App\Filament\Resources\PendataanRumahTanggaResource\RelationManagers;

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
                // Tables\Actions\DeleteAction:make()->requiresConfirmation(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('nama_kecamatan')
                    ->relationship('kecamatans', 'nama_kecamatan')
                    ->label('Kecamatan')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('nama_desa')
                    ->relationship('desas', 'nama_desa')
                    ->label('Desa')
                    ->searchable()
                    ->preload()
                    ->live()
                    ->required(),
                Forms\Components\TextInput::make('kode_rt')
                    ->label('Kode RT/RW')
                    ->required(),
                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->required(),
                Forms\Components\TextInput::make('kepala_keluarga')
                    ->label('Nama Kepala Keluarga')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_keluarga')
                    ->label('Jumlah Anggota Keluarga')
                    ->required(),
                ]) ->column(2);
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
