<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointdeventeController extends Controller
{
    public function index()
    {
        return view('components.pointdevente');
    }
}
