<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
		<title>Dashboard</title>
		<script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body class="bg-slate-100">
		<div class="min-h-full">
			<nav class="bg-gray-800">
				<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
					<div class="flex items-center justify-between h-16">
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img
									class="h-8 w-8"
									src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
									alt="Workflow"
								/>
							</div>
							<div class="hidden md:block">
								<div
									class="ml-10 flex items-baseline space-x-4"
								>
									<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
									<a
										href="#"
										class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
										aria-current="page"
										>Dashboard</a
									>

									<a
										href="/home/form"
										class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
										>Buat Laporan</a
									>
								</div>
							</div>
						</div>
						<div class="hidden md:block">
							<div class="ml-4 flex items-center md:ml-6">
								<p class="text-slate-200 px-6 font-semibold">Halo, {{Auth()->user()->name}}!</p>
								<form action="/logout" method="post">
									@csrf
									<button
										href="#"
										class="text-white bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
									>
										Logout
									</button>
								</form>
								<!-- Profile dropdown -->
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

			<header class="bg-white shadow">
				<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
					<h1 class="text-3xl font-bold text-gray-900">Panel Admin</h1>
				</div>
			</header>
			<main>
				<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
					<!-- Replace with your content -->
					<div>
						<div
							class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mt-2 rounded relative"
							role="alert"
						>
							<p>Berhasil Mendaftar!</p>
							{{ session("status") }}
						</div>
						@if(session()->has('success'))
						<div
							class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mt-2 rounded relative"
							role="alert"
						>
							<p>Berhasil Mendaftar!</p>
							{{ session("status") }}
						</div>
						@endif @if(session()->has('error'))
						<div
							class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  mt-2 rounded relative"
							role="alert"
						>
							<p>{{ session("error") }}</p>
						</div>
						@endif
					</div>

					<h1 class="text-3xl font-bold pt-8 text-slate-800">
						Tambah User
					</h1>
					<div
						class="pt-2 flex flex-col-reverse grid grid-cols-2 gap-6 lg:gap-8 sm:grid-cols-3 lg:grid-cols-2 justify-center items-center"
					>
						<form action="superadmin/store" method="post">
							@csrf
							<div class="py-4">
								<label for="email">Email</label>
								<input
									class="drop-shadow appearance-none border rounded-md w-full mt-2 px-4 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
									placeholder="Email"
									type="email"
									name="email"
									id="email"
									required=""
								/>
							</div>
							<div class="mb-4">
								<label for="name">Nama Lengkap</label>
								<input
									class="drop-shadow appearance-none border rounded-md w-full mt-2 px-4 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
									placeholder="Nama"
									type="text"
									name="name"
									id="name"
									required=""
								/>
							</div>
							<div class="mb-4">
								<label for="name">Nomor HP</label>
								<input
									class="drop-shadow appearance-none border rounded-md w-full mt-2 px-4 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
									placeholder="Nomor HP"
									type="text"
									name="noHp"
									id="noHp"
									required=""
								/>
							</div>
							<div class="mb-4">
								<label for="password">Password</label>
								<input
									class="drop-shadow appearance-none border rounded-md w-full mt-2 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
									placeholder="Password"
									type="password"
									name="password"
									id="password"
									required=""
								/>
							</div>
							<div class="mb-4">
								<label for="admin_unit">Unit Layanan</label>
								<select
									class="form-control drop-shadow border rounded-md w-full mt-2 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
									name="admin_unit"
									id="admin_unit"
									required=""
									data-dropdown-toggle="dropdown"
								>
									<option value="" selected="selected">
										Silahkan pilih unit layanan!
									</option>
									<option value="RS">Rumah Sakit</option>
									<option value="Polisi">Polisi</option>
									<option value="Pemadam">
										Pemadam Kebakaran
									</option>
								</select>
							</div>
							<div class="mb-4">
								<label for="is_admin">Jenis Admin</label>
								<select
									class="form-control drop-shadow border rounded-md w-full mt-2 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
									name="admin_unit"
									id="admin_unit"
									required=""
									data-dropdown-toggle="dropdown"
								>
									<option value="" selected="selected">
										Silahkan pilih jenis admin!
									</option>
									<option value="2">Admin unit</option>
								</select>
							</div>
							<div class="pt-4">
								<button
									class="text-center bg-blue-600 hover:bg-slate-100 hover:outline hover:outline-offset-0 hover:outline-blue-500 hover:shadow-none hover:text-blue-500 shadow-lg shadow-blue-600/50 px-6 py-3 text-lg text-white rounded-lg"
								>
									Daftar
								</button>
							</div>
						</form>
					</div>
				</div>
			</main>
		</div>
	</body>
</html>
