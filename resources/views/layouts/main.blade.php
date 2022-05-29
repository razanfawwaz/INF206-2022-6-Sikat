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
      <nav class="bg-slate-100">
				<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
					<div class="flex items-center justify-between h-16">
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img
									class="h-16 w-16"
									src="./img/logo.png"
									alt="Workflow"
								/>
							</div>
							<div class="hidden md:block">
                <a class="px-4 font-bold text-xl text-slate-500">Sistem Kecemasan Darurat</a>
							</div>
						</div>
						<div class="hidden md:block">
							<div class="ml-4 flex items-center md:ml-6">
                <a class="px-4 text-blue-500 font-semibold" href="/">Beranda</a>
                <a class="px-4 text-slate-500 font-semibold" href="/tentang">Tentang Kami</a>
                <a class="px-4 text-slate-500 font-semibold" href="/overview">Cara Menggunakan</a>
								<a
										href="/login"
										class="text-white bg-blue-700 hover:text-white px-6 py-2 rounded-md text-sm font-medium"
									>
										Login
									</a>
							</div>
						</div>
						<div class="-mr-2 flex md:hidden">
							<!-- Mobile menu button -->
							<button
								type="button"
								class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
								aria-controls="mobile-menu"
								aria-expanded="false"
							>
								<span class="sr-only">Open main menu</span>
								<!--
                        Heroicon name: outline/menu
          
                        Menu open: "hidden", Menu closed: "block"
                      -->
								<svg
									class="block h-6 w-6"
									xmlns="http://www.w3.org/2000/svg"
									fill="none"
									viewBox="0 0 24 24"
									stroke-width="2"
									stroke="currentColor"
									aria-hidden="true"
								>
									<path
										stroke-linecap="round"
										stroke-linejoin="round"
										d="M4 6h16M4 12h16M4 18h16"
									/>
								</svg>
								<!--
                        Heroicon name: outline/x
          
                        Menu open: "block", Menu closed: "hidden"
                      -->
							</button>
						</div>
					</div>
				</div>

				<!-- Mobile menu, show/hide based on menu state. -->
			</nav>
    </div>
  </nav>

</body>
  <!--  -->
  
  @yield('container')
  </html>