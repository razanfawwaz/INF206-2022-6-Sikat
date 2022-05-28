@extends('layouts.default')

@section('content')
  <section>
    <div class="container mt-5">
        <h1>Tambah Laporan</h1>
      <div class="row">
        <div class="col-lg-8">
          <form action="{{ url('/store') }}" method="POST">
            @csrf
              <div class="form-group">
                  <label for="Nama">Nama *</label>
                  <input type="text" name="Nama" class="form-control">
              </div>
              <div class="form-group">
                  <label for="Nama">Nomor HP *</label>
                  <input type="number" name="NomorHP" class="form-control">
              </div>
              <div class="form-group">
                  <label for="Nama">Unit Layanan *</label>
                  <input type="text" name="UnitLayanan" class="form-control">
              </div>
              <div class="form-group">
                  <label for="Nama">Deskripsi Singkat Kejadian *</label>
                  <textarea class="form-control" name="DeskripsiSingkatKejadian"></textarea>
              </div>
              <div class="form-group">
                  <label for="Nama">Alamat Kejadian *</label>
                  <textarea class="form-control" name="AlamatKejadian"></textarea>
              </div>
              <div class="form-group mt-2">
                  <button type="submit" class="btn btn-primary">Tambah Laporan</button>
              </div>
          </form>
        </div>
      </div>
    </div> 
  </section>  
@endsection