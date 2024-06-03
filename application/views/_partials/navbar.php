<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css'); ?>">
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<div class="bg-black">
		<nav class="navbar items-center  mx-auto bg-black justify-around p-3">
			<h1 class="tracking-tighter dm-sans text-neutral-200 font-semibold text-2xl">Sebelah <span class="text-sky-600">Layar</span></h1>
			<ul class="flex items-center gap-8 archivo text-sm">
				<a class="text-neutral-400 hover:text-neutral-100 transition-all duration-300" href="<?= site_url() ?>">Home</a>
				<a class="text-neutral-400 hover:text-neutral-100 transition-all duration-300" href="<?= site_url('movie') ?>">Movie</a>
				<a class="text-neutral-400 hover:text-neutral-100 transition-all duration-300" href="<?= site_url('search') ?>">Cari</a>
				<a class="text-neutral-400 hover:text-neutral-100 transition-all duration-300" href="<?= site_url('page/about') ?>">About</a>
				<a class="text-neutral-400 hover:text-neutral-100 transition-all duration-300" href="<?= site_url('page/contact') ?>">Feedback</a>
			</ul>
			<div>
				<a class="text-sm text-neutral-200" href="<?= site_url('auth/login') ?>" style="margin-left:auto">
					<button class="px-5 py-3 bg-sky-600 rounded-full">Login</button>
				</a>
			</div>
	</div>
	</nav>
</body>

</html>