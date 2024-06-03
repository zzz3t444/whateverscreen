<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
</head>

<body class="flex items-center justify-center">
    <div class="w-2/3">
        <div class="flex justify-center gap-12">
            <ul>
                <img src="https://cdn.shopify.com/s/files/1/0019/2105/6881/files/pengabdi_setan.jpg?v=1701302207" alt="Category 1" class="film-category rounded-xl cursor-pointer" data-film-category="1" width="180px" height="120px" />
                <h1 class="text-center text-neutral-200 font-bold dm-sans mt-3">Horror</h1>
            </ul>
            <ul>
                <img src="https://m.media-amazon.com/images/M/MV5BYWRkZjJiODEtM2IwZi00ZjM1LWEyOTUtOThjMDk3YThjZDUzXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg" alt="Category 2" class="film-category rounded-xl cursor-pointer" data-film-category="2" width="180px" height="120px" />
                <h1 class="text-center text-neutral-200 font-bold dm-sans mt-3">Romance</h1>
            </ul>
            <ul>
                <img src="https://m.media-amazon.com/images/M/MV5BMjA5ZjA3ZjMtMzg2ZC00ZDc4LTk3MTctYTE1ZTUzZDIzMjQyXkEyXkFqcGdeQXVyMTM1NjM2ODg1._V1_.jpg" alt="Category 3" class="film-category rounded-xl cursor-pointer" data-film-category="3" width="180px" height="120px" />
                <h1 class="text-center text-neutral-200 font-bold dm-sans mt-3">Action</h1>
            </ul>
            <ul>
                <img src="https://dramacool.net.tr/wp-content/uploads/2024/04/hard-to-find-2024.png" alt="Category 4" class="film-category rounded-xl cursor-pointer" data-film-category="4" width="180px" height="120px" />
                <h1 class="text-center text-neutral-200 font-bold dm-sans mt-3">Drama</h1>
            </ul>
            <ul>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJFcic0Q_f4vcxNHpFxSGHLTIxYUoT1QpSz0wnupriWw&s" alt="Category 5" class="film-category rounded-xl cursor-pointer" data-film-category="5" width="180px" height="120px" />
                <h1 class="text-center text-neutral-200 font-bold dm-sans mt-3">Disney</h1>
            </ul>
        </div>
        <div class="film-carousel-container mt-20">
            <div id="film-carousel-1" class="film-carousel-item active">
                <div class="p-4 flex items-center rounded-3xl gap-5 justify-center shadow">
                  
                </div>
            </div>
            <div id="film-carousel-2" class="film-carousel-item hidden">
                <div class="p-4 bg-gradient-to-r from-[#740e31] to-[#e92467] rounded-3xl shadow">
                    <h2 class="text-xl font-bold text-neutral-200">Category 2 Items</h2>
                    <p class="text-neutral-300 mt-5">Content for Category 2</p>
                </div>
            </div>
            <div id="film-carousel-3" class="film-carousel-item hidden">
                <div class="p-4 bg-gradient-to-r from-[#101443] to-[#212a82]rounded-3xl shadow">
                    <h2 class="text-xl font-bold text-neutral-200">Category 3 Items</h2>
                    <p class="text-neutral-300 mt-5">Content for Category 3</p>
                </div>
            </div>
            <div id="film-carousel-4" class="film-carousel-item hidden">
                <div class="p-4 bg-[#2aa845] rounded-3xl shadow">
                    <h2 class="text-xl font-bold text-neutral-200">Category 4 Items</h2>
                    <p class="text-neutral-300 mt-5">Content for Category 4</p>
                </div>
            </div>
            <div id="film-carousel-5" class="film-carousel-item hidden">
                <div class="p-4 bg-[#14a8b9] rounded-3xl shadow">
                    <h2 class="text-xl font-bold text-neutral-200">Category 5 Items</h2>
                    <p class="text-neutral-300 mt-5">Content for Category 5</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll(".film-category").forEach((category) => {
            category.addEventListener("click", () => {
                const filmCategoryNum = category.getAttribute("data-film-category");
                document.querySelectorAll(".film-carousel-item").forEach((item) => {
                    item.classList.add("hidden");
                    item.classList.remove("active");
                });
                document
                    .getElementById(`film-carousel-${filmCategoryNum}`)
                    .classList.remove("hidden");
                document
                    .getElementById(`film-carousel-${filmCategoryNum}`)
                    .classList.add("active");
            });
        });
    </script>
</body>

</html>