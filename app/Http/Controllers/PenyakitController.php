<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Models\BobotPakar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakits = Penyakit::all();
        return view('pages.penyakit.index', compact('penyakits'));
    }

    public function bobot()
    {
        $bobotpakars = BobotPakar::with(['penyakit', 'gejala'])->get();

        return view('pages..penyakit.bobot', compact('bobotpakars'));
    }
}
