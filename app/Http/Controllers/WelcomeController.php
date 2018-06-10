<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /***
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * HomeMethod
     */
    public function index()
    {
        return view('welcome');
    }
}
