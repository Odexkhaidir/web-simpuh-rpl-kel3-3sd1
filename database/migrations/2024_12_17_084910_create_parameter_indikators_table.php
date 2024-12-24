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
        Schema::create('parameter_indikators', function (Blueprint $table) {
            $table->id();
            $table->string('nama_parameter_indikator');
            $table->integer('nilai');
            $table->string('satuan');
            $table->foreignId('nama_sub_indikator');
            $table->foreignId('nama_indikator');
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
