<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Desa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_desa',
        'nama_desa',
        'kode_kecamatan',
        'kecamatan_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kecamatan_id' => 'integer',
    ];

    public function kecamatans(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function indikators(): HasMany
    {
        return $this->hasMany(Indikator::class);
    }

    public function saranPenanganans(): HasMany
    {
        return $this->hasMany(SaranPenanganan::class);
    }

    public function parameterUmums(): HasMany
    {
        return $this->hasMany(ParameterUmum::class);
    }

    public function outputKekumuhans(): HasMany
    {
        return $this->hasMany(OutputKekumuhan::class);
    }

    public function laporans(): HasMany
    {
        return $this->hasMany(Laporan::class);
    }
}
