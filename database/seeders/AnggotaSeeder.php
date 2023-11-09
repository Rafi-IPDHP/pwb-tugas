<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggota = [
            [
                'username' => 'asep',
                'password' => bcrypt('anggota'),
                'kode_anggota' => '1',
                'nama_anggota' => 'asep',
                'jk_anggota' => 'L',
                'jurusan_anggota' => 'SI',
                'no_telp_anggota' => '9083409893',
                'alamat_anggota' => 'akjesbgueskbgkrgnkrkrgngrk',
            ],
            [
                'username' => 'bedul',
                'password' => bcrypt('anggota'),
                'kode_anggota' => '20',
                'nama_anggota' => 'bedulllll',
                'jk_anggota' => 'P',
                'jurusan_anggota' => 'IT',
                'no_telp_anggota' => '088192111',
                'alamat_anggota' => 'Bekasii Bosshhhhh!!!',
            ],
        ];
        foreach($anggota as $key => $value) {
            Anggota::create($value);
        }
    }
}
