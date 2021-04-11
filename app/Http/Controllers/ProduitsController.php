<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index()
    {
        return view('components.produits');
    }
}
