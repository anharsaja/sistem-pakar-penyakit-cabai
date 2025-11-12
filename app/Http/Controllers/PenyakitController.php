<?php

namespace App\Http\Controllers;

use App\Models\BobotPakar;
use App\Models\Disease;
use Illuminate\Routing\Controller;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakits = Disease::all();
        return view('pages.penyakit.index', compact('penyakits'));
    }

    public function bobot()
    {
        $bobotpakars = BobotPakar::with(['disease', 'symptom'])->get();

        return view('pages.penyakit.bobot', compact('bobotpakars'));
    }
}
