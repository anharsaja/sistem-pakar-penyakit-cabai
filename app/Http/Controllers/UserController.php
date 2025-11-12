<?php

namespace App\Http\Controllers;

use App\Models\BobotGejala;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        $basis = BobotGejala::with(['disease', 'symptom'])->get();
        return view('pages.dashboard.index');
    }
}
