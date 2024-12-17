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
        Schema::create('parameter_umum', function (Blueprint $table) {
            $table->id();
            $table->string('kode_parameter_umum')->autoIncrement();
            $table->string('nama_parameter_umum');
            $table->integer('nilai');
            $table->string('satuan');
            $table->integer('tahun');
            $table->integer('kode_desa');
            $table->foreignId('desa_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameter_umums');
    }
};
