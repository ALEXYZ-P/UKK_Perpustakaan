<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama'
    ];

    public function relasi_kategori()
    {
        return $this->hasMany(RelasiKategori::class,'id_relasikategori','id');
    }

    public function buku()
    {
        return $this->belongsToMany(Buku::class,'relasi_kategoris','id_kategori','id_buku');
    }

}
