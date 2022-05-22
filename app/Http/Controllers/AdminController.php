<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('menuAdmin',[
        'form' => form::where('user_id', auth()->user()->id)->get()
        ]);
    }

}
