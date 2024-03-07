<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\TableCell;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'judul',
        'sampul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'sinopsis',
        'stok'
    ];

    public function relasi_kategori()
    {
        return $this->hasMany(RelasiKategori::class,'id_relasikategori','id');
    }
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class,'relasi_kategoris','id_buku','id_kategori');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }

    // public function userpinjam()
    // {
    //     return $this->belongsToMany(User::class,'peminjaman','id_user','id_buku');
    // }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class,'id_peminjaman','id');
    }


    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'id_ulasan','id');
    }

}
