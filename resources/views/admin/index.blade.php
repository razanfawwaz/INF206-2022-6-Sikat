@extends('layouts.default')

@section('content')
  <section>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8">
          <h1> Laporan</h1>
          <a href="{{ url('create') }}" class="btn btn-primary"> + Tambah Laporan</a>
        </div>

        <div class="col-lg-8 nt-5 mt-4">
          <table class="table-bordered">
            <tr>
              <th>id</th>
              <th>Nama</th>
              <th>Nomor Hp</th>
              <th>Unit Layanan</th>
              <th>Deskripsi Singkat Kejadian</th>
              <th>Alamat Kejadian</th>
            </tr>
          </table>
        </div>
      </div>
    </div> 
  </section>  
@endsection