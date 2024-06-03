<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $this->load->view('_partials/head.php'); ?>
	<link rel="stylesheet" href="../../../assets/main.css">
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black font-sans leading-normal tracking-normal">

	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="container mx-auto my-8 p-8 bg-black shadow-md rounded-lg">
		<h1 class="text-3xl font-bold text-neutral-200 mb-6">List Movie</h1>
		<ul class="list-disc pl-5">
			<?php foreach ($movies as $movie) : ?>
				<li class="mb-4">
					<a href="<?= site_url('movie/show/' . $movie->slug) ?>" class="text-purple-500 hover:underline">
						<?= $movie->title ? html_escape($movie->title) : "No Title" ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>

		<div class="mt-6">
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>

	<div class="flex justify-center relative bg-black">
		<div class="flex flex-wrap">
			<?php foreach ($movie as $mv) : ?>
				<div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 w-72">
					<img src="<?php echo base_url() . '/upload/gambar/' . $mv->gambar ?>" alt="..." class="w-full h-96 object-cover">
					<div class="p-4">
						<h5 class="text-xl font-semibold mb-2"><?php echo $mv->nama_mv ?></h5>
						<div class="mb-3">
							<small class="mb-7"><?php echo $mv->deskripsis ?></small><br>
						</div>
						<span class="badge badge-info bg-cyan-600 text-white px-4 py-1 rounded"><?php echo $mv->genre ?> |</span>
						<span class="badge badge-info bg-cyan-600 text-white px-2 py-1 rounded"><?php echo $mv->katagori__umur ?>+</span>
						<a href="#" class="inline-block bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-700 mt-2">View More</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>