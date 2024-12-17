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
        Schema::create('parameter_indikator', function (Blueprint $table) {
            $table->id();
            $table->string('kode_parameter_indikator')->autoIncrement();
            $table->string('nama_parameter_indikator');
            $table->integer('nilai');
            $table->string('satuan');
            $table->integer('kode_indikator');
            $table->foreignId('indikator_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameter_indikators');
    }
};
