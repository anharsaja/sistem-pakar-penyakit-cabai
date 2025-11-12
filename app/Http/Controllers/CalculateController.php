<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Symptom;
use App\Models\BobotPakar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculateController extends Controller
{
    public function index()
    {
        $gejalas = Symptom::all();
        return view('pages.calculate.index', compact('gejalas'));
    }

    public function calculate(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'gejala_id' => 'required|array',
            'gejala_id.*' => 'integer|exists:symptoms,id',
            'cf_value' => 'required|array',
            'cf_value.*' => 'numeric|min:0|max:1',
        ]);

        // Gabungkan jadi [symptom_id => cf_user]
        $userSymptoms = [];
        foreach ($validated['gejala_id'] as $index => $id) {
            $userSymptoms[$id] = $validated['cf_value'][$index];
        }

        $diseases = Disease::all();
        $results = [];

        foreach ($diseases as $disease) {
            $cfCombine = 0;

            // Ambil data pakar untuk penyakit ini
            $rules = BobotPakar::where('disease_id', $disease->id)->get();

            foreach ($rules as $rule) {
                $symptomId = $rule->symptom_id;

                // Cek apakah user memasukkan gejala ini
                if (!isset($userSymptoms[$symptomId])) continue;

                $cfUser = $userSymptoms[$symptomId];
                $cfExpert = $rule->mb - $rule->md;

                // Hitung CF sementara
                $cfCurrent = $cfUser * $cfExpert;

                // Gabungkan CF
                if ($cfCombine == 0) {
                    $cfCombine = $cfCurrent;
                } else {
                    $cfCombine = $cfCombine + $cfCurrent * (1 - $cfCombine);
                }
            }

            // Simpan hasil
            $results[] = [
                'penyakit' => $disease->nama_penyakit ?? ('Penyakit ' . $disease->id),
                'cf' => round($cfCombine * 100, 2),
            ];
        }

        // Urutkan berdasarkan CF tertinggi
        usort($results, fn($a, $b) => $b['cf'] <=> $a['cf']);

        return view('pages.calculate.result', compact('results'));
    }
}
