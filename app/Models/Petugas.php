<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;
    protected $table = 'petugas';
    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'jabatan_petugas',
        'no_telp_petugas',
        'alamat_petugas',
    ];
    public function peminjaman() {
        return $this->hasMany(Peminjaman::class);
    }
    public function pengembalian() {
        return $this->hasMany(Pengembalian::class);
    }
}
