<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'memberships';

    // Tentukan field yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_member',  // Nama member
        'email',        // Email member
        'status'        // Status keanggotaan (active/inactive)
    ];
}

