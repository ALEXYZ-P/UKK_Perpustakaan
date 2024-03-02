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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_buku');
            $table->integer('jumlah_peminjaman');
            $table->date('tgl_pengajuan');
            $table->date('tgl_peminjaman')->nullable();
            $table->date('tgl_pengembalian')->nullable();
            $table->integer('masa_pinjam')->nullable();
            $table->text('note')->nullable();
            $table->enum('status',['MENGANTRE','DIPINJAM','DIKEMBALIKAN','TERLAMBAT']);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_buku')->references('id')->on('bukus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
