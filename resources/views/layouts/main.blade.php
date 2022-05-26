<!-- template navbar -->
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>SIKAT - DY6</title>
</head>

<body class="bg-slate-100">
  <!-- Navbar -->
  <nav class="border border-b-2 border-slate-300/40">
    <div class="bg-slate-100 border-gray-200 px-2 sm:px-4 py-2.5">
      <div class="container flex flex-wrap justify-between items-center mx-auto"> <a class="self-center text-lg md:text-md font-semibold whitespace-nowrap text-slate-500">Sistem Informasi Kecemasan Darurat</a>
        <button id="triggerEl" data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false"> <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="targetEl">
          <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li> <a href="#" class="block py-4 mt-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Beranda</a> </li>
            <li> <a href="/tentang" class="block py-4 mt-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 md:hover:bg-transparent md:p-0 md:hover:text-blue-700">Tentang</a> </li>
            <li> <a href="#" class="block py-4 mt-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Cara Kerja</a> </li>
            <li>
              <button class="bg-blue-600 hover:bg-blue-700  px-6 py-2 rounded-lg drop-shadow cursor-pointer">
                <a href="/login" class="block py-2 text-white hover:bg-gray-50 hover:text-blue-700 md:hover:bg-transparent md:text-center md:hover:text-white md:p-0">Masuk</a> </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  @yield('container')
  </html>