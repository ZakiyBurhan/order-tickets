<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $guarded = ['id']; 

    public function kamar()
    {
        return $this->belongsToMany(Kamar::class);
    }
}

// User::create([
//     'name' => 'Dwi Nuryanto',
//     'username' => 'dwinuryanto',
//     'email' => 'dwinuryanto@gmail.com'
// ]);

// Kamar::create([
//     'tipe' => 'single',
//     'harga' => '450000',
//     'image' => '',
//     'jumlah_kamar' => '50'
// ]);

// Fasilitas::create([
//     'nama' => 'Kolam Renang',
//     'image' => '',
//     'kategori' => 'Kamar'
// ]);

// Reservasi::create([
//     'kamar_id' => 1,
//     'user_id' => '',
//     'tanggal_checkin' => '2022-08-20',
//     'tanggal_checkout' => '2022-08-21'
// ]);

