<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view ('register.create');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'noHp' => 'required',
            'username' => 'required',
            'psw' => 'required|confirmed',
            'psw-repeat' => 'required|confirmed'
        ]);

        $user = User::create(request(['email', 'noHp', 'username', 'psw', 'psw-repeat']));

        auth()->login($user);

        return redirect('/');
    }
}
