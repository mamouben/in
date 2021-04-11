<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConteneursController extends Controller
{
    public function index()
    {
        return view('components.conteneurs');
    }
}
