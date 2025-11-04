<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kode' => 'G1', 'nama_gejala' => 'Daun Menguning'],
            ['kode' => 'G2', 'nama_gejala' => 'Tulang Daun Menebal'],
            ['kode' => 'G3', 'nama_gejala' => 'Daun Layu'],
            ['kode' => 'G4', 'nama_gejala' => 'Buah Mengering'],
            ['kode' => 'G5', 'nama_gejala' => 'Buah Bercak Mengkilap'],
            ['kode' => 'G6', 'nama_gejala' => 'Batang Menguning'],
            ['kode' => 'G7', 'nama_gejala' => 'Buah Busuk'],
            ['kode' => 'G8', 'nama_gejala' => 'Buah Berubah Warna'],
            ['kode' => 'G9', 'nama_gejala' => 'Luka Melebar'],
            ['kode' => 'G10', 'nama_gejala' => 'Daun Rontok'],
            ['kode' => 'G11', 'nama_gejala' => 'Tidak Berbuah'],
            ['kode' => 'G12', 'nama_gejala' => 'Akar Rusak'],
            ['kode' => 'G13', 'nama_gejala' => 'Buah Berair'],
            ['kode' => 'G14', 'nama_gejala' => 'Daun Mengecil'],
            ['kode' => 'G15', 'nama_gejala' => 'Batang Kecoklatan'],
            ['kode' => 'G16', 'nama_gejala' => 'Daun Keriting'],
            ['kode' => 'G17', 'nama_gejala' => 'Buah Keriput'],
        ];

        Gejala::insert($data);
    }
}
