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
        Schema::create('output_kekumuhan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_output')->autoIncrement();
            $table->integer('indeks_kumuh');
            $table->string('status_kumuh');
            $table->float('kontribusi_penanganan');
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
        Schema::dropIfExists('output_kekumuhans');
    }
};
