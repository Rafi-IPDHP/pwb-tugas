<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Authenticatable
{
    use HasFactory;
    protected $table = 'anggotas';
    protected $fillable = [
        'kode_anggota',
        'nama_anggota',
        'jk_anggota',
        'jurusan_anggota',
        'no_telp_anggota',
        'alamat_anggota',
    ];

    public function pengembalian() {
        return $this->hasMany(Pengembalian::class);
    }
    public function peminjaman() {
        return $this->hasMany(Peminjaman::class);
    }
}
