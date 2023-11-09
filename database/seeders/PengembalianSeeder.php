<?php

namespace Database\Seeders;

use App\Models\Pengembalian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengembalians = [
            [
                'tanggal_pengembalian' => '2023-11-10',
                'denda' => 10000,
                'id_buku' => 1,
                'id_anggota' => 1,
                'id_petugas' => 1,
            ],
        ];
        foreach($pengembalians as $key => $value) {
            Pengembalian::create($value);
        }
    }
}
