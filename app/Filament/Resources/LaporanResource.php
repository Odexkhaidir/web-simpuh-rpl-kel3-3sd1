<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanResource\Pages;
use App\Filament\Resources\LaporanResource\RelationManagers;
use App\Models\Laporan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                Forms\Components\DateTimePicker::make('timestamp')
                    ->required(),
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
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kode_desa')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('desa_id')
                    ->relationship('desa', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_laporan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('timestamp')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('isi_laporan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo_bukti')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status_laporan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_user')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode_desa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desa.id')
                    ->numeric()
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
            'index' => Pages\ListLaporans::route('/'),
            'create' => Pages\CreateLaporan::route('/create'),
            'edit' => Pages\EditLaporan::route('/{record}/edit'),
        ];
    }
}
