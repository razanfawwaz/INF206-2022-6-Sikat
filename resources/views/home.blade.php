<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Login</title>
    </head>
    <body class="bg-slate-100">
        <div class="grid h-screen place-content-center">
          <h1 class="text-2xl font-semibold">Welcome to Dashboard!</h1>
          <form action="/logout" method="post">
            @csrf
            <div class="py-4">
                <button  class="text-center bg-red-600 hover:bg-slate-100 hover:outline hover:outline-offset-0 hover:outline-red-500 hover:shadow-none hover:text-red-500 shadow-lg shadow-red-600/50 px-6 py-3 text-lg text-white rounded-lg ">
                    Keluar
                </button>
            </div>
          </form>
        </div>
    </body>
</html>