<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        
        return view('components.clients');
    }
    public function indexpro()
    {
        
        return view('components.clientpro');
    }
}
