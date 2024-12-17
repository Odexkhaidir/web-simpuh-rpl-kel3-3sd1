<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OutputKekumuhanResource\Pages;
use App\Filament\Resources\OutputKekumuhanResource\RelationManagers;
use App\Models\OutputKekumuhan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OutputKekumuhanResource extends Resource
{
    protected static ?string $model = OutputKekumuhan::class;

    protected static ?string $navigationIcon = 'heroicon-m-calculator';

    protected static ?string $navigationGroup = 'Indikator Kekumuhan';
    
    protected static ?string $navigationLabel = 'Output Kekumuhan';

    protected static ?string $modelLabel = 'Output';

    protected static ?string $pluralModelLabel = 'Output';

    protected static ?int $navigationSort = 5;

    protected static ?string $slug = 'output-kekumuhan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_output')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('indeks_kumuh')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status_kumuh')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kontribusi_penanganan')
                    ->required()
                    ->numeric(),
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
                Tables\Columns\TextColumn::make('kode_output')
                    ->searchable(),
                Tables\Columns\TextColumn::make('indeks_kumuh')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_kumuh')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kontribusi_penanganan')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListOutputKekumuhans::route('/'),
            'create' => Pages\CreateOutputKekumuhan::route('/create'),
            'edit' => Pages\EditOutputKekumuhan::route('/{record}/edit'),
        ];
    }
}
