<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function readdata()
    {
        $form = DB::table('form')->get();
        return view('dashboard/dashboard', ['form' => $form]);

    }

    public function input()
    {
        return view('dashboard.form');
    }

    public function store(Request $request)
    {
        DB::table('form')->insert([
            'Nama' => $request->Nama,
            'NomorHP' => $request->NomorHP,
            'UnitLayanan' => $request->UnitLayanan,
            'DeskripsiSingkatKejadian' => $request->DeskripsiSingkatKejadian,
            'AlamatKejadian' => $request->AlamatKejadian
        ]);

        return redirect('/dashboard');
    }

    public function edit($NomorHP)
    {
        $form = DB::table('form')->where('NomorHP', $NomorHP)->get();
        #passing data
        return view('edit', ['form' => $form]);
    }

    public function update(request $request)
    {
        DB::table('form')->where('NomorHP', $request->NomorHP)->update([
            'Nama' => $request->Nama,
            'NomorHP' => $request->NomorHP,
            'UnitLayanan' => $request->UnitLayanan,
            'DeskripsiSingkatKejadian' => $request->DeskripsiSingkatKejadian,
            'AlamatKejadian' => $request->AlamatKejadian

        ]);
        return redirect('/tampildata');
    }

    public function hapus($NomorHP)
    {
        DB::table('form')->where('NomorHP', $NomorHP)->delete();

        return redirect('/tampildata');
    }
}
