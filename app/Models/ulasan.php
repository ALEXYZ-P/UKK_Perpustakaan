<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_buku',
        'ulasan',
        'rating'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class,'id_buku','id');
    }
}
