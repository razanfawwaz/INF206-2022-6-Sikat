<div class="container">
    <h2>Status Laporan</h2>
    <div class="row">
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <!--<th>Nama</th>
                    <th>Nomor HP</th><-->
                    <th>id Laporan</th>
                    <th>Unit Layanan</th>
                    <th>Deskripsi Singkat Kejadian</th>
                    <th>Alamat Kejadian</th>
                </thead>
                <tbody>
                    @foreach($form as $frm)
                    <tr>
                        <!--<td>{{$frm->Nama}}</td>
                        <td>{{$frm->NomorHP}}</td><-->
                        <td>{{$frm->UnitLayanan}}</td>
                        <td>{{$frm->DeskripsiSingkatKejadian}}</td>
                        <td>{{$frm->AlamatKejadian}}</td>
                        <td>
                            <a href="/form/edit/{{$frm->NomorHP}}">Edit</a>
                            <!--<-->
                            <a style="color:red;" href="/form/hapus/{{$frm->NomorHP}}">Delete</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>