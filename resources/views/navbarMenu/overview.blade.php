@extends('layouts.main')
@section('container')
<!-- cara kerja -->

<head>
    <meta charset="utf-8">
    <title>SIKAT - DY6</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <!-- judul -->
    <div class="sikat-18eqeae text-center py-5">
        <h1 class="sikat-mcgh7c font-bold text-[50px]">Bagaimana cara kerja Sikat?</h1>
        <span class="text-[#455869] text-[20px]">Luangkan waktu untuk lihat bagaimana Sikat sampai kepadamu</span>
    </div>

    <!-- konten -->
    <div>
        <div class="wrapper border-top-0 ml-0 mb-0 mt-10">
            <img src="./img/gif1.gif" style=" box-shadow: 10px 10px 5px #ccc; float:left; padding-left:rem; padding-top:0rem; padding-bottom:0rem" width="700" alt="">
            <div class="slide one float-right padding-right-2rem">
                <div class="section__content container grid items-right">
                    <h3 class="text-[30px] text-black font-normal py-10 text-left; ">
                        <span class="text-[20] font-normal">Tanpa ribet,</span> <br>
                        <span>cuma perlu
                            <span class="text-primary text-blue-600"> <b>#SIKATinAja</b> </span> laporanmu.
                        </span>
                        <p class="mt-4 leading-[25px] font-normal text-[#455869] md:w-[469px] md:text-lg mb-20 ;">
                            Masuk dari web browser ke laman Sikat.
                            <br>
                            1. Pilih <a href="/login" style="color:rgb(30, 136, 229);">Masuk</a> di sudut kanan atas atau tekan <a href="/home/form" style="color:rgb(30, 136, 229);">Buat Laporan</a>
                            <br>
                            2. Lakukan registrasi <b style="color:black;"> Daftar akun dan Login </b>
                            <br>
                            3. Buat <b style="color:black;"> Laporan</b> dan tunggu <b style="color:black;">Verifikasi</b> laporan*
                            <br><small><small>*Admin akan memeriksa apakah laporan diterima atau ditolak</small></small>
                            <!-- <a href="/overview" style="color:rgb(30, 136, 229);">Buat laporan</a></br> -->
                        </p>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection