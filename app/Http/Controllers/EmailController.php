<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Email;
use App\Http\Requests\EmailRequest;

class EmailController extends Controller
{
    //
    public function create()
    {
        return view('email');
    }

    public function store(EmailRequest $request)
    {
        $email = new Email;
        $email->email = $request->email;
        $email->save();

        return view('email_ok');
    }
}
