<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SaranPenangananResource\Pages;
use App\Filament\Resources\SaranPenangananResource\RelationManagers;
use App\Models\SaranPenanganan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SaranPenangananResource extends Resource
{
    protected static ?string $model = SaranPenanganan::class;

    protected static ?string $navigationIcon = 'heroicon-m-chat-bubble-oval-left-ellipsis';

    protected static ?string $navigationLabel = 'Saran Penanganan';

    protected static ?string $modelLabel = 'Saran Penanganan Desa';

    protected static ?string $pluralModelLabel = 'Saran Penanganan Desa';

    protected static ?string $slug = 'saran-penanganan';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_saran_penanganan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('saran_penanganan')
                    ->required()
                    ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('kode_saran_penanganan')
                    ->searchable(),
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
            'index' => Pages\ListSaranPenanganans::route('/'),
            'create' => Pages\CreateSaranPenanganan::route('/create'),
            'edit' => Pages\EditSaranPenanganan::route('/{record}/edit'),
        ];
    }
}
