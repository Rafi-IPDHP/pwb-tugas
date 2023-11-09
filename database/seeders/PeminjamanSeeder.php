<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peminjaman;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peminjamans = [
            [
                'tanggal_pinjam' => '2023-11-09',
                'tanggal_kembali' => '2023-11-10',
                'id_buku' => 1,
                'id_anggota' => 1,
                'id_petugas' => 1,
            ],
        ];
        foreach($peminjamans as $key => $value) {
            Peminjaman::create($value);
        }
    }
}
