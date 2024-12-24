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
        Schema::create('sub_indikators', function (Blueprint $table) {
            $table->id();
            $table->string('kode_sub_indikator')->autoIncrement();
            $table->string('nama_sub_indikator');
            $table->integer('nilai');
            $table->string('satuan');
            $table->integer('persentase');
            $table->string('versi');
            $table->integer('kode_indikator');
            $table->dateTime('timestamp');
            $table->foreignId('indikator_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_indikators');
    }
};
