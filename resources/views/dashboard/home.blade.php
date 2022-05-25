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
										href="/form"
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
					<div class="bg-white shadow overflow-hidden sm:rounded-lg">
						<div class="px-4 py-5 sm:px-6">
						  <h3 class="text-lg leading-6 font-medium text-gray-900">Laporan Saya</h3>
						</div>
						<div class="border-t border-gray-200">
							
						  <table>
							  <thead class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								<th class="text-sm font-medium text-gray-500">ID Laporan</th>	
								<th class="text-sm font-medium text-gray-500">Nama Pelapor</th>	
								<th class="text-sm font-medium text-gray-500">Nomor HP</th>	
								<th class="text-sm font-medium text-gray-500">Unit Layanan</th>
								<th class="text-sm font-medium text-gray-500">Deskripsi Kejadian</th>
								<th class="text-sm font-medium text-gray-500">Alamat Kejadian</th>			
							  </thead>
							<dl>
								<div >
								  <dt class="text-sm font-medium text-gray-500">Full name</dt>
								  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Margot Foster</dd>
								</div>
								<div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								  <dt class="text-sm font-medium text-gray-500">Application for</dt>
								  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Backend Developer</dd>
								</div>
								<div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								  <dt class="text-sm font-medium text-gray-500">Email address</dt>
								  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">margotfoster@example.com</dd>
								</div>
								<div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								  <dt class="text-sm font-medium text-gray-500">Salary expectation</dt>
								  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">$120,000</dd>
								</div>
								<div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
								  <dt class="text-sm font-medium text-gray-500">About</dt>
								  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
								</div>
							  </dl>
						  </table>
						</div>
					  </div>
				</div>
			</main>
		</div>
	</body>
</html>
