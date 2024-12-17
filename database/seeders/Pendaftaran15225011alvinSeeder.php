<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pendaftaran15225011alvin;
use Carbon\Carbon;

class Pendaftaran15225011alvinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['pasien_id' => '1', 'dokter_id' => '1','tanggal_daftar'=>'2024-06-17','nomor_antrian'=>'1'],
            ['pasien_id' => '2', 'dokter_id' => '2','tanggal_daftar'=>'2024-06-18','nomor_antrian'=>'2'],
            ['pasien_id' => '3', 'dokter_id' => '3','tanggal_daftar'=>'2024-06-19','nomor_antrian'=>'3'],
            ['pasien_id' => '4', 'dokter_id' => '4','tanggal_daftar'=>'2024-06-20','nomor_antrian'=>'4'],
        ];
        foreach ($data as $pasien) {
            Pendaftaran15225011alvin::create($pasien);
        }
    }
}
