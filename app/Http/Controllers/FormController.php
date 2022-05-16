<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function readdata()
    {
        $form = DB::table('form')->get();
        return view('form', ['form' => $form]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        DB::table('form')->insert([
            'Nama' => $request->Nama,
            'Nomor HP' => $request->NomorHP,
            'Unit Layanan' => $request->UnitLayanan,
            'Deskripsi Singkat Kejadian' => $request->DeskripsiSingkatKejadian,
            'Alamat Kejadian' => $request->AlamatKejadian
        ]);

        return redirect('/tampildata');
    }

    public function edit($NomorHP)
    {
        $form = DB::table('form')->where('Nomor HP', $NomorHP)->get();
        #passing data
        return view('edit', ['form' => $form]);
    }

    public function update(request $request)
    {
        DB::table('form')->where('Nomor HP', $request->NomorHP)->update([
            'Nama' => $request->Nama,
            'Nomor HP' => $request->NomorHP,
            'Unit Layanan' => $request->UnitLayanan,
            'Deskripsi Singkat Kejadian' => $request->DeskripsiSingkatKejadian,
            'Alamat Kejadian' => $request->AlamatKejadian
        ]);
        return redirect('/tampildata');
    }

    public function hapus($NomorHP)
    {
        DB::table('form')->where('Nomor HP', $NomorHP)->delete();
        return redirect('/tampildata');
    }
}
