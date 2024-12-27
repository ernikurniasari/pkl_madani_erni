<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'produk';
    protected $primarykey = 'id';
    protected $guarded ="id";
    protected $attributes = [
       'judul',
       'deskripsi',
       'gambar',
       'harga',
       'stok',
       'gambar'
    ];

    protected $fillabe = [
       'judul',
       'deskripsi',
       'gambar',
       'harga',
       'stok',
    ];
}
