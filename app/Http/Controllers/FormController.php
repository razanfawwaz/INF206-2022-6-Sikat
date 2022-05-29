<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class FormController extends Controller
{
    public function readdata()
    {
        $form = DB::table('form')->get();
        return view('dashboard/dashboard', ['form' => $form]);
    }

    public function userData()
    {
        DB:table('users')
        ->where('id', Auth::user()->id)
        ->get();
    }

    public function input()
    {
        return view('dashboard.form');
    }

    public function store(Request $request)
    {
        DB::table('form')->insert([
            'users_id' => Auth::user()->id,
            'Nama' => Auth::user()->name,
            'NomorHP' => Auth::user()->noHp,
            'UnitLayanan' => $request->UnitLayanan,
            'DeskripsiSingkatKejadian' => $request->DeskripsiSingkatKejadian,
            'AlamatKejadian' => $request->AlamatKejadian
        ]);

        $request->session()->flash('success', 'Berhasil Membuat Laporan!');
        return redirect('/home');
    }
}
