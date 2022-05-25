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
                    <th>User ID</th>
                </thead>
                <tbody>
                    <tr>
                    $laporan = Auth::user()->id;
                    @foreach($form as $form)
                    <td>{{$form->id}}</td>
                        <td>{{$form->UnitLayanan}}</td>
                        <td>{{$form->DeskripsiSingkatKejadian}}</td>
                        <td>{{$form->AlamatKejadian}}</td>
                        <td>{{$form->users_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>