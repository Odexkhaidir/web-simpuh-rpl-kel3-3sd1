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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_laporan')->autoIncrement();
            $table->dateTime('timestamp');
            $table->string('isi_laporan');
            $table->string('photo_bukti');
            $table->string('status_laporan');
            $table->integer('kode_user');
            $table->integer('kode_desa');
            $table->foreignId('desa_id');
            $table->timestamps();
            $table->string('judul');
            $table->string('deskripsi');
            $table->dateTime('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
