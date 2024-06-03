<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <main class="main">
        <?php $this->load->view('admin/_partials/side_nav.php') ?>

        <div class="content mt-12 mx-auto px-4 md:px-6 lg:px-8">
            <h1 class="text-3xl font-semibold mb-4">Feedback is Empty</h1>

            <p class="text-gray-800">No Feedback to show</p>

            <?php $this->load->view('admin/_partials/footer.php') ?>
        </div>
    </main>
</body>

</html>
