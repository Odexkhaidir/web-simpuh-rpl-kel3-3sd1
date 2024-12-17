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
        Schema::create('saran_penanganan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_saran_penanganan')->autoIncrement();
            $table->text('saran_penanganan');
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
        Schema::dropIfExists('saran_penanganans');
    }
};
