<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>" />
</head>

<body>
	<main class="main">
		<!-- <?php $this->load->view('admin/_partials/side_nav.php') ?> -->

		<div class="content" style="margin-left: 12;">
			<h1 class="dm-sans text-3xl font-bold">Write new Article</h1>

			<form action="<?php base_url('admin/post/new') ?>" method="POST" enctype="multipart/form-data">
				<div class="flex items-center justify-center gap-10">
					<div class="grid w-full">
						<label for="title" class="dm-sans">Title*</label>
						<input type="text" class="archivo border border-black p-2 " name="title" placeholder="Judul artikel" required title="Wajib tulis judul artikel" />
					</div>

					<div class="grid w-full">
						<label for="deskripsi " class="dm-sans">deskripsi*</label>
						<input type="text" class="archivo border border-black p-2 " name="deskripsi" placeholder="Judul artikel" required deskripsi="Wajib Deskripsi singkat" />
					</div>
				</div>

				<label for="content" class="dm-sans">Konten</label>
				<textarea name="content" class="border border-black p-2" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."></textarea>

				<div class="flex items-center justify-center gap-10">
					<div class="grid w-full">
						<label for="genre" class="dm-sans">Genre*</label>
						<input type="text" class="archivo border border-black p-2 " name="genre" placeholder="Judul artikel" required genre="masukkan genre filmnya" />
					</div>

					<div class="grid w-full">
						<label for="katagori_umur" class="dm-sans">katagori_umur*</label>
						<input type="number" class="archivo border border-black p-2 " name="katagori_umur" placeholder="Judul artikel" required katagori_umur="Masukkan minial umur" />
					</div>
				</div>

				<label for="casting" class="dm-sans">casting</label>
				<textarea name="casting" class="border border-black p-2" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."></textarea>

				<div>
					<label for="">file</label>
					<input type="file" name="testing">
				</div>

				<div class="mt-5">
					<label for="url">URL</label>
					<input class="-mt-3 border border-neutral-500 p-2" type="text" name="url" id="" placeholder="URL">
				</div>

				<div class="mt-5">
					<button name="draft" class="button archivo" value="true">Save to Draft</button>
					<button type="submit" name="draft" class="button archivo button-primary">Publish</button>
				</div>
			</form>
		</div>
	</main>
</body>

</html>