<?php

namespace App\Models;

use App\Http\Controllers\AnggotaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalians';
    protected $fillable = [
        'tanggal_pengembalian',
        'denda',
        'id_buku',
        'id_anggota',
        'id_petugas',
    ];

    public function anggota() {
        return $this->hasMany(Anggota::class, 'id', 'id_anggota');
    }
    public function petugas() {
        return $this->hasMany(Petugas::class, 'id', 'id_petugas');
    }
    public function buku() {
        return $this->hasMany(Buku::class, 'id', 'id_buku');
    }
}
