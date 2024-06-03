<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/listmovie.css'); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black font-sans leading-normal tracking-normal">

    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container mx-auto my-8 p-8 bg-black shadow-md rounded-lg">
        <h1 class="text-3xl font-bold text-neutral-200 mb-6 dm-sans">List Movie</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($movies as $movie) : ?>
                <div class="bg-neutral-950 rounded-2xl mt-3 shadow-lg overflow-hidden">
					<img src="<?php echo base_url().'/upload/gambar/'.$movie->gambar?>" alt="..." class="w-full h-96 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl archivo font-bold dm-sans text-white mb-2">
                            <?= $movie->title ? html_escape($movie->title) : "" ?>
                        </h2>
                        <p class="text-gray-400 archivo mb-4">
                            Published at <?= $movie->created_at ?>
                        </p>
                        <p class="text-gray-300 mb-4 archivo">
                            <?= $movie->deskripsi ?>
                        </p>
                        <a href="<?= site_url('movie/show/' . $movie->slug) ?>" class="text-sky-600 archivo hover:underline">
                            Read More
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
