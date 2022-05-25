<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    
    public function store(Request $request)
    {
        //return request()->all();
        $validatedData = $request->validate([
              'email' => 'required|email:dns|unique:users',
              'name' => 'required|max:50',
              'noHp' => 'required',
              'password' => 'required|min:5'
          ]);

        User::create($validatedData);
        $request->session()->flash('success', 'Berhasil Mendaftar!');
        return redirect('/login');
    }
}
