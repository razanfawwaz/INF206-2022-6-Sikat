<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Laporan;
use DB;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = DB::table('form')->where('unitLayanan', Auth::user()->admin_unit)->get();
        return view('admin.index', ['form' => $form]);
    }

    public function AdminIndex()
    {
        $form = DB::table('form')->where('unitLayanan', Auth::user()->admin_unit)->get();
        return view('admin.superadmin', ['form' => $form]);
    }

    public function UserStore(Request $request)
    {
        //return request()->all();
        $validatedData = $request->validate([
              'email' => 'required|email:dns|unique:users',
              'name' => 'required|max:50',
              'noHp' => 'required',
              'password' => 'required|min:5',
              'admin_unit' => 'required'
          ]);

        User::create($validatedData);
        $request->session()->flash('success', 'Berhasil Menambahkan User!');
        return redirect('/superadmin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        M_Laporan::insert($data);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Laporan::findOrFail($id);
        return view('admin.show')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = M_Laporan::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        $request->session()->flash('success', 'Berhasil Menyimpan Data!');
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Laporan::findOrFail($id);
        $item->delete();
        return redirect('/admin');
    }
}
