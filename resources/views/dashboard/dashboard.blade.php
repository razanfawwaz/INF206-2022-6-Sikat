<div class="container">
    <h2>Status Laporan</h2>
    <div class="row">
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Unit Layanan</th>
                    <th>Deskripsi Singkat Kejadian</th>
                    <th>Alamat Kejadian</th>
                </thead>
                <tbody>
                    @foreach($form as $form)
                    <tr>
                        <td>{{$form->Nama}}</td>
                        <td>{{$form->Nomor HP}}</td>
                        <td>{{$form->Unit Layanan}}</td>
                        <td>{{$form->Deskripsi Singkat Kejadian}}</td>
                        <td>{{$form->Alamat Kejadian}}</td>
                        <td>
                            <a href="/form/edit/{{$form->Nomor HP}}">Edit</a>
                            <!--<-->
                            <a style="color:red;" href="/form/hapus/{{$form->Nomor HP}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>