<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>" />
	<script src="httsp://cdn.tailwindcss.com"></script>
</head>

<body>
	<aside class="side-nav fixed">
		<div class="brand mt-4">
			<h2 class="dm-sans text-2xl font-semibold">Sebelah Layar</h2>
			<div style="display: flex; align-items: center; gap:10px;">
				<?php
				$avatar = $current_user->avatar ?
					base_url('upload/avatar/' . $current_user->avatar)
					: get_gravatar($current_user->email)
				?>
				<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" width="50">
				<div>
					<b><?= htmlentities($current_user->name) ?></b>
					<small><?= htmlentities($current_user->email) ?></small>
				</div>
			</div>
		</div>
		<nav class="archivo">
			<a href="<?= site_url('admin/dashboard') ?>">Overview</a>
			<a href="<?= site_url('admin/post') ?>">Post</a>
			<a href="<?= site_url('admin/feedback') ?>">Feedback</a>
			<a href="<?= site_url('admin/setting') ?>">Setting</a>
			<a href="<?= site_url('auth/logout') ?>">Logout</a>
		</nav>
		<?php $this->load->view('admin/_partials/footer.php') ?>
	</aside>
</body>

</html>