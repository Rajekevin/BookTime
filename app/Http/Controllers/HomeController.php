<?php
/**
 * Created by PhpStorm.
 * User: rajek
 * Date: 10/06/2018
 * Time: 10:25
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}