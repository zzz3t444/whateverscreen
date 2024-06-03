<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
  <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>" />
</head>

<body class="bg-gray-100">
  <main class="main flex">
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div class="content mx-auto">
      <h1 class="text-3xl font-bold dm-sans mb-4">Overview</h1>

      <div class="flex relative ml-60 gap-4">
        <div class="card text-center bg-white rounded-lg p-4 w-48">
          <h2 class="text-2xl font-semibold"><?= $movie_count ?></h2>
          <p><a href="<?= site_url('admin/post') ?>" class="text-blue-500 hover:underline">movie</a></p>
        </div>
        <div class="card text-center bg-white rounded-lg p-4 w-48">
          <h2 class="text-2xl font-semibold"><?= $feedback_count ?></h2>
          <p><a href="<?= site_url('admin/feedback') ?>" class="text-blue-500 hover:underline">Feedback</a></p>
        </div>
      </div>

      <?php $this->load->view('admin/_partials/footer.php') ?>
    </div>
  </main>
</body>

</html>
