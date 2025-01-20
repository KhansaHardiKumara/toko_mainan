<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'stok', 'harga'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
