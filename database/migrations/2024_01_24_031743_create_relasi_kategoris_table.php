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
        Schema::create('relasi_kategoris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_buku');
            $table->unsignedBigInteger('id_kategori');
            $table->timestamps();

            $table->foreign('id_buku')->references('id')->on('bukus');
            $table->foreign('id_kategori')->references('id')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relasi_kategoris');
    }
};
