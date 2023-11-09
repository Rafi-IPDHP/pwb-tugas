<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rak;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rak = [
            [
                'nama_rak' => 'rak 1',
                'lokasi_rak' => 'gang 1',
                'id_buku' => 1,
            ],
            [
                'nama_rak' => 'rak 1',
                'lokasi_rak' => 'gang 1',
                'id_buku' => 2,
            ],
        ];
        foreach($rak as $key => $value) {
            Rak::create($value);
        }
    }
}
