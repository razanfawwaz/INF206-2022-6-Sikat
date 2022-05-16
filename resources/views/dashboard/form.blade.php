<h2>Buat Laporan Baru</h2>
<form action="/form/store" method="post">
    {{csrf_field()}}
    Nama<input type="text", name="Nama" , required="required">
    Nomor HP <input type="text", name="NomorHP" , required="required">
    Unit Layanan <input type="text" , name="UnitLayanan" , required="required">
    Deskripsi Singkat Kejadian <input type="text", name="DeskripsiSingkatKejadian" , required="required">
    Alamat Kejadian <input type="text", name="AlamatKejadian" , required="required">
    <input type="submit" value="Kirim Laporan">
</form>
</head>
@endsection