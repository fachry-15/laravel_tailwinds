<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KMI - Layanan</title>
	<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- Tailwind -->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<!-- Alpine -->
	<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
	<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
	<!-- AOS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!-- Custom style -->
	<link rel="stylesheet" href="{{ asset('user/css/skilline.css') }}" />
	<!-- Poppins font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
	<!-- ====== Services Section Start -->
	<section style="padding-left: 5%; padding-right: 5%;" class="pt-10 lg:pt-[15px] pb-12 lg:pb-[90px]">
		<nav aria-label="Breadcrumb">
				<ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
					<li>
						<div class="flex items-center">
							<a href="/" class="mr-2 text-sm font-medium text-gray-900">Home</a>
							<svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
								class="h-5 w-4 text-gray-300">
								<path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
							</svg>
						</div>
					</li>
					<li class="text-sm">
						<a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Layanan</a>
					</li>
				</ol>
			</nav>
				<div class="container">
					<div class="flex flex-wrap -mx-4">
						<div class="w-full px-4">
							<div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
								<span class="font-semibold text-lg text-yellow-500 mb-2 block">
									Layanan Kami
								</span>
								<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dar mb-4">
									Semua Layanan
								</h2>
								<p class="text-base text-body-color">
									Kami Akan Memberikan Layanan Terbaik Untuk Anda
								</p>
							</div>
						</div>
					</div>
					<div class="flex flex-wrap -mx-4" sty>
						<div class="w-full md:w-1/2 lg:w-1/3 px-4">
							<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dar mb-4">
								CORPORATION
							</h2>
							<div class="p-10 md:px-7 xl:px-10 rounded-[20px] bg-white shadow-md hover:shadow-lg mb-8">
								<div
									class=" w-[70px] h-[70px] flex items-center justify-center bg-yellow-200 rounded-2xl mb-8">
									<img src="{{ asset('user/img/service/cash.png') }}" alt="" style="max-width: 40px;">
								</div>
								<h4 class="font-semibold text-xl text-dark mb-3">
									Refreshing Design
								</h4>
								<p class="text-body-color">
									We dejoy working with discerning clients, people for whom
									qualuty, service, integrity & aesthetics.
								</p><br>
								<a href="{{ route('detail') }}" class="underline">Lihat Detail</a>
							</div>
						</div>
					</div>
				</div><br>
					<div class="container">
				
					</div>
					<div class="flex flex-wrap -mx-4" sty>
						<div class="w-full md:w-1/2 lg:w-1/3 px-4">
							<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dar mb-4">
								CORPORATION
							</h2>
							<div class="p-10 md:px-7 xl:px-10 rounded-[20px] bg-white shadow-md hover:shadow-lg mb-8">
								<div
									class=" w-[70px] h-[70px] flex items-center justify-center bg-yellow-200 rounded-2xl mb-8">
									<img src="{{ asset('user/img/service/cash.png') }}" alt="" style="max-width: 40px;">
								</div>
								<h4 class="font-semibold text-xl text-dark mb-3">
									Refreshing Design
								</h4>
								<p class="text-body-color">
									We dejoy working with discerning clients, people for whom
									qualuty, service, integrity & aesthetics.
								</p><br>
								<a href="" class="underline">Lihat Detail</a>
							</div>
						</div>
					</div>
				</div><br>
				<div class="flex flex-wrap -mx-4">
					<div class="w-full md:w-1/2 lg:w-1/3 px-4">
						<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dar mb-4">
							REPORT MANAGEMENT
						</h2>
						<div class="p-10 md:px-7 xl:px-10 rounded-[20px] bg-white shadow-md hover:shadow-lg mb-8">
							<div
								class=" w-[70px] h-[70px] flex items-center justify-center bg-blue-200 rounded-2xl mb-8">
								<img src="{{ asset('user/img/service/credit-card.png') }}" alt="" style="max-width: 40px;">
							</div>
							<h4 class="font-semibold text-xl text-dark mb-3">
								Refreshing Design
							</h4>
							<p class="text-body-color">
								We dejoy working with discerning clients, people for whom
								qualuty, service, integrity & aesthetics.
							</p>
						</div>
					</div>
				</div>
				</div>
	</section>
	<!-- ====== Services Section End -->
	<div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
		<div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
			<div class="sm:col-span-2">
				<a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
					<img src="{{ asset('user/img/logo.png') }}" alt="" style="max-width: 120px;">
				</a>
				<div class="mt-6 lg:max-w-sm">
					<p class="text-sm text-gray-800">
						Kami akan kenalkan anda dengan sistem website dengan lebih Professional yang lebih baik
					</p>
				</div>
			</div>
			<div class="space-y-2 text-sm">
				<p class="text-base font-bold tracking-wide text-gray-900">Contacts</p>
				<div class="flex">
					<p class="mr-1 text-gray-800">Phone:</p>
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
				<span class="text-base font-bold tracking-wide text-gray-900">Social</span>
				<div class="flex items-center mt-1 space-x-3">
					<a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
						<svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
							<path
								d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
							</path>
						</svg>
					</a>
					<a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
						<svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
							<circle cx="15" cy="15" r="4"></circle>
							<path
								d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
							</path>
						</svg>
					</a>
					<a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
						<svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
							<path
								d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
							</path>
						</svg>
					</a>
				</div>
				<p class="mt-4 text-sm text-gray-500">
					Aldeoz Building <br>
					Jl. Warung Jati Barat No. 39 <br>
					Kalibata, Pancoran <br>
					Jakarta Selatan <br>
					DKI Jakarta 12740
				</p>
			</div>
		</div>
		<div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
			<p class="text-sm text-gray-600">
				© Copyright 2023 By. Kita Muda Indonesia. All rights reserved.
			</p>
		</div>
	</div>

	<!-- AOS init -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>