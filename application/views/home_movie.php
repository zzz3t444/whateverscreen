<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center mt-10 relative">
        <div class="flex gap-5 flex-wrap">
            <?php foreach ($movie as $mv) : ?>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 w-72">
                    <img src="<?php echo base_url().'/upload/gambar/'.$mv->gambar?>" alt="..." class="w-full h-96 object-cover">
                    <div class="p-4">
                        <h5 class="text-xl font-semibold mb-2"><?php echo $mv->nama_mv ?></h5>
                        <div class="mb-3">
                        <small class="mb-7"><?php echo $mv->deskripsis ?></small><br>
                        </div>
                        <span class="badge badge-info  bg-cyan-600 text-white px-4 py-1 rounded"><?php echo $mv->genre ?> |</span>
                        <span class="badge badge-info bg-cyan-600 text-white px-2 py-1 rounded"><?php echo $mv->katagori__umur ?>+</span>
                        <a href="#" class="inline-block bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-700 mt-2" >View More</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>