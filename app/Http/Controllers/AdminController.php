<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BobotGejala;
use App\Models\Consultation;
use App\Models\Disease;
use App\Models\Symptom;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $basis = BobotGejala::with(['disease', 'symptom'])->get();
        // dd($basis);
        $totalDisease = Disease::count();
        $totalSymptom = Symptom::count();
        $totalAdmin = User::where('role', 'admin')->count();
        $totalUser = User::where('role', 'user')->count();
        $totalConsultation = Consultation::count();
        return view('pages.dashboard.index', compact('totalDisease', 'totalSymptom', 'totalAdmin', 'totalUser', 'totalConsultation'));
    }
}
