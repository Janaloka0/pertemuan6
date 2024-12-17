<?php

namespace Database\Seeders;

use App\Models\Pasien15225011alvin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pasien15225011alvinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Ahong', 'tanggal_lahir' => '2000-01-01', 'alamat' => 'Jl. Tani'],
            ['nama' => 'Aming', 'tanggal_lahir' => '1994-07-21', 'alamat' => 'Jl. Pancasila'],
            ['nama' => 'Budi', 'tanggal_lahir' => '1992-05-10', 'alamat' => 'Jl. Melati'],
            ['nama' => 'Cindy', 'tanggal_lahir' => '1988-11-15', 'alamat' => 'Jl. Anggrek'],
            ['nama' => 'Dani', 'tanggal_lahir' => '1996-03-05', 'alamat' => 'Jl. Mawar'],
            ['nama' => 'Eka', 'tanggal_lahir' => '1985-09-30', 'alamat' => 'Jl. Kenanga'],
            ['nama' => 'Fauzi', 'tanggal_lahir' => '1993-12-12', 'alamat' => 'Jl. Seruni'],
            ['nama' => 'Gita', 'tanggal_lahir' => '1995-06-20', 'alamat' => 'Jl. Flamboyan'],
            ['nama' => 'Hadi', 'tanggal_lahir' => '1989-04-28', 'alamat' => 'Jl. Cempaka'],
            ['nama' => 'Indah', 'tanggal_lahir' => '2001-02-14', 'alamat' => 'Jl. Bougenville'],
        ];

        foreach ($data as $pasien) {
            Pasien15225011alvin::create($pasien);
        }
    }
}
