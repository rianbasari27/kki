<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    function index()
    {
        $poli = Poli::all();
        return view('index')->with('poli', $poli);
    }
}
