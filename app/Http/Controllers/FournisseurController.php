<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index()
    {
        
        return view('components.fournisseur');
    }
}
