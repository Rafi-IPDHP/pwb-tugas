<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugas = [
            [
                'username' => 'aldo',
                'password' => bcrypt('petugas'),
                'nama_petugas' => 'aldooo sepuh',
                'jabatan_petugas' => 'CTO',
                'no_telp_petugas' => '0875767',
                'alamat_petugas' => 'belakang sekola',
            ],
            [
                'username' => 'bedul',
                'password' => bcrypt('petugas'),
                'nama_petugas' => 'bedul',
                'jabatan_petugas' => 'IT Support',
                'no_telp_petugas' => '0885858',
                'alamat_petugas' => 'jauhhhh pake helm 2',
            ],
        ];
        foreach($petugas as $key => $value) {
            Petugas::create($value);
        }
    }
}
