<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Http\Request;
use Carbon\Carbon;
class OutputKekumuhan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_output',
        'indeks_kumuh',
        'status_kumuh',
        'kontribusi_penanganan',
        'tahun',
        'kode_desa',
        'desa_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kontribusi_penanganan' => 'float',
        'desa_id' => 'integer',
    ];

    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }
}
