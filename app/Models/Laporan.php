<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Laporan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_laporan',
        'timestamp',
        'isi_laporan',
        'photo_bukti',
        'status_laporan',
        'kode_user',
        'kode_desa',
        'desa_id',
        'judul', 
        'deskripsi', 
        'tanggal'
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
        'judul' => 'string', 
        'deskripsi' => 'string', 
        'tanggal' => 'datetime'
    ];

    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }

}
