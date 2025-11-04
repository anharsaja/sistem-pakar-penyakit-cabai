<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BasisPengetahuan;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $basis = BasisPengetahuan::with(['penyakit', 'gejala'])->get();
        return view('pages.dashboard.index');
    }
}
