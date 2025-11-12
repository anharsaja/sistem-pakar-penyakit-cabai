<?php

namespace App\Http\Controllers;

use App\Models\Symptom;

class CalculateController extends Controller
{
    public function index()
    {
        $gejalas = Symptom::all();
        return view('pages.calculate.index', compact('gejalas'));
    }
}
