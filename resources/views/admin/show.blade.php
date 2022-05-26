@extends('layouts.default')

@section('content')
  <section>
    <div class="container mt-5">
        <h1>Edit Laporan</h1>
      <div class="row">
        <div class="col-lg-8">
          <form action="{{ url('admin/update/'. $data->id) }}" method="POST">
            @csrf
              <div class="form-group">
                  <label for="Nama">Nama *</label>
                  <input type="text" name="Nama" class="form-control" value="{{ $data->Nama }}">
              </div>
              <div class="form-group">
                  <label for="Nama">Nomor HP *</label>
                  <input type="number" name="NomorHP" class="form-control" value="{{ $data->NomorHp }}">
              </div>
              <div class="form-group">
                  <label for="Nama">Unit Layanan *</label>
                  <input type="text" name="UnitLayanan" class="form-control" value="{{ $data->UnitLayanan }}">
              </div>
              <div class="form-group">
                  <label for="Nama">Deskripsi Singkat Kejadian *</label>
                  <textarea class="form-control" name="DeskripsiSingkatKejadian" >{{ $data->DeskripsiSingkatKejadian }}</textarea>
              </div>
              <div class="form-group">
                  <label for="Nama">Alamat Kejadian *</label>
                  <textarea class="form-control" name="AlamatKejadian" >{{ $data->AlamatKejadian }}</textarea>
              </div>
              <div class="form-group mt-2">
                  <button type="submit" class="btn btn-primary">Selesai</button>
              </div>
          </form>
        </div>
      </div>
    </div> 
  </section>  
@endsection