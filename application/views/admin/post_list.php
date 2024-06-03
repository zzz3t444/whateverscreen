<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content ml-60">
			<h1 class="dm-sans">List Artikel</h1>

			<div class="toolbar">
				<a href="<?= site_url('admin/post/new') ?>" class="button archivo button-primary" role="button">+ Tulis Artikel</a>
			</div>

			<table class="w-full">
				<thead>
					<tr>
						<th class="archivo">Title</th>
						<th style="width: 15%;" class="text-center archivo">Status</th>
						<th style="width: 25%;" class="text-center archivo">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($movies as $movie): ?>
					<tr>
						<td>
							<div class="dm-sans"><?= $movie->title ?></div>
							<div class="dm-sans"><?= $movie->deskripsi ?></div>
							<div class="text-gray archivo"><small><?= $movie->created_at ?><small></div>
						</td>
						<?php if($movie->draft === 'true'): ?>
							<td class="text-center text-gray">Draft</td>
						<?php else: ?>
							<td class="text-center dm-sans text-green">Published</td>
						<?php endif ?>
						<td>
							<div>
								<a href="<?= site_url('movie/show/'.$movie->slug) ?>" class="button button-small dm-sans" target="_blank" role="button">Preview</a>
								<a href="<?= site_url('admin/post/edit/'.$movie->id) ?>" class="button button-small dm-sans" role="button">Edit</a>
								<a href="#" 
									data-delete-url="<?= site_url('admin/post/delete/'.$movie->id) ?>" 
									class="button archivo button-small button-danger" 
									role="button"
									onclick="deleteConfirm(this)">Delete</a>
							</div>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
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