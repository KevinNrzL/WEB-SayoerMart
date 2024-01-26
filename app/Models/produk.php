<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = ['nama_produk', 'deskripsi_produk', 'harga_produk', 'kategori', 'gambar_produk'];
    protected $table = 'produk';
    public $timestamps = false;
}
