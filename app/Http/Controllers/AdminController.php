<?php

namespace App\Http\Controllers;

use App\Models\BobotGejala;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $basis = BobotGejala::with(['disease', 'symptom'])->get();
        return view('pages.dashboard.index');
    }
}
