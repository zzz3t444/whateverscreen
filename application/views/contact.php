<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/categoies.css'); ?>">
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body class="bg-black">
    <?php $this->load->view('_partials/navbar.php'); ?>
    <div class="container mx-auto px-4 mt-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-7xl items-center mx-auto">
            <div class="md:col-span-2 max-w-3xl">
                <div class="text-start">
                    <h1 class="text-5xl tracking-tight font-bold text-gray-200 mb-3 dm-sans">Get In Touch</h1>
                    <p class="mb-8 text-gray-300 max-w-2xl archivo leading-7">We’ll create high-quality linkable content and build at least 40 high-authority links to each asset, paving the way for you to grow your rankings, improve brand.</p>
                </div>
                <form action="" method="post" class="bg-black shadow-lg rounded-3xl p-8 pt-0 pl-0">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-200 dm-sans font-medium mb-2">Your Name</label>
                        <input type="text" name="name" class="border border-neutral-800 bg-black rounded-md placeholder:text-sm text-white focus:outline-none px-4 py-2 w-full <?= form_error('name') ? 'border-red-500' : 'border-gray-300' ?>" placeholder="your Name" value="<?= set_value('name') ?>" required maxlength="32" />
                        <div class="text-red-500 mt-1"><?= form_error('name') ?></div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-200 dm-sans font-medium mb-2">Your Email</label>
                        <input type="email" name="email" class="border border-neutral-800 bg-black rounded-md placeholder:text-sm text-white focus:outline-none px-4 py-2 w-full <?= form_error('email') ? 'border-red-500' : 'border-gray-300' ?>" placeholder="your Email" value="<?= set_value('email') ?>" required />
                        <div class="text-red-500 mt-1"><?= form_error('email') ?></div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-200 dm-sans font-medium mb-2">Message</label>
                        <textarea name="message" class="border border-neutral-800 bg-black rounded-md placeholder:text-sm text-white focus:outline-none px-4 py-2 w-full <?= form_error('message') ? 'border-red-500' : 'border-gray-300' ?>" rows="5" placeholder="Write your message" required><?= set_value('message') ?></textarea>
                        <div class="text-red-500 mt-1"><?= form_error('message') ?></div>
                    </div>
                    <div class="flex gap-4 mb-2">
                        <input type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 archivo rounded-3xl" value="Send Message">
                        <input type="reset" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 archivo rounded-3xl" value="Reset">
                    </div>
                </form>
            </div>
            <img src="https://res.cloudinary.com/ddy7p8yrj/image/upload/v1717434303/Group_1808_rcfhrp.png" width="1400px" alt="">
        </div>
    </div>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>