<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Register</title>
    </head>

    <body class="bg-slate-100">
        <div>
            <form action="{{ route('actionRegister') }}" method="post" style="border:1px solid #ccc">
            {{ csrf_field() }}
                <div class="container">
                    <h1>Daftar Akun</h1>
                        <p>Isilah borang berikut untuk mendaftarkan akun Anda!</p>
                    <hr>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Masukkan Email" name="email" required>

                    <label for="noHp"><b>Nomor HP</b></label>
                    <input type="text" placeholder="Masukkan Nomor HP" name=noHp" required>

                    <label for="username"><b>Username</b></label>
                    <input type="password" placehorder="Masukkan Username" name="username" required>
                    
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Masukkan Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                    <div class="clearfix">
                    <button type="submit" class="signupbtn">Daftar</button>
                    </div>
                </div>
        </form>
        </div>

        <p class="py-4 text-center font-semibold">Sudah punya akun? <a class="text-blue-600 underline underline-offset-2 decoration-blue-500 hover:text-blue-700" href="#">Masuk</a> ke akun.</p>
    </body>

</html>