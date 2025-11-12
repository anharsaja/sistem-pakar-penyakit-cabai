<?php

namespace Database\Seeders;

use App\Models\Disease;
use App\Models\SaranPenanganan;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyakits = [
            [
                'kode' => 'P1',
                'nama_penyakit' => 'Layu Fusarium',
                'saran' => [
                    'Memberikan trichoderma yang merupakan jamur baik yang dapat melawan perkembangan jamur patogen, hal ini sangat efektif untuk mencegah layu fusarium.',
                    'Mencabut tanaman bergejala dengan tujuan mencegah penularan yang lebih cepat ke tanaman yang masih sehat.',
                ],
            ],
            [
                'kode' => 'P2',
                'nama_penyakit' => 'Layu Ralstonia',
                'saran' => [
                    'Sterilkan semua alat yang telah bersentuhan dengan tanaman yang terjangkit menggunakan disinfektan.',
                    'Segera cabut dan musnahkan tanaman yang sakit untuk memutus siklus hidup penyakit layu ralstonia.',
                ],
            ],
            [
                'kode' => 'P3',
                'nama_penyakit' => 'Busuk Buah',
                'saran' => [
                    'Melakukan sanitasi dengan menjaga kebersihan lingkungan dan lahan tanaman.',
                    'Buah yang sudah terinfeksi dimusnahkan atau dibuang di tempat yang jauh dari perkebunan.',
                ],
            ],
            [
                'kode' => 'P4',
                'nama_penyakit' => 'Virus Kuning',
                'saran' => [
                    'Mencegah populasi serangga vektornya yaitu Bemisia tabaci berkembang biak untuk mengurangi prevalensi penyakit kuning.',
                    'Mengurangi jumlah vektor agar intensitas serangan virus kuning pada cabai berkurang.',
                ],
            ],
            [
                'kode' => 'P5',
                'nama_penyakit' => 'Virus Keriting',
                'saran' => [
                    'Memusnahkan tumbuhan yang terkena virus keriting supaya tidak menyebar ke tumbuhan lainnya.',
                    'Menjaga kebersihan area tanaman cabai untuk mengurangi risiko infeksi lebih lanjut.',
                ],
            ],
        ];

        foreach ($penyakits as $p) {
            $penyakit = Disease::create([
                'kode' => $p['kode'],
                'nama_penyakit' => $p['nama_penyakit'],
            ]);

            foreach ($p['saran'] as $s) {
                SaranPenanganan::create([
                    'disease_id' => $penyakit->id,
                    'saran' => $s,
                ]);
            }
        }
    }
}
