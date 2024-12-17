<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParameterUmumResource\Pages;
use App\Filament\Resources\ParameterUmumResource\RelationManagers;
use App\Models\ParameterUmum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParameterUmumResource extends Resource
{
    protected static ?string $model = ParameterUmum::class;

    protected static ?string $navigationIcon = 'heroicon-c-list-bullet';

    protected static ?string $navigationGroup = 'Indikator Kekumuhan';
    
    protected static ?string $navigationLabel = 'Parameter Umum';

    protected static ?string $modelLabel = 'Parameter Umum Desa';

    protected static ?string $pluralModelLabel = 'Parameter Umum Desa';

    protected static ?int $navigationSort = 3;

    protected static ?string $slug = 'parameter-umum';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_parameter_umum')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_parameter_umum')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nilai')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('satuan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun')
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
                Tables\Columns\TextColumn::make('kode_parameter_umum')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_parameter_umum')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('satuan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun')
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
            'index' => Pages\ListParameterUmums::route('/'),
            'create' => Pages\CreateParameterUmum::route('/create'),
            'edit' => Pages\EditParameterUmum::route('/{record}/edit'),
        ];
    }
}
