<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    //Envoie le formulaire
    public function create()
    {
        return view('contact');
    }

    //Enregistre le formulaire
    public function store(Request $request)
    {

//        $this->validate($request, [
//            'nom' => 'bail|required|between:5,20|alpha',
//            'email' => 'bail|required|email',
//            'texte' => 'bail|required|max:250'
//        ]);
        Mail::to('rajekevin@hotmail.fr')
            ->send(new Contact($request->except('_token')));

        return view('confirm');
    }
}
