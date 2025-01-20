<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'password'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
