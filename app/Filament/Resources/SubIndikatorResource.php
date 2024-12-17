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
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
