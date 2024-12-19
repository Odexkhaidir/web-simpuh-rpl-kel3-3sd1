<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PendataanRumahTangga extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array\
     */
    protected $fillable = [
        'nama_desa',
        'nama_kecamatan',
        'desa_id',
        'timestamp',
        'kode_rt',
        'alamat',
        'kepala_keluarga',
        'jumlah_keluarga',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function kecamatans(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function desas(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }
}
