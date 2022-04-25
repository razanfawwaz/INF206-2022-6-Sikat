<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Masuk ke SIKAT</title>
    </head>
    <body class="bg-slate-100">
        <div class="grid h-screen place-items-center">
        <div class="w-1/3">
        <div class="bg-white px-10 py-12 rounded-lg drop-shadow">
            <div class="border-b-2 border-slate-300/40 pb-4">
            <h1 class="text-center text-3xl font-semibold pt-2">Daftar Akun SIKAT</h1>
            </div>
            <form action="/register" method="post">
            @csrf
                <div class="py-6">
                    <label for="email">Email</label>
                    <input class="drop-shadow appearance-none border rounded-md w-full mt-2 px-4 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline" placeholder="Email" type="email" name="email" id="email" required="">
                </div>
                <div class="mb-4">
                    <label for="name">Nama Lengkap</label>
                    <input class="drop-shadow appearance-none border rounded-md w-full mt-2 px-4 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline" placeholder="Nama" type="text" name="name" id="name" required="">
                </div>
                <div class="mb-4">
                    <label for="name">Nomor HP</label>
                    <input class="drop-shadow appearance-none border rounded-md w-full mt-2 px-4 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline" placeholder="Nomor HP" type="text" name="phone-number" id="phone-number" required="">
                </div>
                <div class="mb-4">
                    <label for="password">Password</label>
                    <input class="drop-shadow appearance-none border rounded-md w-full mt-2 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline" placeholder="Password" type="password" name="password" id="password" required="">
                </div>
                <div class="pt-4">
                <button  class="text-center bg-blue-600 hover:bg-slate-100 hover:outline hover:outline-offset-0 hover:outline-blue-500 hover:shadow-none hover:text-blue-500 shadow-lg shadow-blue-600/50 px-6 py-3 text-lg text-white rounded-lg ">
                    Daftar
                </button>
                </div>
            </form>
        </div>
        <p class="py-4 text-center font-semibold">Sudah punya akun? <a class="text-blue-600 underline underline-offset-2 decoration-blue-500 hover:text-blue-700" href="/login">Login</a> sekarang!</p>
        <a class="text-center font-semibold text-blue-500 hover:text-blue-700" href="./"><- Kembali</a>
    </div>
        </div>
    </body>
</html>