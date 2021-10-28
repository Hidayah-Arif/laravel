<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    protected $table = 'toko';
    protected $fillable = ['nama_barang','jenis','jumlah','harga'];
}
