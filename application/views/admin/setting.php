<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>" />
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content ml-60">
			<h1 class="dm-sans">Settings</h1>

			<div class="card">
				<div class="card-header">
					<b class="dm-sans">Avatar</b>
					<div style="display: flex; gap: 1em">
						<a href="<?= site_url('admin/setting/remove_avatar') ?>" class="txt-red archivo">Remove Avatar</a>
						<a href="<?= site_url('admin/setting/upload_avatar') ?>" class="archivo">Change Avatar</a>
					</div>
				</div>
				<div class="card-body">
					<?php
					$avatar = $current_user->avatar ?
						base_url('upload/avatar/' . $current_user->avatar)
						: get_gravatar($current_user->email)
					?>
					<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="80" width="80">
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<b class="dm-sans">Profile Settings</b>
					<a href="<?= site_url('admin/setting/edit_profile') ?>" class="archivo">Edit Profile</a>
				</div>
				<div class="card-body">
					Name: <span class="text-gray archivo"><?= html_escape($current_user->name) ?></span>
					<br>
					Email: <span class="text-gray archivo"><?= html_escape($current_user->email) ?></span>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<b class="dm-sans">Security & Password</b>
					<a href="<?= site_url('admin/setting/edit_password') ?>" class="archivo">Edit Password</a>
				</div>
				<div class="card-body archivo">
					Your Password: <span class="text-gray">******</span>
					<br>
					Last Changed: <span class="text-gray"><?= $current_user->password_updated_at ?></span>
				</div>
			</div>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>


	<?php if ($this->session->flashdata('message')) : ?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>