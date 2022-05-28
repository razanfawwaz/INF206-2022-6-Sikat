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
					<h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
				</div>
			</header>
			<main>
				<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
					<!-- Replace with your content -->
					<h1 class="text-3xl font-bold pt-8 text-slate-800">
						Panel Admin 
					</h1>
					<div
						class="pt-8 flex flex-col-reverse grid grid-cols-2 gap-6 lg:gap-8 sm:grid-cols-3 lg:grid-cols-2 justify-center items-center"
					>
						@foreach($form as $form)
						<form
							action="{{ url('admin/update/'. $form->id) }}"
							method="POST"
						>
						@csrf
							<div class="rounded-lg p-6 bg-slate-800">
								<p class="text-sm text-white/70 pb-1">
									Nama Pelapor
								</p>
								<h1 class="text-white font-bold text-xl">
									{{$form->Nama}}
								</h1>
								<p class="text-sm text-white/70 pt-4 pb-1">
									Nomor HP
								</p>
								<h1 class="text-white font-bold text-xl">
									{{$form->NomorHP}}
								</h1>
								<p class="text-sm text-white/70 pt-4 pb-1">
									Unit Layanan
								</p>
								<h1 class="text-white font-bold text-xl">
									{{$form->UnitLayanan}}
								</h1>
								<p class="text-sm text-white/70 pt-4 pb-1">
									Deskripsi Kejadian
								</p>
								<h1 class="text-white font-bold text-xl">
									{{$form->DeskripsiSingkatKejadian}}
								</h1>
								<p class="text-sm text-white/70 pt-4 pb-1">
									Alamat Kejadian
								</p>
								<h1 class="text-white font-bold text-xl">
									{{$form->AlamatKejadian}}
								</h1>
								<p class="text-sm text-white/70 pt-4 pb-1">
									Status Laporan
								</p>
								@if($form->status == '')
								<select
									class="form-control drop-shadow border bg-slate-200 rounded-md mt-2 py-2 pl-2 pr-4 w-max-xl text-gray-900 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline font-semibold text-xl"
									name="status"
									id="status"
								>
									<option
										value="{{ $form->status }}"
										class="text-sm font-semibold"
									>
										Laporan masuk
									</option>
									<option
										value="diterima"
										class="text-sm font-semibold"
									>
										Laporan Diterima
									</option>
									<option
										value="ditolak"
										class="text-sm font-semibold"
									>
										Laporan Ditolak
									</option>
									<option
										value="selesai"
										class="text-sm font-semibold"
									>
										Laporan Selesai
									</option>
								</select>
								@elseif($form->status == 'diterima')
								<select
									class="form-control drop-shadow border bg-slate-200 rounded-md mt-2 py-2 pl-2 pr-4 w-max-xl text-gray-900 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline font-semibold text-xl"
									name="status"
									id="status"
								>
									<option
										value=""
										class="text-sm font-semibold"
										disabled
									>
										Laporan masuk
									</option>
									<option
										value="{{ $form->status }}"
										class="text-sm font-semibold"
									>
										Laporan Diterima
									</option>
									<option
										value="ditolak"
										class="text-sm font-semibold"
									>
										Laporan Ditolak
									</option>
									<option
										value="selesai"
										class="text-sm font-semibold"
									>
										Laporan Selesai
									</option>
								</select>
								@elseif($form->status == 'ditolak')
								<select
									class="form-control drop-shadow border bg-slate-200 rounded-md mt-2 py-2 pl-2 pr-4 w-max-xl text-gray-900 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline font-semibold text-xl"
									name="status"
									id="status"
								>
									<option
										value=""
										class="text-sm font-semibold"
										disabled
									>
										Laporan masuk
									</option>
									<option
										value="diterima"
										class="text-sm font-semibold"
										disabled
									>
										Laporan Diterima
									</option>
									<option
										value="{{ $form->status }}"
										class="text-sm font-semibold"
									>
										Laporan Ditolak
									</option>
									<option
										value="selesai"
										class="text-sm font-semibold"
									>
										Laporan Selesai
									</option>
								</select>
								@elseif($form->status == 'selesai')
								<select
									class="form-control drop-shadow border bg-slate-200 rounded-md mt-2 py-2 pl-2 pr-4 w-max-xl text-gray-900 leading-tight focus:outline-offset-2 focus:outline-blue-500 focus:shadow-outline font-semibold text-xl"
									name="status"
									id="status"
								>
									<option
										value=""
										class="text-sm font-semibold"
										disabled
									>
										Laporan masuk
									</option>
									<option
										value=""
										class="text-sm font-semibold"
										disabled
									>
										Laporan Diterima
									</option>
									<option
										value=""
										class="text-sm font-semibold"
										disabled
									>
										Laporan Ditolak
									</option>
									<option
										value="{{ $form->status }}"
										class="text-sm font-semibold"
										
									>
										Laporan Selesai
									</option>
								</select>
								@endif
								<div
									class="max-w-xs mx-auto bg-green-600 px-1 py-3 rounded-full mt-4 text-white text-center cursor-pointer hover:bg-green-700"
								>
									<button
										type="submit"
										class="font-bold text-xl drop-shadow"
									>
										Save
									</button>
								</div>
							</div>
						</form>
						@endforeach
					</div>
				</div>
			</main>
		</div>
	</body>
</html>
