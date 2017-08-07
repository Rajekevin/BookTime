<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //HomeMethod
    public function index()
    {

        return view('welcome');
       
    }
}
