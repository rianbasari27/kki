<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    function index()
    {
        $dokter = Dokter::all();
        return view('index')->with('dokter', $dokter);
    }
}
