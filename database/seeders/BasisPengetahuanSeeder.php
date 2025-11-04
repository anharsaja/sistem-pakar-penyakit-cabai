<?php

namespace Database\Seeders;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Database\Seeder;
use App\Models\BasisPengetahuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BasisPengetahuanSeeder extends Seeder
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
        $p1 = Penyakit::where('kode', 'P1')->first();
        $p2 = Penyakit::where('kode', 'P2')->first();
        $p3 = Penyakit::where('kode', 'P3')->first();
        $p4 = Penyakit::where('kode', 'P4')->first();
        $p5 = Penyakit::where('kode', 'P5')->first();

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

        DB::table('basis_pengetahuans')->truncate(); // <-- letakkan di luar transaction()

        DB::transaction(function () use ($matrix, $penyakitIds) {
            $rows = [];

            foreach ($matrix as $gejalaKode => $weights) {
                $gejala = Gejala::where('kode', $gejalaKode)->first();

                if (!$gejala) continue;

                foreach ($weights as $idx => $bobot) {
                    $rows[] = [
                        'penyakit_id' => $penyakitIds[$idx],
                        'gejala_id'   => $gejala->id,
                        'bobot'       => $bobot,
                        'created_at'  => now(),
                        'updated_at'  => now(),
                    ];
                }
            }

            BasisPengetahuan::insert($rows);
        });
    }
}
