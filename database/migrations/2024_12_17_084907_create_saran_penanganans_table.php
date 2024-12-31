<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('saran_penanganans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_saran_penanganan')->unique();
            $table->foreignId('kecamatan_id')->constrained()->cascadeOnDelete();
            $table->foreignId('desa_id')->constrained()->cascadeOnDelete();
            $table->string('kode_desa')->nullable();
            $table->text('saran_penanganan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('saran_penanganans');
    }
};
