<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;
    protected $table = 'raks';
    protected $fillable = [
        'nama_rak',
        'lokasi_rak',
        'id_buku',
    ];

    public function buku() {
        return $this->hasMany(Buku::class, 'id', 'id_buku');
    }
}
