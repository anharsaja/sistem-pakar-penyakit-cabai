<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BobotGejala;
use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Support\Facades\DB;

class BobotGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mapping bobot sesuai Tabel 3.5
        // setiap baris: 'Gx' => [P1, P2, P3, P4, P5]
        $matrix = [
            'G1'  => [0.2, 0.8, 0.2, 1.0, 0.6],
            'G2'  => [0.2, 0.2, 0.2, 0.6, 0.2],
            'G3'  => [0.8, 0.8, 0.2, 0.2, 0.2],
            'G4'  => [0.2, 0.2, 0.6, 0.2, 0.2],
            'G5'  => [0.2, 0.2, 0.4, 0.2, 0.2],
            'G6'  => [0.6, 0.2, 0.2, 0.2, 0.2],
            'G7'  => [0.2, 0.4, 1.0, 0.2, 0.2],
            'G8'  => [0.2, 0.6, 1.0, 0.2, 0.2],
            'G9'  => [0.2, 0.2, 0.8, 0.2, 0.2],
            'G10' => [0.2, 0.2, 0.2, 0.2, 0.2],
            'G11' => [0.2, 0.2, 0.2, 0.6, 0.2],
            'G12' => [0.2, 0.2, 0.2, 0.2, 0.2],
            'G13' => [0.2, 0.2, 0.4, 0.2, 0.2],
            'G14' => [0.2, 0.2, 0.2, 0.4, 1.0],
            'G15' => [0.2, 0.6, 0.2, 0.2, 0.2],
            'G16' => [0.2, 0.2, 0.2, 0.6, 1.0],
            'G17' => [0.2, 0.2, 0.6, 0.2, 0.2],
        ];

        // Pastikan penyakit & gejala tersedia
        $p1 = Disease::where('kode', 'P1')->first();
        $p2 = Disease::where('kode', 'P2')->first();
        $p3 = Disease::where('kode', 'P3')->first();
        $p4 = Disease::where('kode', 'P4')->first();
        $p5 = Disease::where('kode', 'P5')->first();

        if (!$p1 || !$p2 || !$p3 || !$p4 || !$p5) {
            $this->command->error('Seeder gagal: salah satu kode penyakit P1..P5 tidak ditemukan. Jalankan dulu PenyakitSeeder.');
            return;
        }

        // Ambil id penyakit dalam array urut P1..P5
        $penyakitIds = [
            $p1->id,
            $p2->id,
            $p3->id,
            $p4->id,
            $p5->id,
        ];

        DB::table('bobot_gejalas')->truncate(); // <-- letakkan di luar transaction()

        DB::transaction(function () use ($matrix, $penyakitIds) {
            $rows = [];

            foreach ($matrix as $gejalaKode => $weights) {
                $gejala = Symptom::where('kode', $gejalaKode)->first();

                if (!$gejala) continue;

                foreach ($weights as $idx => $bobot) {
                    $rows[] = [
                        'disease_id' => $penyakitIds[$idx],
                        'symptom_id'   => $gejala->id,
                        'bobot'       => $bobot,
                        'created_at'  => now(),
                        'updated_at'  => now(),
                    ];
                }
            }

            BobotGejala::insert($rows);
        });
    }
}
