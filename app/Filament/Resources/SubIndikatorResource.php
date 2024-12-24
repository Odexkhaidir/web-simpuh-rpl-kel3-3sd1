<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubIndikatorResource\Pages;
use App\Filament\Resources\SubIndikatorResource\RelationManagers;
use App\Models\SubIndikator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubIndikatorResource extends Resource
{
    protected static ?string $model = SubIndikator::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $navigationGroup = 'Indikator Kekumuhan';
    
    protected static ?string $navigationLabel = 'Sub Indikator';

    protected static ?string $modelLabel = 'Daftar Sub Indikator';

    protected static ?string $pluralModelLabel = 'Daftar Sub Indikator';

    protected static ?int $navigationSort = 2;

    protected static ?string $slug = 'sub-indikator';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_sub_indikator')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('satuan')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('kode_indikator')
                    ->relationship('indikator', 'nama_indikator')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('nama_sub_indikator')
                ->searchable(),
            Tables\Columns\TextColumn::make('satuan')
                ->searchable(),
            Tables\Columns\TextColumn::make('versi')
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('indikator.nama_indikator')
                ->label('Indikator')
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
            'index' => Pages\ListSubIndikators::route('/'),
            'create' => Pages\CreateSubIndikator::route('/create'),
            'edit' => Pages\EditSubIndikator::route('/{record}/edit'),
        ];
    }
}
