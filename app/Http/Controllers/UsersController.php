<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    //Envoie le formulaire
    public function create()
    {
        return view('infos');
    }
    
    //Enregistre le formulaire
    public function store(Request $request)
    {
        return 'Le nom est ' . $request->input('nom');
    }
}
