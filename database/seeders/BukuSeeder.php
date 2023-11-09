<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = [
            [
                'kode_buku' => '1',
                'judul_buku' => 'apayaa',
                'penulis_buku' => 'aldo',
                'tahun_terbit' => '100',
                'stok' => 16,
            ],
            [
                'kode_buku' => '2',
                'judul_buku' => 'buku 3',
                'penulis_buku' => 'aldo2',
                'tahun_terbit' => '188',
                'stok' => 19,
            ],
        ];
        foreach($buku as $key => $value) {
            Buku::create($value);
        }
    }
}
