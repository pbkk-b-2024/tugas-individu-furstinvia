<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReturn extends Model
{
    use HasFactory;

    protected $table = 'returns'; // Nama tabel yang digunakan

    protected $fillable = [
        'product_id',
        'return_reason',
        'return_date',
        'status',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'product_id'); // Menghubungkan dengan model Barang
    }
}
