<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaranPenanganan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_saran_penanganan',
        'saran_penanganan',
        'kode_desa',
        'desa_id',
        'kecamatan_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'desa_id' => 'integer',
        'kecamatan_id' => 'integer',
    ];

    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
