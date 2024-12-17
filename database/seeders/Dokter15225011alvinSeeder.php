<?php

namespace Database\Seeders;

use App\Models\Dokter15225011alvin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dokter15225011alvinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'drg. Aliong', 'spesialisasi' => 'Gigi'],
            ['nama' => 'dr. Aming', 'spesialisasi' => 'Umum'],
            ['nama' => 'dr. Lingling, Sp.OG', 'spesialisasi' => 'Obstetrik & Ginekologi'],
        ];

        foreach ($data as $pasien) {
            Dokter15225011alvin::create($pasien);
        }
    }
}
