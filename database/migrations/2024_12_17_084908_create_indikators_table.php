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
        Schema::create('indikators', function (Blueprint $table) {
            $table->id();
            $table->string('kode_indikator')->autoIncrement();
            $table->string('nama_indikator');
            $table->text('deskripsi');
            $table->integer('persentase');
            $table->integer('tahun');
            $table->integer('kode_desa');
            $table->dateTime('timestamp');
            $table->foreignId('desa_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikators');
    }
};
