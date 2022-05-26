@extends('layouts.main')
@section('container')
  <!-- Hero Section -->
  <div class="pb-32 border border-b-2 border-slate-300/40">
    <div class="flex flex-wrap container px-2 py-8 pt-20 mt-10 ml-16">
      <div class="flex flex-row">
        <!-- Left Section -->
        <div>
          <h1 class="text-blue-600 text-6xl font-bold">
            Kami selalu siap sedia
            <br>
            <span class="underline underline-offset-4 decoration-blue-400">membantu kamu!</span>
          </h1>
          <p class="text-slate-600 text-lg pt-8">
            Aplikasi SIKAT dapat digunakan kapan saja dan di mana saja!
            <br>
            Layanan kami aktif selama 24
            jam setiap harinya.
            <br>
            Jangan takut untuk
            melaporkannya!
          </p>
          <div class="pt-8">
            <a href="/login" class="bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-600/50 px-6 py-3 text-lg text-white rounded-lg ">
              Buat Laporan
            </a>
          </div>
        </div>
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
@endsection