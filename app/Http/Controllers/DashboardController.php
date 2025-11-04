<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BasisPengetahuan;
use App\Models\BobotGejala;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $basis = BobotGejala::with(['penyakit', 'gejala'])->get();
        return view('pages.dashboard.index');
    }
}
