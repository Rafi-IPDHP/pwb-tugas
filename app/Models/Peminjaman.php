<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjamans';
    protected $fillable = [
        'tanggal_pinjam',
        'tanggal_kembali',
        'id_buku',
        'id_anggota',
        'id_petugas',
    ];

    public function anggota() {
        return $this->hasMany(Anggota::class, 'id_anggota', 'id');
    }
    public function petugas() {
        return $this->hasMany(Petugas::class, 'id_petugas', 'id');
    }
    public function buku() {
        return $this->hasMany(Buku::class, 'id_buku', 'id');
    }
}
