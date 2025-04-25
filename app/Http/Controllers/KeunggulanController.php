<?php

namespace App\Http\Controllers;

use App\Models\Keunggulan;

class KeunggulanController extends Controller
{
    public function index()
    {
        $keunggulan = Keunggulan::all();
        return view('beranda', compact('keunggulan'));
    }
}