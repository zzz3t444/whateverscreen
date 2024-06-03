<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">
    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container mx-auto mt-10 px-4">
        <h1 class="text-5xl font-bold text-neutral-200 text-center mb-6">Thank You!</h1>
        <p class="text-xl text-gray-300 text-center">Your message has been sent!</p>
    </div>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
