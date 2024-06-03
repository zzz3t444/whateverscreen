<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flip Card Animation</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flipcard.css'); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flip-card w-64 h-96">
        <div class="flip-card-inner relative w-full h-full">
            <!-- Front Side -->
            <div class="flip-card-front absolute w-full h-full bg-white border border-gray-200 rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/256x384" alt="Film Image" class="w-full h-full object-cover" />
            </div>
            <!-- Back Side -->
            <div class="flip-card-back absolute w-full h-full bg-white border border-gray-200 rounded-lg p-4 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-4">Judul Film</h2>
                <p class="text-gray-700">
                    Ini adalah synopsis dari film tersebut. Deskripsi singkat mengenai
                    alur cerita dan karakter-karakter utama dalam film.
                </p>
            </div>
        </div>
    </div>
</body>

</html>