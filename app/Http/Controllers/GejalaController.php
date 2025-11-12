<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Routing\Controller;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Symptom::all();
        return view('pages.gejala.index', compact('gejalas'));
    }

    public function bobot()
    {
        $penyakits = Disease::with('symptom')->get();
        $gejalas = Symptom::all();

        return view('pages.gejala.bobot', compact('penyakits', 'gejalas'));
    }
}
