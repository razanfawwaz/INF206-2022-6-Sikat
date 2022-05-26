@extends('layouts.main')
@section('container')
<!-- Tentang -->

<head>
  <meta charset="utf-8">
  <title>SIKAT - DY6</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body style="padding-bottom: 1rem;">
  <!-- 1st Part -->
  <div class="section__content container grid items-center">
    <h1 class="text-[50px] text-black font-bold py-10 text-left">
      <span>Jangan cemas,</span> <br>
      <span>ayo
        <span class="text-primary text-blue-600"> #SIKATinAja </span> keluhanmu.
      </span>

      <p class="mt-4 leading-[27px] font-normal text-[#455869] md:w-[469px] md:text-lg mb-20 ;">
        Project yang dibangun tahun 2022 ini didirikan atas intuisi kami dalam melihat masih lambannya pelayanan darurat kepada masyarakat. Kami harap dapat membantu anda mencari pertolongan tercepat dan akurat. Karena Sikat, melayani anda sebenuh hati.
        <a href="#" style="color:rgb(30, 136, 229);">Pelajari lebih lanjut</a>
      </p>
    </h1>
  </div>

  <!-- 2nd Part -->

  <body>
    <h1 class="text-[30px] text-black font-bold py-0 text-center">Jadilah pahlawan untuk orang sekitar</h1>
    <h1 class="text-[30px] text-black font-bold text-center"> seperti mereka</h1>
    <img src="" alt="">
  </body>

  <!-- article -->
  <section class="section relative mt-[74px] hidden h-auto bg-tertiary-violet-60 py-[48px] md:block lg:bg-transparent lg:py-0">
    <div class="section__content grid h-full justify-between gap-[39px] lg:grid-cols-3 lg:!px-[47px] xl:grid-cols-[repeat(3,minmax(max-content,1fr))] 2xl:container 2xl:!px-0">
      <article class="flex h-full self-end lg:pt-[67px] lg:pb-[43px]">
        <img src="./img/2.png" alt="" class="h-[108px] w-[108px] rounded-full object-cover">
        <div class="ml-5 flex flex-col justify-center lg:ml-[2px] lg:justify-end">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify-inline text-[27px] text-tertiary-violet-90 iconify iconify--bxs" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <path fill="currentColor" d="M6.5 10c-.223 0-.437.034-.65.065c.069-.232.14-.468.254-.68c.114-.308.292-.575.469-.844c.148-.291.409-.488.601-.737c.201-.242.475-.403.692-.604c.213-.21.492-.315.714-.463c.232-.133.434-.28.65-.35l.539-.222l.474-.197l-.485-1.938l-.597.144c-.191.048-.424.104-.689.171c-.271.05-.56.187-.882.312c-.318.142-.686.238-1.028.466c-.344.218-.741.4-1.091.692c-.339.301-.748.562-1.05.945c-.33.358-.656.734-.909 1.162c-.293.408-.492.856-.702 1.299c-.19.443-.343.896-.468 1.336c-.237.882-.343 1.72-.384 2.437c-.034.718-.014 1.315.028 1.747c.015.204.043.402.063.539l.025.168l.026-.006A4.5 4.5 0 1 0 6.5 10zm11 0c-.223 0-.437.034-.65.065c.069-.232.14-.468.254-.68c.114-.308.292-.575.469-.844c.148-.291.409-.488.601-.737c.201-.242.475-.403.692-.604c.213-.21.492-.315.714-.463c.232-.133.434-.28.65-.35l.539-.222l.474-.197l-.485-1.938l-.597.144c-.191.048-.424.104-.689.171c-.271.05-.56.187-.882.312c-.317.143-.686.238-1.028.467c-.344.218-.741.4-1.091.692c-.339.301-.748.562-1.05.944c-.33.358-.656.734-.909 1.162c-.293.408-.492.856-.702 1.299c-.19.443-.343.896-.468 1.336c-.237.882-.343 1.72-.384 2.437c-.034.718-.014 1.315.028 1.747c.015.204.043.402.063.539l.025.168l.026-.006A4.5 4.5 0 1 0 17.5 10z">
            </path>
          </svg>
          <p class="text-lg font-semibold leading-[23.4px] text-white xl:w-[371.73px] xl:text-lg">Aplikasi yang sangat membantu saya untuk mendapatkan penanganan dari layanan kesehatan secara singkat dan cepat</p>
          <span class="font-medium text-white opacity-70">- Cinta, influencer</span>
        </div>
      </article>
      <article class="flex h-full self-end lg:flex-col lg:pt-[90px] lg:pl-[33px]">
        <img src="./img/1.png" alt="" class="h-[108px] w-[108px] rounded-full object-cover lg:order-2">
        <div class="mb-[19px] ml-5 justify-center lg:order-1 lg:ml-0 lg:justify-start"></div>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify-inline text-[27px] text-tertiary-violet-90 lg:ml-[-33px] iconify iconify--bxs" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
          <path fill="currentColor" d="M6.5 10c-.223 0-.437.034-.65.065c.069-.232.14-.468.254-.68c.114-.308.292-.575.469-.844c.148-.291.409-.488.601-.737c.201-.242.475-.403.692-.604c.213-.21.492-.315.714-.463c.232-.133.434-.28.65-.35l.539-.222l.474-.197l-.485-1.938l-.597.144c-.191.048-.424.104-.689.171c-.271.05-.56.187-.882.312c-.318.142-.686.238-1.028.466c-.344.218-.741.4-1.091.692c-.339.301-.748.562-1.05.945c-.33.358-.656.734-.909 1.162c-.293.408-.492.856-.702 1.299c-.19.443-.343.896-.468 1.336c-.237.882-.343 1.72-.384 2.437c-.034.718-.014 1.315.028 1.747c.015.204.043.402.063.539l.025.168l.026-.006A4.5 4.5 0 1 0 6.5 10zm11 0c-.223 0-.437.034-.65.065c.069-.232.14-.468.254-.68c.114-.308.292-.575.469-.844c.148-.291.409-.488.601-.737c.201-.242.475-.403.692-.604c.213-.21.492-.315.714-.463c.232-.133.434-.28.65-.35l.539-.222l.474-.197l-.485-1.938l-.597.144c-.191.048-.424.104-.689.171c-.271.05-.56.187-.882.312c-.317.143-.686.238-1.028.467c-.344.218-.741.4-1.091.692c-.339.301-.748.562-1.05.944c-.33.358-.656.734-.909 1.162c-.293.408-.492.856-.702 1.299c-.19.443-.343.896-.468 1.336c-.237.882-.343 1.72-.384 2.437c-.034.718-.014 1.315.028 1.747c.015.204.043.402.063.539l.025.168l.026-.006A4.5 4.5 0 1 0 17.5 10z">
          </path>
        </svg>
        <p class="text-lg font-semibold leading-[23.4px] text-white xl:w-[314px] xl:text-lg">Not all heroes wear capes, sometimes they use SIKAT. The app is awesome! </p>
        <span class="font-medium text-white opacity-70">- Brian, mahasiswa </span>

      </article>
      <article class="flex justify-self-end lg:mt-[-64px] lg:flex-col">
        <img src="./img/3.png" alt class="mb-1 h-[117px] w-[117px] rounded-full object-cover">
        <div class="ml-5 justify-center lg:ml-0 lg:justify-start">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify-inline text-[27px] text-tertiary-violet-90  iconify iconify--bxs" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <path fill="currentColor" d="M6.5 10c-.223 0-.437.034-.65.065c.069-.232.14-.468.254-.68c.114-.308.292-.575.469-.844c.148-.291.409-.488.601-.737c.201-.242.475-.403.692-.604c.213-.21.492-.315.714-.463c.232-.133.434-.28.65-.35l.539-.222l.474-.197l-.485-1.938l-.597.144c-.191.048-.424.104-.689.171c-.271.05-.56.187-.882.312c-.318.142-.686.238-1.028.466c-.344.218-.741.4-1.091.692c-.339.301-.748.562-1.05.945c-.33.358-.656.734-.909 1.162c-.293.408-.492.856-.702 1.299c-.19.443-.343.896-.468 1.336c-.237.882-.343 1.72-.384 2.437c-.034.718-.014 1.315.028 1.747c.015.204.043.402.063.539l.025.168l.026-.006A4.5 4.5 0 1 0 6.5 10zm11 0c-.223 0-.437.034-.65.065c.069-.232.14-.468.254-.68c.114-.308.292-.575.469-.844c.148-.291.409-.488.601-.737c.201-.242.475-.403.692-.604c.213-.21.492-.315.714-.463c.232-.133.434-.28.65-.35l.539-.222l.474-.197l-.485-1.938l-.597.144c-.191.048-.424.104-.689.171c-.271.05-.56.187-.882.312c-.317.143-.686.238-1.028.467c-.344.218-.741.4-1.091.692c-.339.301-.748.562-1.05.944c-.33.358-.656.734-.909 1.162c-.293.408-.492.856-.702 1.299c-.19.443-.343.896-.468 1.336c-.237.882-.343 1.72-.384 2.437c-.034.718-.014 1.315.028 1.747c.015.204.043.402.063.539l.025.168l.026-.006A4.5 4.5 0 1 0 17.5 10z">
            </path>
          </svg>
          <p class="text-lg font-semibold leading-[23.4px] text-white xl:w-[300px] xl:text-lg">
            Indonesia bukan kekurangan orang peduli, namun kurang cekat dalam mencari informasi. Thanks SIKAT!
          </p>
          <span class="block font-medium text-white opacity-70 lg:w-[323px]">- Dwi, Aktivis kemanusiaan</span>
        </div>
    </div>
    </article>
    </div>
    <img src="./img/bg-about.png" alt="" class="object-fit absolute inset-0 z-[-1] hidden h-full w-full lg:block">
  </section>
  <img class="absolute left-0 top-0 z-[-1]" src="https://cdn.sejutacita.id/deall-frontend/v1/assets/images/texture-bg-head-2.png" alt="">

  <!-- footer -->

  <div class="footer-language-wrap px-10 py-0 text-[15px]" an-tr="nv02_footer bottom--text-scroll" an-ca="scroll" an-ac="scroll:100" an-la="scroll:100">Copyright© SIKAT-DY6. All rights reserved.
  <span class="float-right padding-right-5">Ingin tetap terhubung?
  <div class="float-right mb-5 mr-10 ">
    <ul>
      <li class="float-right py-0 px-5 py-0">
        <a href="http://127.0.0.1:8000/" target="_blank"> <img src="./img/browser.png" alt="">
      </li>
      <li class="float-right py-0 rm-5 px-5 py-0">
        <a href="https://www.instagram.com/sikat.project/" target="_blank"> <img src="./img/instagram.png" alt="">
      </li>
      <li class="float-right py-0 rm-5 px-5 py-0">
        <a href="https://youtu.be/c_nYu7JTyrw" target="_blank"><img src="./img/youtube.png" alt="">
      </li>
    </ul>
</span>
  </div>
  </div>
  <!-- <div class="footer-sns padding-bottom-15"> Ingin Tetap Terhubung?
      <ul class="float-right" py-0 rm-5 px-10 py-1">
        <li>
          <a href="http://127.0.0.1:8000/" target="_blank"> <img src="./img/browser.png" alt="">
        </li>
      </ul> </a>
      <ul class="float-right py-0 rm-5 px-10 py-1"">
        <li>
          <a href="https://www.instagram.com/sikat.project/" target="_blank"> <img src="./img/instagram.png" alt="">
        </li>
      </ul> </a>
      <ul class="float-right py-0 rm-5 px-10 py-1">
        <li>
          <a href="https://youtu.be/c_nYu7JTyrw" target="_blank"><img src="./img/youtube.png" alt="">
        </li>
      </ul></a>
      </span>  

    </div> -->




</body>
@endsection