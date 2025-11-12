<?php

namespace Database\Seeders;

use App\Models\BobotPakar;
use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Database\Seeder;

class BobotPakarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // --- Layu Fusarium ---
            ['penyakit' => 'Layu Fusarium', 'gejala' => 'Daun Layu', 'mb' => 0.9, 'md' => 0.2],
            ['penyakit' => 'Layu Fusarium', 'gejala' => 'Batang Menguning', 'mb' => 0.9, 'md' => 0.2],

            // --- Layu Ralstonia ---
            ['penyakit' => 'Layu Ralstonia', 'gejala' => 'Daun Layu', 'mb' => 0.7, 'md' => 0.1],
            ['penyakit' => 'Layu Ralstonia', 'gejala' => 'Daun Menguning', 'mb' => 0.7, 'md' => 0.3],
            ['penyakit' => 'Layu Ralstonia', 'gejala' => 'Batang Kecoklatan', 'mb' => 0.8, 'md' => 0.2],
            ['penyakit' => 'Layu Ralstonia', 'gejala' => 'Buah Berubah Warna', 'mb' => 0.9, 'md' => 0.1],
            ['penyakit' => 'Layu Ralstonia', 'gejala' => 'Buah Busuk', 'mb' => 0.9, 'md' => 0.2],

            // --- Busuk Buah ---
            ['penyakit' => 'Busuk Buah', 'gejala' => 'Buah Bercak Mengkilap', 'mb' => 1.0, 'md' => 0.2],
            ['penyakit' => 'Busuk Buah', 'gejala' => 'Buah Berair', 'mb' => 1.0, 'md' => 0.1],
            ['penyakit' => 'Busuk Buah', 'gejala' => 'Luka Melebar', 'mb' => 0.8, 'md' => 0.1],
            ['penyakit' => 'Busuk Buah', 'gejala' => 'Buah Busuk', 'mb' => 0.7, 'md' => 0.2],
            ['penyakit' => 'Busuk Buah', 'gejala' => 'Buah Berubah Warna', 'mb' => 0.7, 'md' => 0.3],
            ['penyakit' => 'Busuk Buah', 'gejala' => 'Buah Mengering', 'mb' => 1.0, 'md' => 0.3],
            ['penyakit' => 'Busuk Buah', 'gejala' => 'Buah Keriput', 'mb' => 1.0, 'md' => 0.1],

            // --- Virus Kuning ---
            ['penyakit' => 'Virus Kuning', 'gejala' => 'Daun Menguning', 'mb' => 1.0, 'md' => 0.1],
            ['penyakit' => 'Virus Kuning', 'gejala' => 'Tulang Daun Menebal', 'mb' => 0.7, 'md' => 0.3],
            ['penyakit' => 'Virus Kuning', 'gejala' => 'Daun Keriting', 'mb' => 0.9, 'md' => 0.1],
            ['penyakit' => 'Virus Kuning', 'gejala' => 'Daun Mengecil', 'mb' => 0.9, 'md' => 0.3],
            ['penyakit' => 'Virus Kuning', 'gejala' => 'Tidak Berbuah', 'mb' => 0.7, 'md' => 0.1],

            // --- Virus Keriting ---
            ['penyakit' => 'Virus Keriting', 'gejala' => 'Daun Menguning', 'mb' => 0.6, 'md' => 0.2],
            ['penyakit' => 'Virus Keriting', 'gejala' => 'Daun Mengecil', 'mb' => 1.0, 'md' => 0.2],
            ['penyakit' => 'Virus Keriting', 'gejala' => 'Daun Keriting', 'mb' => 1.0, 'md' => 0.2],
        ];

        foreach ($data as $row) {
            $penyakit = Disease::where('nama_penyakit', $row['penyakit'])->first();
            $gejala   = Symptom::where('nama_gejala', $row['gejala'])->first();

            if ($penyakit && $gejala) {
                BobotPakar::updateOrCreate([
                    'disease_id' => $penyakit->id,
                    'symptom_id'   => $gejala->id,
                ], [
                    'mb' => $row['mb'],
                    'md' => $row['md'],
                ]);
            } else {
                echo "⚠️  Data tidak ditemukan: {$row['penyakit']} - {$row['gejala']}\n";
            }
        }
    }
}
