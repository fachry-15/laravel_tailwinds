<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kita Muda Indonesia</title>
  <!-- Tailwind -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
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
	<div class="bg-white">
		<div class="pt-6">
			<nav aria-label="Breadcrumb">
				<ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
					<li>
						<div class="flex items-center">
							<a href="{{ route('layanan') }}" class="mr-2 text-sm font-medium text-gray-900">Layanan</a>
							<svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
								class="h-5 w-4 text-gray-300">
								<path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
							</svg>
						</div>
					</li>
					<li class="text-sm">
						<a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Annual
							Report</a>
					</li>
				</ol>
			</nav>
			

			<!-- Product info -->
			<div
				class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
				<div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
					<h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Photo Shoot Profile</h1>
					<h3 class="text-sm font-medium text-gray-900">Branding</h3>
					<br>
					<img src="{{ asset('user/img/category/brand.png') }}" alt="" style="max-width: 300px;">
				</div>

				<!-- Options -->
				<div class="mt-4 lg:row-span-3 lg:mt-0">
					<h2 class="sr-only">Product information</h2>
					<p class="text-3xl tracking-tight text-gray-900">Inquiry Barang</p>
					<form class="mt-10">

						<div class="mb-6">
							<label for="nama"
								class="block mb-2 text-sm font-medium text-darken dark:text-dark">Nama Pemesan :
								</label>
							<input type="text" id="nama"
								class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-dark-900 dark:text-dark dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
								placeholder="Masukkan Nama Anda" required>
							<small>*Wajib Diisi dengan benar</small>
						</div>
						<div class="mb-6">
							<label for="subject"
								class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Subject Anda :
								</label>
							<input type="text" id="subject"
								class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-dark-900 dark:text-dark dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
								placeholder="Masukkan jasa ingin anda pesan" required>
							<small>*Wajib Diisi dengan benar</small>
						</div>
						<div class="mb-6">
							<label for="email"
								class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Email Anda
								:</label>
								<input type="text" id="email"
								class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-dark-900 dark:text-dark dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
								placeholder="Masukkan email aktif anda" required>
							<small>*Wajib Diisi dengan benar</small>
						</div>
                        	<div class="mb-6">
							<label for="pesan"
								class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark"> Note Pesanan
								:</label>
<textarea id="pesan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Deskripsikan Pesanan Anda.."></textarea>

							<small>*Wajib Diisi dengan benar</small>
						</div>

						<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
						<div class="mb-6">		
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Lampirkan Dokumen Proposal :</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="proposal">
							<small>*Wajib Diisi dengan benar</small>
						</div>
<div class="mb-6">		
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Lampirkan Dokumen RFP :</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="rfp">
							<small>*Wajib Diisi dengan benar</small>
						</div>
						<div class="flex items-start mb-6">
							<div class="flex items-center h-5">
								<input id="remember" type="checkbox" value=""
									class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-yellow-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
									required>
							</div>
							<label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-dark-100">Saya
								Setuju Semua Data diisi dengan benar</label>
						</div>
						<button type="submit"
							class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Submit</button>
					</form>
				</div>

				<div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
					<!-- Description and details -->

					<div class="mt-2">
						<h3 class="text-sm font-medium text-gray-900">Kebutuhan</h3>

						<div class="mt-4">
							<ul role="list" class="list-disc space-y-2 pl-4 text-sm">
								<li class="text-gray-400"><span class="text-gray-600">Branding Perusahaan</span>
								</li>
								<li class="text-gray-400"><span class="text-gray-600">Merchandise Special Day</span>
								</li>
								<li class="text-gray-400"><span class="text-gray-600">Promotion</span>
								</li>
								<li class="text-gray-400"><span class="text-gray-600">dan masih banyak lagi</span></li>
							</ul>
						</div>
					</div>

					<div class="mt-10">
						<h2 class="text-sm font-medium text-gray-900">Detail</h2>

						<div class="mt-4 space-y-6">
							<p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather
								gray Basic Tees. Sign up for our subscription service and be the first to get new,
								exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>