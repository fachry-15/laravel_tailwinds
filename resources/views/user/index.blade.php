<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kita Muda Indonesia</title>
  <!-- Tailwind -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <!-- Alpine -->
  <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Custom style -->
  <link rel="stylesheet" href="{{ asset('user/css/skilline.css') }}" />
  <!-- Poppins font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
  <!-- navbar -->
  <div x-data="{ open: false }" class="w-full text-gray-700 bg-cream">
    <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
      <div class="flex flex-row items-center justify-between py-6">
        <div class="relative md:mt-8">
          <a href="#"
            class="text-lg relative z-50 font-bold tracking-widest text-gray-900 rounded-lg focus:outline-none focus:shadow-outline"><img
              src="{{ asset('user/img/logo.png') }}" alt="" style="max-width: 200px" /></a>
        </div>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{ 'transform md:transform-none': !open, 'h-full': open }"
        class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
        <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
          href="#">Dasbor</a>
        <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
          href="#layanan">Layanan</a>
        <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
          href="#tentang">Tentang</a>
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open"
            class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline">
            <span>Proyek</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
              class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-90"
            style="margin-left: 50%;">
            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Link #1</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Link #2</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Link #3</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Link #3</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="bg-cream">
    <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start">
      <!--Left Col-->
      <div
        class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
        <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-darken"
          id="home">
          <span class="text-yellow-500">Selamat Datang di</span><br />
          Kita Muda Indonesia
        </h1>
        <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8">Jadikan
          Perusahaan Anda Menjadi Lebih <br />Profesional</p>
        <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700"
          class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
          <a href="service.html"
            class="lg:mx-0 bg-yellow-200 text-darken text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">Lihat
            Portofolio Kami</a>
        </div><br>

      </div>
      <!--Right Col-->
      <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
        <img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-20" src="{{ asset('user/img/banner.png') }}" />
        <!-- calendar -->
        <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true"
          class="absolute top-20 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4">
          <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="{{ asset('user/img/banner/icon01.svg') }}" />
        </div>
        <!-- red -->
        <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true"
          class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating">
          <svg class="h-16 sm:h-24" viewBox="0 0 149 149" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
              <rect x="40" y="32" width="69" height="69" rx="14" fill="#F3627C" />
            </g>
            <rect x="51.35" y="44.075" width="47.3" height="44.85" rx="8" fill="white" />
            <path d="M74.5 54.425V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round" />
            <path d="M65.875 58.7375L65.875 78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round" />
            <path d="M83.125 63.9125V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round" />
            <defs>
              <filter id="filter0_d" x="0" y="0" width="149" height="149" filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                <feOffset dy="8" />
                <feGaussianBlur stdDeviation="20" />
                <feColorMatrix type="matrix" values="0 0 0 0 0.825 0 0 0 0 0.300438 0 0 0 0 0.396718 0 0 0 0.26 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
              </filter>
            </defs>
          </svg>
        </div>
        <!-- ux class -->
        <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
          class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-24 lg:-left-4 floating">
          <img class="bg-white bg-opacity-80 rounded-lg h-20 sm:h-28" src="{{ asset('user/img/ux-class.svg') }}" alt="" />
        </div>
        <!-- congrats -->
        <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true"
          class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
          <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="{{ asset('user/img/congrat.svg') }}" alt="" />
        </div>
      </div>
    </div>
    <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
      <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
        preserveAspectRatio="none">
        <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
          fill="currentColor"></path>
      </svg>
      <div class="bg-white w-full h-20 -mt-px"></div>
    </div>
  </div>

  <!-- container -->
  <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">
    <!-- trusted by -->
    <div class="max-w-4xl mx-auto">
      <h1 class="text-center mb-3 text-gray-400 font-medium">Terpercaya oleh perusahaan ternama</h1>
      <div class="grid grid-cols-3 lg:grid-cols-3 gap-4 justify-items-center">
        <img class="h-20" src="{{ asset('user/img/client/5.png') }} " />
        <img class="h-20" src="{{ asset('user/img/client/2.png') }} " />
        <img class="h-20" src="{{ asset('user/img/client/3.png') }} " />
        <img class="h-20 transform translate-y-2" src="{{ asset('user/img/client/4.png') }} " />
        <img class="h-20" src="{{ asset('user/img/client/6.png') }} " />
        <img class="h-20" src="{{ asset('user/img/client/1.png') }} " />
      </div>
    </div>

    <!-- All-In-One Cloud Software. -->
    <div data-aos="flip-up" class="max-w-xl mx-auto text-center mt-24">
      <h1 class="font-bold text-darken my-3 text-2xl">Kenapa Harus dengan <span class="text-yellow-500">KMI</span> ?
      </h1>
      <p class="leading-relaxed text-gray-500">Kita Muda Indonesia adalah jawaban dari semua pertanyaan anda tentang
        bagaiman meningkatkan produktivitas Perusahaan anda ?</p>
    </div>
    <!-- card -->
    <div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-20">
      <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
        <div style="background: #2b2b2b"
          class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
          </svg>
        </div>
        <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Pemesanan Mudah</h1>
        <p class="px-4 text-gray-500">Pemesanan yang yang dapat dilakukan melalui genggaman tangan anda dan layar gadget
          anda melalui website KMI.</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="150" class="bg-white shadow-xl p-6 text-center rounded-xl">
        <div style="background: #ffce00"
          class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6 text-dark">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
          </svg>
        </div>
        <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Pelayanan Prima</h1>
        <p class="px-4 text-gray-500">Kami akan memberikan Pelayanan terbaik dan pemberian komunikasi layanan terbaik
          demi kenyamanan pelanggan.</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="bg-white shadow-xl p-6 text-center rounded-xl">
        <div style="background: #2b2b2b"
          class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
          </svg>
        </div>
        <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Pengerjaan Optimal</h1>
        <p class="px-4 text-gray-500">Kami akan memberikan hasil pengerjaan yang cepat dan terbaik, karena kami didukung
          oleh sistem mesin dan pekerja yang terbaik.</p>
      </div>
    </div>

    <!-- lorem -->
    <div class="mt-28" id="layanan">
      <div data-aos="flip-down" class="text-center max-w-screen-md mx-auto">
        <h1 class="text-3xl font-bold mb-4">Mari Lihat Semua<span class="text-yellow-500"> Layanan Kami</span></h1>
        <p class="text-gray-500">Kami Memiliki 3 Kategori layanan yang didalamnya memiliki beberapa layanan yang dapat
          membantu anda untuk meningkatkan kualitas dan produktivitas Perusahaan Anda.</p>
      </div>
      <div data-aos="fade-up"
        class="flex flex-col md:flex-row justify-center space-y-5 md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
        <div class="relative md:w-5/12">
          <img class="rounded-2xl" src="{{ asset('user/img/category/corp.png') }}" alt="" />
          <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">CORPORATION</h1>
              <a href="pages/corp.html"
                class="rounded-full text-white border text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">Lihat
                Semua Layanan</a>
            </div>
          </div>
        </div>
        <div class="relative md:w-5/12">
          <img class="rounded-2xl" src="{{ asset('user/img/category/report.png') }}" alt="" />
          <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">REPORT MANAGEMENT</h1>
              <a href="pages/report.html"
                class="rounded-full text-white border text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">Lihat
                Semua Layanan</a>
            </div>
          </div>
        </div>
        <div class="relative md:w-5/12">
          <img class="rounded-2xl" src="{{ asset('user/img/category/brand.png') }}" alt="" />
          <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">BRANDING SERVICE</h1>
              <a href="pages/brand.html"
                class="rounded-full text-white border text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">Lihat
                Semua Layanan</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sm:flex items-center sm:space-x-8 mt-36" id="tentang">
      <div data-aos="fade-right" class="sm:w-1/2 relative">
        <div class="bg-yellow-500 rounded-full absolute w-12 h-12 z-0 -left-4 -top-3 animate-pulse"></div>
        <h1 class="font-semibold text-2xl relative z-50 text-darken lg:pr-10">
          Perjalanan
          <span class="text-yellow-500">Kita Muda Indonesia</span>
        </h1>
        <p class="py-5 lg:pr-32">Sejak 2021 kami berdiri, kami telah melalui berbagai tantangan di sepanjang perjalanan
          kami. Namun kami percaya perjalanan yang tidak mudah akan memberikan hasil yang maksimal dan lebih baik.</p>
      </div>
      <div data-aos="fade-left" class="sm:w-1/2 relative mt-10 sm:mt-0">
        <div style="background: #23bdee" class="floating w-24 h-24 absolute rounded-lg z-0 -top-3 -left-3"></div>
        <img class="rounded-xl z-40 relative" src="{{ asset('user/img/kmi-place.png') }}" alt="" />
        <div class="bg-yellow-500 w-40 h-40 floating absolute rounded-lg z-10 -bottom-3 -right-3"></div>
      </div>
    </div>

    <div class="md:flex mt-40 md:space-x-10 items-start">
      <div data-aos="fade-down" class="md:w-7/12 relative">
        <div style="background: #33efa0" class="w-32 h-32 rounded-full absolute z-0 left-4 -top-12 animate-pulse"></div>
        <div style="background: #33d9ef" class="w-5 h-5 rounded-full absolute z-0 left-36 -top-12 animate-ping"></div>
        <img class="relative z-50 floating" src="{{ asset('user/img/vcall.png') }}" alt="" />
        <div style="background: #5b61eb" class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse">
        </div>
        <div style="background: #f56666" class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"></div>
      </div>
      <!-- Visi Misi -->
      <div data-aos="fade-down" class="md:w-5/12 mt-20 md:mt-0 text-gray-500">
        <h1 class="text-2xl font-semibold text-darken lg:pr-40">Visi dan Misi <br /><span class="text-yellow-500">Kita
            Muda Indonesia</span></h1>
        <div class="flex items-center space-x-5 my-5">
          <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6 text-darken">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
          </div>
          <p>Memberikan pelayanan terbaik dan optimal untuk pelanggan.</p>
        </div>
        <div class="flex items-center space-x-5 my-5">
          <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6 text-darken">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <p>Kami akan memeberikan layanan setiap waktu 24/7 untuk pelanggan kami.</p>
        </div>
        <div class="flex items-center space-x-5 my-5">
          <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6 text-darken">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
            </svg>
          </div>
          <p>Membantu Perusahaan dan usaha di sekitar kami agar dapat lebih berkembang dan bersaing.</p>
        </div>
      </div>
      <!-- Visi Misi -->
    </div>

    <!-- Kata Sambutan -->
    <div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
      <div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
        <h1 class="text-darken font-semibold text-2xl lg:pr-10">
          <span class="text-yellow-500">Kata Mirza<br /></span>(CEO Kita Muda Indonesia)
        </h1>
        <p class="text-gray-500 my-4 lg:pr-32">"Bisnis dijalankan oleh profesional muda yang berpengalaman dan
          bersemengat untuk bergerak lebih maju sekaligus melepaskan semangat dan kreativitasnya."</p>
      </div>
      <img data-aos="fade-left" class="md:w-1/2" src="{{ asset('user/img/quotes.png') }}" />
    </div>

    <!-- One-on-One Discussions
		<div class="mt-24 flex flex-col-reverse md:flex-row items-center md:space-x-10">
			<div data-aos="fade-right" class="md:w-7/12">
				<img class="md:w-11/12" src="img/discussion.png">
			</div>
			<div data-aos="fade-left" class="md:w-5/12 md:transform md:-translate-y-6">
				<h1 class="font-semibold text-darken text-3xl lg:pr-64">One-on-One <span class="text-yellow-500">Discussions</span></h1>
				<p class="text-gray-500 my-5 lg:pr-24">Teachers and teacher assistants can talk with students privately without leaving the Zoom environment.</p>
			</div>
		</div>

		<button data-aos="flip-up" class="px-5 py-3 border border-yellow-500 text-yellow-500 font-medium my-14 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full mx-auto block">See more features</button> -->

    <!-- Services -->
    <div class="mt-24 flex flex-col md:flex-row items-start md:space-x-10">
      <div data-aos="zoom-in-right" class="md:w-6/12">
        <img class="md:w-8/12 mx-auto" src="{{ asset('user/img/all.png') }}" />
      </div>
      <div data-aos="zoom-in-left" class="md:w-6/12">
        <div class="flex items-center space-x-20 mb-5">
          <span class="border border-gray-300 w-14 absolute"></span>
          <h1 class="text-gray-400 tracking-widest text-sm">Semua Layanan</h1>
        </div>
        <h1 class="font-semibold text-darken text-2xl lg:pr-40">
          Kami menyediakan
          <span class="text-yellow-500">Berbagai Layanan </span>yang dapat membantu perusahaan anda
        </h1>
        <p class="text-gray-500 my-5 lg:pr-20">Dengan 10 Layanan Kami akan membantu anda untuk mewujudkan mimpi anda
          untuk menciptakan sebuah perusahaan yang berkualitas dan lebih berintegritas.</p>
        <a href="{{ route('layanan') }}"
          class="px-5 py-3 border border-yellow-500 text-yellow-500 font-medium my-4 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full">Lihat
          Semua Layanan</a>
      </div>
    </div>

    <!-- TESTIMONIAL -->
    <div class="mt-24 flex flex-col-reverse md:flex-row items-start md:space-x-10">
      <div data-aos="zoom-in-right" class="md:w-5/12">
        <div class="flex items-center space-x-20 mb-5">
          <span class="border border-gray-300 w-14 absolute"></span>
          <h1 class="text-gray-400 tracking-widest text-sm">TESTIMONIAL</h1>
        </div>
        <h1 class="font-semibold text-darken text-2xl lg:pr-40">Berikan kesan dan pesan anda untuk kami</h1><br>
          <form action="#" class="space-y-8">
            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Email Anda :</label>
                <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="youremail@perusahaan.ac.id" required>
            </div>
            <div>
                <label for="subject" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Perusahaan :</label>
                <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Masukkan Nama Perusahaan Anda" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-400">Kesan dan Pesan Anda :</label>
                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Kesan dan Pesan Anda ..."></textarea>
            </div>
            <input type="submit" class="py-3 px-5 border border-yellow-500 text-yellow-500 font-medium my-4 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full bg-white"></input>
        </form>
      </div>
      <div data-aos="zoom-in-left" class="md:w-7/12">
        <img class="md:w-10/18 mx-auto" src="{{ asset('user/img/testi.png') }}" />
      </div>
    </div>

    <div class="mt-24 flex flex-col md:flex-row items-start md:space-x-10">
      <div data-aos="zoom-in-right" class="md:w-6/12">
        <img class="md:w-8/12 mx-auto" src="{{ asset('user/img/mobile.svg') }}" />
      </div>
      <div data-aos="zoom-in-left" class="md:w-6/12">
        <div class="flex items-center space-x-20 mb-5">
          <span class="border border-gray-300 w-14 absolute"></span>
          <h1 class="text-gray-400 tracking-widest text-sm">Layanan Portabel</h1>
        </div>
        <h1 class="font-semibold text-darken text-2xl lg:pr-40">
          Kami menyediakan pelayanan dalam versi
          <span class="text-yellow-500">Aplikasi</span>
        </h1>
        <p class="text-gray-500 my-5 lg:pr-20">Kami selain memberikan pelayanan dalam bentuk website, kami juga
          memberikan pelayanan berupa aplikasi yang dapat diunduh pada gawai anda.</p><br>
        <a href="service.html"
          class="px-5 py-3 border border-yellow-500 text-yellow-500 font-medium my-4 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full mt-5">Unduh
          Aplikasi Android Kami</a>
      </div>
    </div>


    <!-- Projects -->
    <div data-aos="zoom-in-right" class="container my-24 px-6 mx-auto">
      <!-- Section: Design Block -->
      <section class="mb-32 text-gray-800">
        <style>
          .zoom:hover img {
            transform: scale(1.1);
          }
        </style>
        <div data-aos="flip-down" class="text-center max-w-screen-md mx-auto">
          <h1 class="text-3xl font-bold mb-4">Mari Lihat <span class="text-yellow-500">Hasil Product Kami</span></h1>
          <p class="text-gray-500">Kami telah menerima dan membuat banyak product yang variatif oleh beberapa perusahaan
            besar</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-6 my-10">
          <div class="zoom shadow-lg rounded-lg relative overflow-hidden" style="background-position: 50%"
            data-mdb-ripple="true" data-mdb-ripple-color="dark">
            <img src="{{ asset('user/img/projects/projects01.jpg') }}" class="w-full transition duration-300 ease-linear align-middle" />
            <a href="projects/projects02.html">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="flex justify-start items-end h-full">
                  <h5 class="text-lg font-bold text-white m-6">AMAG-Mockup-Mz Altv 2 AR</h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(253, 253, 253, 0)"></div>
              </div>
            </a>
          </div>

          <div class="zoom shadow-lg rounded-lg relative overflow-hidden" style="background-position: 50%"
            data-mdb-ripple="true" data-mdb-ripple-color="dark">
            <img src="{{ asset('user/img/projects/projects01.jpg') }}" class="w-full transition duration-300 ease-linear align-middle" />
            <a href="projects/projects02.html">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="flex justify-start items-end h-full">
                  <h5 class="text-lg font-bold text-white m-6">AMAG-Mockup-Mz Altv 2 AR</h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(253, 253, 253, 0)"></div>
              </div>
            </a>
          </div>

          <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
            style="background-position: 50%" data-mdb-ripple="true" data-mdb-ripple-color="dark">
            <img src="{{ asset('user/img/projects/projects03.jpg') }}" class="w-full transition duration-300 ease-linear align-middle" />
            <a href="projects/projects04.html">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="flex justify-start items-end h-full">
                  <h5 class="text-lg font-bold text-white m-6">ASEI Kal Mockup 2022</h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(253, 253, 253, 0.15)"></div>
              </div>
            </a>
          </div>

          <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
            style="background-position: 50%" data-mdb-ripple="true" data-mdb-ripple-color="dark">
            <img src="{{ asset('user/img/projects/projects04.jpg') }}" class="w-full transition duration-300 ease-linear align-middle" />
            <a href="projects/projects05.html">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="flex justify-start items-end h-full">
                  <h5 class="text-lg font-bold text-white m-6">CITRA-Mockup-Mz AR</h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(253, 253, 253, 0.15)"></div>
              </div>
            </a>
          </div>

          <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
            style="background-position: 50%" data-mdb-ripple="true" data-mdb-ripple-color="dark">
            <img src="{{ asset('user/img/projects/projects05.jpg') }}" class="w-full transition duration-300 ease-linear align-middle" />
            <a href="projects/projects06.html">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="flex justify-start items-end h-full">
                  <h5 class="text-lg font-bold text-white m-6">CITRA-Mockup-Mz SR</h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(253, 253, 253, 0.15)"></div>
              </div>
            </a>
          </div>

          <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
            style="background-position: 50%" data-mdb-ripple="true" data-mdb-ripple-color="dark">
            <img src="{{ asset('user/img/projects/projects06.jpg') }}" class="w-full transition duration-300 ease-linear align-middle" />
            <a href="projects/projects07.html">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="flex justify-start items-end h-full">
                  <h5 class="text-lg font-bold text-white m-6">Mockup Kalender-Triparta</h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(253, 253, 253, 0.15)"></div>
              </div>
            </a>
          </div>

          <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
            style="background-position: 50%" data-mdb-ripple="true" data-mdb-ripple-color="dark">
            <img src="{{ asset('user/img/projects/projects07.jpg') }}" class="w-full transition duration-300 ease-linear align-middle" />
            <a href="projects/projects08.html">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="flex justify-start items-end h-full">
                  <h5 class="text-lg font-bold text-white m-6">OKB Mockup AR - 2020</h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(253, 253, 253, 0.15)"></div>
              </div>
            </a>
          </div>

          <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
            style="background-position: 50%" data-mdb-ripple="true" data-mdb-ripple-color="dark">
            <img src="{{ asset('user/img/projects/projects08.jpg') }}" class="w-full transition duration-300 ease-linear align-middle" />
            <a href="projects/projects01.html">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="flex justify-start items-end h-full">
                  <h5 class="text-lg font-bold text-white m-6">Shopping-Bag-Mockup-PII</h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(253, 253, 253, 0.15)"></div>
              </div>
            </a>
          </div>

          <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
            style="background-position: 50%" data-mdb-ripple="true" data-mdb-ripple-color="dark">
            <img src="{{ asset('user/img/projects/projects09.jpg') }}" class="w-full transition duration-300 ease-linear align-middle" />
            <a href="projects/projects09.html">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="flex justify-start items-end h-full">
                  <h5 class="text-lg font-bold text-white m-6">SIGAP-Desk Calendar Mockup</h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(253, 253, 253, 0.15)"></div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- Section: Design Block -->
    </div>
    <!-- Projects -->
  </div>
  <!-- .container -->

  <!-- Footer -->
  <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
      <div class="sm:col-span-2">
        <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
          <img src="{{ asset('user/img/logo.png') }}" alt="" style="max-width: 120px" />
        </a>
        <div class="mt-6 lg:max-w-sm">
          <p class="text-sm text-gray-800">Kami akan kenalkan anda dengan sistem website dengan lebih Professional yang
            lebih baik</p>
        </div>
      </div>
      <div class="space-y-2 text-sm">
        <p class="text-base font-bold tracking-wide text-gray-900">Kontak</p>
        <div class="flex">
          <p class="mr-1 text-gray-800">No. Telpon :</p>
          <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone"
            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">850-123-5021</a>
        </div>
        <div class="flex">
          <p class="mr-1 text-gray-800">Email :</p>
          <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email"
            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">marketing.kitakita@gmail.com</a>
        </div>
      </div>
      <div>
        <span class="text-base font-bold tracking-wide text-gray-900">Alamat</span>
        <p class="mt-2 text-sm text-gray-500">
          Aldeoz Building <br />
          Jl. Warung Jati Barat No. 39 <br />
          Kalibata, Pancoran <br />
          Jakarta Selatan <br />
          DKI Jakarta 12740
        </p>
      </div>
    </div>
    <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
      <p class="text-sm text-gray-600">© Copyright 2023 By. Kita Muda Indonesia. All rights reserved.</p>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>