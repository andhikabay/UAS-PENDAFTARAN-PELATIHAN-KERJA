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
        Schema::create('pendaftarans', function (Blueprint $table) {
    $table->id();
    $table->foreignId('peserta_id')->constrained()->onDelete('cascade');
    $table->foreignId('pelatihan_id')->constrained()->onDelete('cascade');
    $table->enum('status', ['terdaftar', 'mengikuti', 'lulus'])->default('terdaftar');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
