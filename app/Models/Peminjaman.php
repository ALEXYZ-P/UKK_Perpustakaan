<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_buku',
        'jumlah_peminjaman',
        'tgl_pengajuan',
        'tgl_peminjaman',
        'tgl_pengembalian',
        'masa_pinjam',
        'status'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class,'id_buku','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
}
