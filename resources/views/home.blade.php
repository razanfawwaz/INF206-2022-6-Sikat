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
						<li> <a href="#" class="block py-4 mt-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 md:hover:bg-transparent md:p-0 md:hover:text-blue-700">Tentang</a> </li>
						<li> <a href="#" class="block py-4 mt-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Cara Kerja</a> </li>
						<li>
							<div class="bg-blue-600 hover:bg-blue-700 hover:bg-transparent hover:border hover:border-blue-500  px-6 py-2 rounded-lg drop-shadow cursor-pointer">
                <a href="#" class="block py-2 text-white hover:bg-gray-50 hover:text-blue-700 md:hover:bg-transparent md:text-center md:hover:text-white md:p-0">Masuk</a> </div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
  <!-- Hero Section -->
  <div class="pb-32 border border-b-2 border-slate-300/40">
    <div class="flex flex-wrap container px-2 py-8 pt-20 mt-10 ml-16">
      <div class="flex flex-row">

      
        <!-- Left Section -->
        <!--sidebar-->
        <nav>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <!--foto-->
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="admin/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <!--nama yang punya akun-->
                <div class="profile-name">
                  <h5 class="">Stefhani</h5>
                  <span>Pemadam Kebakaran</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
        </nav>



        <!-- Right Section -->
          <div class="justify-center items-center ml-15">
            <div class="bg-orange-400 ml-32 rounded-lg drop-shadow w-full h-20">
              <span class="w-5 h-5 rounded-full animate-ping bg-red-500 absolute inline-flex"></span>
              <span class="w-5 h-5 rounded-full bg-red-500 absolute inline-flex"></span>
              <div class="bg-orange-400/50 rounded-lg shadow-xl">
                <p class="text-center text-2xl text-white drop-shadow font-semibold py-4">
                  Terdapat 1 Laporan Kebakaran Baru!
                </p>
                <p class="pt-6 px-4 text-md font-semibold">
                Alamat:
                </p>
                <p class="px-4 text-md pb-4">
                  Jl. Kenangan 4, No. 2A, Kec. Syiah Kuala, Kota Banda Aceh
                </p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- Detail -->
  <div>
    <div class="py-20 items-center justify-center">
      <h1 class="text-4xl text-blue-700 font-semibold text-center">
        Sedang dalam kondisi darurat?
        <br>
        <span class="underline underline-offset-8 decoration-blue-500/60">
        SIKAT jawaban dari masalahmu!
        </span>
      </h1>
      <p class="text-center pt-10 text-lg text-slate-600">
        SIKAT dirancang untuk dapat membantu kamu dalam <br>kondisi gawat
        daruratmu. Tim SIKAT dengan SIGAP dan <br> SEDIA akan datang ke lokasi
        tempat laporan. #SIKATinAja
      </p>
    </div>
  </div>
</body>
<script>
// Grab HTML Elements
const btn = document.getElementById("triggerEl");
const menu = document.getElementById("targetEl");
// Add Event Listeners
btn.addEventListener("click", () => {
	menu.classList.toggle("hidden");
});
</script>

</html>