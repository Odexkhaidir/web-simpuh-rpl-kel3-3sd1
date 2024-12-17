<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParameterIndikatorResource\Pages;
use App\Filament\Resources\ParameterIndikatorResource\RelationManagers;
use App\Models\ParameterIndikator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParameterIndikatorResource extends Resource
{
    protected static ?string $model = ParameterIndikator::class;

    protected static ?string $navigationIcon = 'heroicon-m-adjustments-horizontal';

    protected static ?string $navigationGroup = 'Indikator Kekumuhan';
    
    protected static ?string $navigationLabel = 'Parameter Indikator';

    protected static ?string $modelLabel = 'Parameter Indikator Kekumuhan';

    protected static ?string $pluralModelLabel = 'Parameter Indikator Kekumuhan';

    protected static ?int $navigationSort = 3;

    protected static ?string $slug = 'parameter-indikator';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_parameter_indikator')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_parameter_indikator')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nilai')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('satuan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_indikator')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('indikator_id')
                    ->relationship('indikator', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_parameter_indikator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_parameter_indikator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('satuan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_indikator')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('indikator.id')
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
            'index' => Pages\ListParameterIndikators::route('/'),
            'create' => Pages\CreateParameterIndikator::route('/create'),
            'edit' => Pages\EditParameterIndikator::route('/{record}/edit'),
        ];
    }
}
