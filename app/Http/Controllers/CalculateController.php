<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('pages.calculate.index', compact('gejalas'));
    }
}
