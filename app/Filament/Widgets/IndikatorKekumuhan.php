<?php

namespace App\Filament\Widgets;

use App\Models\Indikator; // Ganti dengan model yang sesuai
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class IndikatorKekumuhan extends BaseWidget
{
    protected static ?int $sort = 3;

    public function table(Table $table): Table
    {
        return $table
            -> query($this->query())
            ->columns([
                Tables\Columns\TextColumn::make('kode_indikator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_indikator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('persentase')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode_desa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desa.nama_desa') // Pastikan relasi benar
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
                Tables\Filters\Filter::make('tahun')
                    ->query(fn (Builder $query) => $query->where('tahun', request('tahun')))
                    ->label('Filter Tahun'),

                Tables\Filters\SelectFilter::make('nama_desa')
                    ->relationship('desa', 'nama_desa') // Relasi ke tabel desa
                    ->label('Nama Desa'),
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

    /**
     * Query default untuk tabel.
     */
    public function query(): Builder
    {
        $query = Indikator::query();

        // Logika tambahan jika filter diterapkan
        if (request()->filled('tahun')) {
            $query->where('tahun', request('tahun'));
        }

        return $query;
    }
}
