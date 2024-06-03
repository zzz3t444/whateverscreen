<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">
	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="container mt-14 mx-auto px-4 py-12">
		<div class="max-w-md mx-auto  border border-neutral-800 shadow-lg rounded-lg p-8">
			<div class="text-center mb-6">
				<h1 class="text-3xl text-neutral-200 font-bold mb-2">Login</h1>
				<p class="text-gray-300">Masuk ke Dashboard</p>
			</div>

			<?php if($this->session->flashdata('message_login_error')): ?>
				<div class="bg-red-100 text-red-700 p-2 rounded mb-4">
					<?= $this->session->flashdata('message_login_error') ?>
				</div>
			<?php endif ?>

			<form action="" method="post">
				<div class="mb-4">
					<label for="name" class="block text-gray-200">Email/Username*</label>
					<input autocomplete="off" type="text" name="username" class="border border-gray-300 p-2 w-full rounded <?= form_error('username') ? 'border-red-500' : '' ?>"
						placeholder="Your username or email" value="<?= set_value('username') ?>" required />
					<div class="text-red-500 text-sm mt-1">
						<?= form_error('username') ?>
					</div>
				</div>
				<div class="mb-6">
					<label for="password" class="block text-gray-200">Password*</label>
					<input autocomplete="off" type="password" name="password" class="border border-gray-300 p-2 w-full rounded <?= form_error('password') ? 'border-red-500' : '' ?>"
						placeholder="Enter your password" value="<?= set_value('password') ?>" required />
					<div class="text-red-500 text-sm mt-1">
						<?= form_error('password') ?>
					</div>
				</div>

				<div class="text-center">
					<input type="submit" class="bg-sky-600 text-white p-2 rounded w-full cursor-pointer hover:bg-sky-700" value="Login">
				</div>
			</form>
		</div>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
