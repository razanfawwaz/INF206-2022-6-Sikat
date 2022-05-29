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
										href="/home"
										class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
										
										>Dashboard</a
									>

									<a
										href="#"
										class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                    aria-current="page"
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
					</div>
				</div>
				<!-- Mobile menu, show/hide based on menu state. -->
			</nav>

			<header class="bg-white shadow">
				<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
					<h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
				</div>
			</header>
			<main>
				<div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
					<!-- Replace with your content -->
					<div class="">
						<div
							class="bg-white px-10 py-12 rounded-lg drop-shadow"
						>
							<div class="border-b-2 border-slate-300/40 pb-4">
								<h1
									class="text-center text-3xl font-semibold pt-2"
								>
									Buat Laporan
								</h1>
							</div>
							<form action="form/store" method="post">
								{{ csrf_field() }}
								<div class="py-6">
									<label for="Nama">Nama</label>
									<input
										class="drop-shadow appearance-none border rounded-md w-full mt-2 px-4 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
										placeholder="Nama Lengkap"
										type="text"
										value="{{ Auth::user()->name }}"
										disabled
									/>
								</div>
								<div class="mb-4">
									<label for="NomorHP">Nomor HP</label>
									<input
										class="drop-shadow appearance-none border rounded-md w-full mt-2 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
										placeholder="Nomor Handphone"
										type="text"
										name="NomorHP"
										id="NomorHP"
										value="{{ Auth::user()->noHp }}"
										disabled
									/>
								</div>
                <div class="mb-4">
									<label for="UnitLayanan">Unit Layanan</label>
									<select
										class="form-control drop-shadow border rounded-md w-full mt-2 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
										name="UnitLayanan"
										id="UnitLayanan"
										required=""
										data-dropdown-toggle="dropdown"
									>
									<option value="" hidden selected="selected">Silahkan pilih unit layanan!</option>
									<option value="RS">Rumah Sakit</option>
									<option value="Polisi">Polisi</option>
									<option value="Pemadam">Pemadam Kebakaran</option>
									</select>
								</div>
                <div class="mb-4">
									<label for="DeskripsiSingkatKejadian">Deskripsi Kejadian</label>
									<textarea
										class="drop-shadow appearance-none border rounded-md w-full mt-2 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
										placeholder="Masukkan Deskripsi Kejadian"
										type="textarea"
										name="DeskripsiSingkatKejadian"
										id="DeskripsiSingkatKejadian"
										required=""
									></textarea>
								</div>
                <div class="mb-4">
									<label for="AlamatKejadian">Alamat Kejadian</label>
									<input
										class="drop-shadow appearance-none border rounded-md w-full mt-2 py-2 pl-2 pr-4 w-full text-gray-700 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline"
										placeholder="Masukkan Alamat Kejadian"
										type="text"
										name="AlamatKejadian"
										id="AlamatKejadian"
										required=""
									/>
								</div>
								<div class="pt-4">
									<button
										class="text-center bg-blue-600 hover:bg-slate-100 hover:outline hover:outline-offset-0 hover:outline-blue-500 hover:shadow-none hover:text-blue-500 shadow-lg shadow-blue-600/50 px-6 py-3 text-lg text-white rounded-lg"
									>
										Kirim Laporan
									</button>
								</div>
							</form>
						</div>
					</div>
					<!-- /End replace -->
				</div>
			</main>
		</div>
	</body>
</html>
