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
        Schema::create('pendaftaran15225011_alvin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('pasien15225011_alvin')->onDelete('cascade');
            $table->foreignId('dokter_id')->constrained('dokter15225011_alvin')->onDelete('cascade');
            $table->dateTime('tanggal_daftar')->default(now());
            $table->integer('nomor_antrian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran15225007_alvin');
    }
};
