<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParameterIndikator extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_parameter_indikator',
        'nilai',
        'satuan',
        'nama_sub_indikator',
        'nama_indikator',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'indikator_id' => 'integer',
    ];

    public function indikator(): BelongsTo
    {
        return $this->belongsTo(Indikator::class, 'nama_indikator', 'id');
    }
    public function sub_indikator(): BelongsTo
    {
        return $this->belongsTo(SubIndikator::class, 'nama_sub_indikator', 'id');
    }
}
