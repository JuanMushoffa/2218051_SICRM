<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_transaksi','id_barang','harga_produk',
    ];

    protected $table = 'tb_transaksipenjualan';
    public $timestamps = false;

}
