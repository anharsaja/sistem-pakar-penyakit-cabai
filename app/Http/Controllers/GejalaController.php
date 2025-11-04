<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\BobotGejala;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('pages.gejala.index', compact('gejalas'));
    }

    public function bobot()
    {
        $penyakits = Penyakit::with('gejalas')->get();
        $gejalas = Gejala::all();

        return view('pages.gejala.bobot', compact('penyakits', 'gejalas'));
    }
}
