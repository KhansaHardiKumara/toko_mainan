<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['kasir_id', 'produk_id', 'jumlah', 'total_harga'];

    public function kasir()
    {
        return $this->belongsTo(Kasir::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
