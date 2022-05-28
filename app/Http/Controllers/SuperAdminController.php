<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('admin.superadmin', [
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
              'password' => 'required|min:5',
              'unitLayanan' => 'required',
              'is_admin' => 'required',
          ]);

        User::create($validatedData);
        $request->session()->flash('success', 'Berhasil Mendaftar!');
        return redirect('/superadmin');
    }
}
