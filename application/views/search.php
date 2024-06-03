<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/search.css'); ?>">
    <!-- Include TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">

    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container mx-auto p-4">
        <div class="text-center mt-10">
            <h1 class="text-2xl text-neutral-200 font-bold dm-sans mb-4">Cari Film</h1>
            <p class="mb-4 text-neutral-300 archivo">Tuliskan kata kunci artikel yang ingin kamu cari</p>
        </div>
        <form action="" method="get" class="grid items-center mb-6 mx-auto max-w-3xl">
            <input type="search" name="keyword" class=" p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Keyword.." value="<?= html_escape($keyword) ?>" required maxlength="32" />
            <input type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-600" value="Cari">
        </form>

        <?php if ($search_result) : ?>
            <div class="search-result max-w-sm mx-auto mt-10">
                <hr class="mb-4">
                <?php foreach ($search_result as $movie) : ?>
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold">
                            <a href="<?= site_url('movie/show/' . $movie->slug) ?>" class="text-sky-600 archivo hover:underline"><?= html_escape($movie->title) ?></a>
                        </h2>
                        <p class="text-gray-700"><?= strip_tags(substr($movie->content, 0, 200)) ?>...</p>
                    </div>
                <?php endforeach ?>
            </div>
        <?php else : ?>
            <?php if ($keyword) : ?>
                <div class="h-64 flex flex-col justify-center items-center text-center">
                    <h1 class="text-3xl text-red-500 font-bold mb-2">Tidak ada yang ditemukan</h1>
                    <p class="text-gray-300">Coba dengan kata kunci yang lain</p>
                </div>
            <?php endif ?>
        <?php endif ?>
    </div>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>