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
    protected $table = 'desa';

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

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function indikator(): HasMany
    {
        return $this->hasMany(Indikator::class);
    }

    public function saranPenanganan(): HasMany
    {
        return $this->hasMany(SaranPenanganan::class);
    }

    public function parameterUmum(): HasMany
    {
        return $this->hasMany(ParameterUmum::class);
    }

    public function outputKekumuhan(): HasMany
    {
        return $this->hasMany(OutputKekumuhan::class);
    }

    public function laporan(): HasMany
    {
        return $this->hasMany(Laporan::class);
    }
}
