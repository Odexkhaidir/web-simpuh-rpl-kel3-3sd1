<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubIndikator extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_sub_indikator',
        'volume',
        'satuan',
        'persentase',
        'nilai',
        'versi',
        'kode_indikator',
        'kode_desa',
        'indikator_id',
        'timestamp',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'timestamp' => 'datetime',
        'indikator_id' => 'integer',
    ];

    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }
    
    public function indikator(): BelongsTo
    {
        return $this->belongsTo(Indikator::class, 'kode_indikator', 'id');
    }
}
