<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubIndikator extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_sub_indikator',
        'nama_sub_indikator',
        'nilai',
        'satuan',
        'persentase',
        'versi',
        'kode_indikator',
        'timestamp',
        'indikator_id',
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

    public function indikator(): BelongsTo
    {
        return $this->belongsTo(Indikator::class);
    }
}
