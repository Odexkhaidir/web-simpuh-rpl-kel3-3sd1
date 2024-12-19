<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendataan_rumah_tanggas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            $table->integer('nama_kecamatan');
            $table->foreignId('desa_id');
            $table->timestamps();
            $table->string('kode_rt');
            $table->string('alamat');
            $table->string('kepala_keluarga');
            $table->integer('jumlah_keluarga');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendataan_rumah_tanggas');
    }
};
