<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Indikator extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_indikator',
        'nama_indikator',
        'deskripsi',
        'persentase',
        'tahun',
        'kode_desa',
        'timestamp',
        'desa_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'timestamp' => 'datetime',
        'desa_id' => 'integer',
    ];

    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }

    public function subIndikator(): HasMany
    {
        return $this->hasMany(SubIndikator::class, 'kode_indikator', 'id');
    }

    public function parameterIndikators(): HasMany
    {
        return $this->hasMany(ParameterIndikator::class);
    }
}
