<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelasiKategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_buku',
        'id_kategori'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class,'id_buku','id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'id_kategori','id');
    }
}
