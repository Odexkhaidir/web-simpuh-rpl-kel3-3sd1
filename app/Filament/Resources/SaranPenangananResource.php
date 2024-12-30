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
                    ->columnSpan(2)
                    ->label('Kode Saran Penanganan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('desa_id')
                    ->label('Desa')
                    ->relationship('desa', 'nama_desa')
                    ->required()
                    ->placeholder('Pilih Desa...')
                    ->reactive() // Membuat komponen ini reaktif
                    ->afterStateUpdated(function (callable $set, $state) {
                        // Cari desa berdasarkan ID dan isi kode_desa secara otomatis
                        $desa = \App\Models\Desa::find($state);
                        $set('kode_desa', $desa?->kode_desa);
                    }),
                Forms\Components\TextInput::make('kode_desa')
                    ->label('Kode Desa')
                    ->required()
                    ->readonly(),
                Forms\Components\Textarea::make('saran_penanganan')
                    ->label('Saran Penanganan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_saran_penanganan')
                    ->label('Kode Saran Penanganan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('desa.nama_desa')
                    ->label('Nama Desa')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_desa')
                    ->label('Kode Desa')
                    ->sortable(),
                Tables\Columns\TextColumn::make('saran_penanganan')
                    ->label('Saran Penanganan'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->emptyStateActions([
                Tables\Actions\Action::make('create')
                    ->label('Tambah Saran Penanganan Baru')
                    ->icon('heroicon-o-plus')
                    ->url(static::getUrl('create'))
            ])
            ->emptyStateIcon('heroicon-o-chat-bubble-left-ellipsis')
            ->emptyStateHeading('Belum Ada Saran Penanganan')
            ->emptyStateDescription('Silakan tambahkan saran penanganan untuk memulai.')
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
