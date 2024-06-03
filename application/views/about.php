<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/categoies.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/about.css'); ?>">
</head>

<body class="bg-black">
    <?php $this->load->view('_partials/navbar.php'); ?>
    <div class="container mx-auto py-16 px-4">
        <div class="text-center text-neutral-200 tracking-tighter font-bold text-9xl dm-sans">
            <h1 class="text-red-600">About.</h1>
            <h1 class="-mt-3">Whatever.</h1>
            <h1 class="-mt-3">Screen.</h1>
        </div>
        <div>
            <ul class="flex items-center gap-5 justify-center mt-10">
                <button class="w-60 py-2 hover:scale-95 duration-300 bg-red-600 rounded-lg hover:bg-red-700 text-neutral-200 archivo text-sm">Read More</button>
            </ul>
            <p class="text-neutral-400 text-center max-w-3xl mx-auto mt-8 archivo leading-7">Selamat datang di Whatever Screen, destinasi utama Anda untuk menikmati dunia film dari sudut pandang yang berbeda! Kami adalah platform yang didedikasikan untuk menyediakan ulasan film</p>
            <p class="uppercase font-light text-center text-neutral-400 tracking-wider mt-20">rise 26 May 2024</p>
        </div>

        <!-- for About Content -->
        <div class="mt-20">
            <h1 class="text-4xl font-bold text-center text-neutral-200 dm-sans tracking-tight">Who is Whatever <span class="text-red-500">Screen?</span></h1>
            <ul class="flex items-start justify-center mt-8 gap-5">
                <p class="max-w-xl text-neutral-400 text-sm archivo leading-6">Whatever <span class="text-red-600">Screen</span> didirikan oleh sekelompok pecinta film yang bersemangat dan berpengalaman di dunia perfilman. Kami percaya bahwa setiap film memiliki cerita unik di balik layar yang patut untuk diungkapkan. Tim kami terdiri dari <span class="text-red-600">penulis, kritikus, dan sineas</span> yang berkomitmen untuk memberikan perspektif baru dan mendalam tentang berbagai genre film, baik dari dalam negeri maupun internasional.</p>
                <p class="max-w-xl text-neutral-400 text-sm archivo leading-6">Misi kami adalah menghubungkan penonton dengan kekayaan dunia film melalui konten berkualitas <span class="text-red-600">tinggi</span> dan <span class="text-red-600">informatif</span>. Kami ingin menjadi jembatan antara pembuat film dan penonton, membawa wawasan yang belum pernah Anda lihat sebelumnya dan <span class="text-red-600">membantu</span> Anda <span class="text-red-600">menemukan</span> film yang sesuai dengan selera Anda.</p>
            </ul>
        </div>

        <div class="flex items-center mt-16 justify-center gap-10">
            <img src="https://www.greenscene.co.id/wp-content/uploads/2018/09/film.jpg" class="rounded-3xl" alt="" width="600px" height="500px">
            <div>
                <ul>
                    <h1 class="text-2xl font-semibold dm-sans text-neutral-200">Ulasan Film</h1>
                    <p class="max-w-xl archivo text-sm text-neutral-400 mt-2 leading-7">Kami menyediakan ulasan film yang mendalam dan objektif, mengupas setiap aspek mulai dari alur cerita, karakter, sinematografi, hingga pesan moral yang disampaikan.</p>
                </ul>
                <ul class="mt-5">
                    <h1 class="text-2xl font-semibold dm-sans text-neutral-200">Rekomendasi Film</h1>
                    <p class="max-w-xl archivo text-sm text-neutral-400 mt-2 leading-7">Temukan film-film terbaik sesuai dengan genre kesukaan Anda. Tim kami siap memberikan rekomendasi yang akan memperkaya pengalaman menonton Anda.</p>
                </ul>
                <ul class="mt-5">
                    <h1 class="text-2xl font-semibold dm-sans text-neutral-200">Berita Terbaru</h1>
                    <p class="max-w-xl archivo text-sm text-neutral-400 mt-2 leading-7">Dapatkan update terkini tentang film-film baru, perkembangan di industri perfilman, serta berita eksklusif dari balik layar.</p>
                </ul>
            </div>
        </div>
    </div>

    <div class="grid mt-20 items-center justify-center">
        <div class="xl:grid-cols-3 gap-10 flex items-center justify-center">
            <ul class="border-gradient-red-to-black shadow-2xl shadow-neutral-950 hover:scale-105 duration-200 bg-gradient-to-br p-4">
                <div class="for-icons">
                    <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 7C10.4087 7 8.88258 7.63214 7.75736 8.75736C6.63214 9.88258 6 11.4087 6 13H18C18 11.4087 17.3679 9.88258 16.2426 8.75736C15.1174 7.63214 13.5913 7 12 7ZM12 7V2M9 13C9 13.7956 9.31607 14.5587 9.87868 15.1213C10.4413 15.6839 11.2044 16 12 16C12.7956 16 13.5587 15.6839 14.1213 15.1213C14.6839 14.5587 15 13.7956 15 13M5 13H19M12 20V22M15 19L17 20.5M9 19L7 20.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h1 class="text-neutral-200 font-bold text-2xl mt-5 dm-sans">Website Advantages</h1>
                <p class="text-neutral-300 archivo max-w-60 mt-4 leading-8">This website, provides a lot of access to
                    read movie synopses</p>
            </ul>
            <ul class="border-gradient-red-to-black shadow-2xl shadow-neutral-9050 hover:scale-105 duration-200 p-4">
                <div class="for-icons">
                    <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 11V6C7 3 9 1 12 1C15 1 17 3 17 6V11M12 15V19M12 23C13.8565 23 15.637 22.2625 16.9497 20.9497C18.2625 19.637 19 17.8565 19 16C19 14.1435 18.2625 12.363 16.9497 11.0503C15.637 9.7375 13.8565 9 12 9C10.1435 9 8.36301 9.7375 7.05025 11.0503C5.7375 12.363 5 14.1435 5 16C5 17.8565 5.7375 19.637 7.05025 20.9497C8.36301 22.2625 10.1435 23 12 23ZM12 16C12.2652 16 12.5196 15.8946 12.7071 15.7071C12.8946 15.5196 13 15.2652 13 15C13 14.7348 12.8946 14.4804 12.7071 14.2929C12.5196 14.1054 12.2652 14 12 14C11.7348 14 11.4804 14.1054 11.2929 14.2929C11.1054 14.4804 11 14.7348 11 15C11 15.2652 11.1054 15.5196 11.2929 15.7071C11.4804 15.8946 11.7348 16 12 16Z" stroke="white" stroke-width="2" />
                    </svg>
                </div>
                <h1 class="text-neutral-200 font-bold text-2xl mt-5 dm-sans">Secure Website</h1>
                <p class="text-neutral-300 archivo max-w-60 mt-4 leading-8">This website is protected and secured
                    security.</p>
            </ul>
            <ul class="border-gradient-red-to-black shadow-2xl shadow-neutral-950 hover:scale-105 duration-200 p-4">
                <div class="for-icons">
                    <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 2C10.8833 2 12.1833 2.26267 13.4 2.788C14.6167 3.31333 15.675 4.02567 16.575 4.925C17.475 5.82433 18.1877 6.88267 18.713 8.1C19.2383 9.31733 19.5007 10.6173 19.5 12C19.4993 13.3827 19.2367 14.6827 18.712 15.9C18.1873 17.1173 17.475 18.1757 16.575 19.075C15.675 19.9743 14.6167 20.687 13.4 21.213C12.1833 21.739 10.8833 22.0013 9.5 22C8.61667 22 7.754 21.8877 6.912 21.663C6.07 21.4383 5.266 21.1007 4.5 20.65C6.05 19.75 7.271 18.5333 8.163 17C9.055 15.4667 9.50067 13.8 9.5 12C9.49933 10.2 9.05333 8.53333 8.162 7C7.27067 5.46667 6.05 4.25 4.5 3.35C5.26667 2.9 6.071 2.56267 6.913 2.338C7.755 2.11333 8.61733 2.00067 9.5 2Z" fill="white" />
                    </svg>
                </div>
                <h1 class="text-neutral-200 font-bold text-2xl mt-5 dm-sans">Support Night Mode</h1>
                <p class="text-neutral-300 archivo max-w-60 mt-4 leading-8">This website supports using themes
                    dark theme and vice versa.</p>
            </ul>
        </div>
        <div class="xl:grid-cols-3 mt-10 gap-10 flex items-center justify-center">
            <ul class="border-gradient-red-to-black shadow-2xl shadow-neutral-950 hover:scale-105 duration-200 p-4">
                <div class="for-icons">
                    <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4C13.0609 4 14.0783 4.42143 14.8284 5.17157C15.5786 5.92172 16 6.93913 16 8C16 9.06087 15.5786 10.0783 14.8284 10.8284C14.0783 11.5786 13.0609 12 12 12C10.9391 12 9.92172 11.5786 9.17157 10.8284C8.42143 10.0783 8 9.06087 8 8C8 6.93913 8.42143 5.92172 9.17157 5.17157C9.92172 4.42143 10.9391 4 12 4ZM12 14C16.42 14 20 15.79 20 18V20H4V18C4 15.79 7.58 14 12 14Z" fill="white" />
                    </svg>
                </div>
                <h1 class="text-neutral-200 font-bold text-2xl mt-5 dm-sans">Public All Access</h1>
                <p class="text-neutral-300 archivo max-w-60 mt-4 leading-8">Everyone can access the website
                    and everyone can watch
                    movies comfortably.</p>
            </ul>
            <ul class="border-gradient-red-to-black shadow-2xl shadow-neutral-950 hover:scale-105 duration-200 p-4">
                <div class="for-icons">
                    <svg width="45" height="45" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_459_562)">
                            <path d="M3.875 5.785L15.5058 2.5L27.125 5.785V12.5213C27.1249 15.9736 26.0023 19.3383 23.9163 22.1388C21.8302 24.9394 18.8864 27.0337 15.5019 28.125C12.1165 27.0338 9.17167 24.9392 7.08486 22.1381C4.99805 19.337 3.87505 15.9713 3.875 12.5181V5.785Z" stroke="white" stroke-width="4" stroke-linejoin="round" />
                            <path d="M9.6875 14.375L14.2083 18.75L21.9583 11.25" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_459_562">
                                <rect width="31" height="30" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h1 class="text-neutral-200 font-bold text-2xl mt-5 dm-sans">Protect non virus</h1>
                <p class="text-neutral-300 archivo max-w-60 mt-4 leading-8">This website is safe from any virus,
                    so don't doubt it anymore.</p>
            </ul>
            <ul class="border-gradient-red-to-black shadow-2xl shadow-neutral-950 hover:scale-105 duration-200 p-4">
                <div class="for-icons">
                    <svg width="45" height="45" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26 0.875H6C3.2385 0.875 1 2.83369 1 5.25V22.75C1 25.1663 3.2385 27.125 6 27.125H26C28.7615 27.125 31 25.1663 31 22.75V5.25C31 2.83369 28.7615 0.875 26 0.875ZM9 11.375H6.455V13.3438H9V14.6562H6.455V17.9375H5V10.0625H9V11.375ZM15.2375 17.9375H13.727L12.4915 14.6562H11.929V17.9375H10.5V10.0625H13C14.379 10.0625 15.5 11.0928 15.5 12.3594C15.5 13.3206 14.8535 14.1461 13.9395 14.4878L15.2375 17.9375ZM21 11.375H18.455V13.3438H21V14.6562H18.455V16.625H21V17.9375H17V10.0625H21V11.375ZM27 11.375H24.455V13.3438H27V14.6562H24.455V16.625H27V17.9375H23V10.0625H27V11.375Z" fill="white" />
                        <path d="M13 11.375H11.9285V13.3438H13C13.591 13.3438 14.0715 12.9019 14.0715 12.3594C14.0715 11.8169 13.591 11.375 13 11.375Z" fill="white" />
                    </svg>

                </div>
                <h1 class="text-neutral-200 font-bold text-2xl mt-5 dm-sans">Free no payment</h1>
                <p class="text-neutral-300 archivo max-w-60 mt-4 leading-8">This website does not emphasize you to
                    pay, on the contrary you are free
                    to use it.</p>
            </ul>
        </div>
    </div>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>