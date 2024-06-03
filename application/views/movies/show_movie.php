<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/assets/css/main.css">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/movie.css'); ?>">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body class="bg-black">

	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="container flex items-center justify-center mx-auto p-6">
		<div class="shadow-lg rounded-lg  p-6">
			<!-- Image Section -->
			<div class="flex items-start gap-10 justify-center">
				<img width="400px" src="<?= base_url('upload/gambar/') . $movie->gambar ?>" alt="<?= $movie->title ?>" class="rounded-xl shadow-lg hover:scale-105 duration-300 mx-auto">
				<div>
					<h1 title="for-title-film" class="post-title text-neutral-200 font-bold dm-sans text-5xl text-start mb-4">
						<?= $movie->title ? html_escape($movie->title) : "No Title" ?>
					</h1>
					<div title="date" class="post-meta text-neutral-300 archivo text-sm text-start mb-4">
						Published at <?= $movie->created_at ?>
					</div>
					<div title="description" class="post-body archivo text-neutral-200 text-lg leading-relaxed mb-6">
						<?= $movie->deskripsi ?>
					</div>
					<div title="content" class="post-body max-w-2xl text-neutral-200 archivo text-base leading-relaxed mb-6">
						<?= $movie->content ?>
					</div>
					<div class="post-body text-base text-neutral-200 archivo leading-relaxed mb-6">
						<span class="font-semibold text-neutral-200 archivo">Genre:</span> <?= $movie->genre ?>
					</div>
					<div class="post-body text-base text-neutral-200 archivo leading-relaxed mb-6">
						<span class="font-semibold text-neutral-200 archivo">Age Category:</span> <?= $movie->katagori_umur ?>
					</div>
					<div class="post-body text-base text-neutral-200 max-w-2xl archivo leading-relaxed mb-6">
						<span class="font-semibold text-neutral-200 archivo">Casting:</span> <?= $movie->casting ?>
					</div>
				</div>
			</div>
			<!-- Video Section -->
			<iframe type="text/html" class="w-full" width="full" height="405" src="<?= $movie->url ?>" frameborder="0">
			</iframe>

		</div>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>