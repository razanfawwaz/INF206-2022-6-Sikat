<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    {{-- @section('container') --}}
    <h1 class="h2">Menu Admin</h1>    
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NomorHP</th>
                    <th scope="col">Unit Layanan</th>
                    <th scope="col">Deskripsi Singkat Kejadian</th>
                    <th scope="col">Alamat Kejadian</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($form as $form)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $form->Nama }}</td>
                    <td>{{ $form->NomorHP }}</td>
                    <td>{{ $form->UnitLayanan }}</td>
                    <td>{{ $form->DeskripsiSingkatKejadian }}</td>
                    <td>{{ $form->AlamatKejadian }}</td>
                    <td>
                        <a href="menuAdmin{{ $form->id }}" class="btn">Update</a>
                        <a href="menuAdmin{{ $form->id }}" class="btn">Delete</a>
                    </td>
                </tr>   
                @endforeach    
            </tbody>
        </table>
    </div>
    {{-- @endsection --}}
</body>
</html>