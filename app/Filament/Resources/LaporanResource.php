<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Laporan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Tables\Columns\DateTimePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LaporanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LaporanResource\RelationManagers;

class LaporanResource extends Resource
{
    protected static ?string $model = Laporan::class;

    protected static ?string $navigationIcon = 'heroicon-m-document-chart-bar';

    protected static ?string $navigationLabel = 'Laporan';

    protected static ?string $modelLabel = 'Laporan Masyarakat';

    protected static ?string $pluralModelLabel = 'Laporan Masyarakat';

    protected static ?string $slug = 'laporan';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_laporan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('isi_laporan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('photo_bukti')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('status_laporan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_user')
                    ->required(),
                Forms\Components\TextInput::make('kode_desa')
                    ->required(),
                Forms\Components\Select::make('desa_id')
                    ->relationship('desa', 'id')
                    ->required(),
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->label('Judul Laporan'),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->label('Deskripsi'),
                Forms\Components\DatePicker::make('tanggal')
                    ->required()
                    ->label('Tanggal'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_laporan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_desa')
                    ->sortable(),
                Tables\Columns\TextColumn::make('desa.nama_desa')
                    ->sortable(),
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50),
                Tables\Columns\TextColumn::make('isi_laporan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo_bukti')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal'),
                Tables\Columns\TextColumn::make('status_laporan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_user')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListLaporan::route('/'),
            'create' => Pages\CreateLaporan::route('/create'),
            'edit' => Pages\EditLaporan::route('/{record}/edit'),
        ];
    }
}
