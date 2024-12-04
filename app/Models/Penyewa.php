<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name', 
        'email', 
        'phone_number', 
        'address', 
        'date',
        'ktp_number', 
        'status',
        'created_at',
        'updated_at',
    ];

    // Jika Anda memiliki relasi dengan model lain, tambahkan di sini
    // Misalnya, jika ada relasi dengan model `Kost`:
    // public function kost()
    // {
    //     return $this->belongsTo(Kost::class);
    // }
}
