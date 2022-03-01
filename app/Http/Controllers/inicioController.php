<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inmuebles;

class inicioController extends Controller
{
    public function index()
    {
        $inmuebles = inmuebles::paginate(5);
        return view('inicio', compact('inmuebles'));
    }

    public function indexshow($id)
    {
        $inmuebles=inmuebles::findOrFail($id);
        return view('inicioshow', compact('inmuebles'));
    }
}
