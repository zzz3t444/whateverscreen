<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content ml-52">
			<h1>Movie is Empty</h1>
			<p>No Movie to show. Please create new Movie.</p>

			<div class="mt-5">
				<a href="<?= site_url('admin/post/new') ?>" class="button button-primary">+ Create New Movie</a>
			</div>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>