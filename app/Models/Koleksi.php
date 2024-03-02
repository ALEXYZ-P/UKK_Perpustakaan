<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_buku'
    ];

    function user(){
        return $this->belongsTo(User::class, 'id_user','id');
    }

    function buku(){
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }
}
