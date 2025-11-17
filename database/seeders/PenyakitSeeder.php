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
                'description' => 'Layu Fusarium adalah penyakit yang disebabkan oleh jamur Fusarium oxysporum f. sp. capsici yang menginfeksi akar dan jaringan pembuluh xilem. Jamur berkembang di tanah dan menyerang tanaman dari bawah, menyebabkan penyumbatan aliran air dan nutrisi. Gejalanya meliputi daun menguning, layu bertahap, pertumbuhan tanaman terhambat, serta perubahan warna coklat pada jaringan pembuluh. Penyakit ini sulit dikendalikan karena jamur dapat bertahan lama di tanah.',
                'saran' => [
                    'Aplikasikan Trichoderma secara rutin pada area perakaran untuk menekan perkembangan jamur patogen Fusarium.',
                    'Cabut dan musnahkan tanaman yang menunjukkan gejala layu untuk mencegah penyebaran melalui tanah.',
                    'Gunakan media tanam yang steril dan hindari penggunaan tanah bekas tanpa proses sterilisasi.',
                    'Tingkatkan drainase lahan agar air tidak menggenang, karena kondisi lembap mempercepat perkembangan jamur.',
                    'Lakukan rotasi tanaman dengan komoditas non-inang seperti jagung atau kacang-kacangan selama 2–3 musim.',
                ],
            ],
            [
                'kode' => 'P2',
                'nama_penyakit' => 'Layu Ralstonia',
                'description' => 'Layu Ralstonia adalah penyakit bakteri yang disebabkan oleh Ralstonia solanacearum. Bakteri ini sangat agresif, menyerang jaringan pembuluh air tanaman dan menyebabkan layu mendadak. Penyakit dapat menyebar melalui tanah, air irigasi, luka pada akar, alat bercocok tanam, dan serangga tanah. Tanaman yang terinfeksi biasanya mati dalam waktu singkat.',
                'saran' => [
                    'Sterilkan semua alat pertanian yang terkontaminasi menggunakan disinfektan sebelum digunakan kembali.',
                    'Cabut dan musnahkan tanaman yang terinfeksi untuk memutus rantai penyebaran bakteri.',
                    'Hindari penggunaan air irigasi dari sumber yang tidak bersih atau telah tercemar bakteri.',
                    'Tingkatkan aerasi tanah dan hindari kondisi lahan yang terlalu basah.',
                    'Gunakan varietas tahan layu bakteri jika tersedia di daerah Anda.',
                ],
            ],
            [
                'kode' => 'P3',
                'nama_penyakit' => 'Busuk Buah',
                'description' => 'Busuk Buah pada cabai disebabkan oleh berbagai jamur seperti Colletotrichum spp. (antraknosa), Phytophthora spp., atau Alternaria spp. Penyakit ini menyebabkan bercak cekung, lunak, berwarna coklat atau hitam pada buah. Pada kondisi lembap, jamur berkembang cepat dan menyebabkan kerusakan berat serta menurunkan kualitas panen.',
                'saran' => [
                    'Lakukan sanitasi kebun dengan membersihkan sisa buah atau tanaman yang terinfeksi.',
                    'Panen buah tepat waktu dan hindari membiarkan buah matang terlalu lama di pohon.',
                    'Gunakan mulsa untuk menghindari kontak langsung buah dengan tanah yang terkontaminasi.',
                    'Semprotkan fungisida sesuai dosis anjuran jika serangan mulai meluas.',
                    'Pastikan tanaman memiliki ventilasi udara yang baik dengan jarak tanam ideal.',
                ],
            ],
            [
                'kode' => 'P4',
                'nama_penyakit' => 'Virus Kuning',
                'description' => 'Virus Kuning pada cabai disebabkan oleh Begomovirus dan ditularkan oleh kutu kebul (Bemisia tabaci). Virus menyerang jaringan daun dan menyebabkan klorosis (daun menguning), pertumbuhan kerdil, serta penurunan hasil yang signifikan. Sekali terinfeksi, tanaman tidak dapat sembuh sehingga pengendalian fokus pada pencegahan.',
                'saran' => [
                    'Kendalikan populasi kutu kebul sebagai vektor utama, misalnya menggunakan perangkap kuning atau insektisida ramah lingkungan.',
                    'Gunakan mulsa perak untuk mengurangi serangan vektor pada fase awal pertumbuhan.',
                    'Cabut dan musnahkan tanaman yang terinfeksi untuk mencegah sumber inokulum virus.',
                    'Bersihkan gulma inang yang dapat menjadi tempat berkembang biaknya kutu kebul.',
                    'Tanam varietas cabai yang memiliki toleransi terhadap virus jika tersedia.',
                ],
            ],
            [
                'kode' => 'P5',
                'nama_penyakit' => 'Virus Keriting',
                'description' => 'Virus Keriting pada cabai disebabkan oleh virus yang ditularkan oleh kutu kebul (Bemisia tabaci). Gejalanya meliputi daun menggulung ke atas, keriting, pertumbuhan terhambat, dan menurunnya jumlah buah. Penyakit ini sangat merugikan karena dapat menyebabkan gagal panen jika serangan terjadi pada fase pertumbuhan awal.',
                'saran' => [
                    'Musnahkan tanaman yang sudah terinfeksi berat karena tidak dapat disembuhkan.',
                    'Gunakan perangkap kuning untuk mengurangi populasi kutu kebul di sekitar lahan.',
                    'Bersihkan gulma di sekitar kebun karena sering menjadi tempat persembunyian dan berkembang biaknya kutu kebul.',
                    'Semprotkan insektisida nabati seperti ekstrak bawang putih atau mimba untuk menekan populasi vektor.',
                    'Tanam varietas tahan virus atau gunakan bibit sehat dari sumber tepercaya.',
                ],
            ],
        ];


        foreach ($penyakits as $p) {
            $penyakit = Disease::create([
                'kode' => $p['kode'],
                'nama_penyakit' => $p['nama_penyakit'],
                'description' => $p['description']
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
