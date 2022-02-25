<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inmuebles;

class inicioController extends Controller
{
    public function index()
    {
        $inmuebles =inmuebles::all();
        return view('inicio', compact('inmuebles'));
    }
}
