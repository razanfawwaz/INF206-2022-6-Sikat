@extends('layouts.default')

@section('content')
  <section>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8">
          <h1> Laporan</h1>
          <a href="{{ url('create') }}" class="btn btn-primary"> + Tambah Laporan</a>
        </div>

        <div class="col-lg-8 mt-4">
          <table class="table-bordered">
            <tr>
              <th>id</th>
              <th>Nama</th>
              <th>Nomor Hp</th>
              <th>Unit Layanan</th>
              <th>Deskripsi Singkat Kejadian</th>
              <th>Alamat Kejadian</th>
              <th>Action</th>
            </tr>
            @foreach ($data as $dataForm)
            <tr>
              <td>{{ $dataForm->id }}</td>
              <td>{{ $dataForm->Nama }}</td>
              <td>{{ $dataForm->NomorHP }}</td>
              <td>{{ $dataForm->UnitLayanan }}</td>
              <td>{{ $dataForm->DeskripsiSingkatKejadian }}</td>
              <td>{{ $dataForm->AlamatKejadian }}</td>
              <td>
                <a href="{{ url('admin/show/'.$dataForm->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ url('admin/destroy/'.$dataForm->id) }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>    
            @endforeach
          </table>
        </div>
      </div>
    </div> 
  </section>  
@endsection