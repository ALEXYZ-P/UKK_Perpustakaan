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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('sampul')->nullable();
            $table->string('judul');
            $table->string('penulis')->nullable();
            $table->string('penerbit')->nullable();
            $table->integer('tahun_terbit')->nullable();
            $table->text('sinopsis')->nullable();
            $table->integer('stok')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
