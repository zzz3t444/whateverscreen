<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/faq.css'); ?>">
		<script src="https://cdn.tailwindcss.com"></script>
	</head>
	<div class="text-gray-200">
		<div class="max-w-7xl mt-32 mx-auto p-6">
			<h1 class="text-3xl font-bold mb-6 text-center dm-sans">FAQ - Sebelah <span class="text-sky-600">Layar</span></h1>
			<div id="faq-container">
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(1)"
				>
					<h2 class="faq-question text-lg dm-sans font-semibold cursor-pointer">
						1. Apa itu Sebelah Layar?
					</h2>
					<div id="faq-answer-1" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
							Sebelah Layar adalah sebuah website yang menyediakan ulasan film,
							serial TV, dan konten multimedia lainnya. Situs ini dirancang
							dengan menggunakan Tailwind CSS untuk styling dan JavaScript untuk
							memastikan pengalaman pengguna yang dinamis dan reaktif.
						</p>
					</div>
				</div>
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(2)"
				>
					<h2 class="faq-question text-lg dm-sans font-semibold cursor-pointer">
						2. Bagaimana cara navigasi di situs Sebelah Layar?
					</h2>
					<div id="faq-answer-2" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
							Navigasi di Sebelah Layar sangat mudah. Kami menggunakan menu
							navigasi yang responsif di bagian atas halaman, di mana Anda dapat
							dengan cepat mengakses ulasan terbaru, genre tertentu, dan artikel
							pilihan. Menu ini dibuat menggunakan Tailwind CSS dan JavaScript
							untuk memberikan pengalaman pengguna yang lancar di berbagai
							perangkat.
						</p>
					</div>
				</div>
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(3)"
				>
					<h2 class="faq-question text-lg dm-sans font-semibold cursor-pointer">
						3. Apakah Sebelah Layar mendukung fitur pencarian?
					</h2>
					<div id="faq-answer-3" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
							Ya, Sebelah Layar dilengkapi dengan fitur pencarian yang reaktif.
							Anda dapat mengetikkan judul film atau serial yang Anda cari di
							kotak pencarian, dan hasilnya akan muncul secara instan berkat
							penggunaan JavaScript. Fitur ini memanfaatkan Tailwind CSS untuk
							memastikan tampilan hasil pencarian tetap rapi dan responsif.
						</p>
					</div>
				</div>
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(4)"
				>
					<h2 class="faq-question text-lg dm-sans  font-semibold cursor-pointer">
						4. Bagaimana Sebelah Layar menangani ulasan pengguna?
					</h2>
					<div id="faq-answer-4" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
							Sebelah Layar mengizinkan pengguna untuk memberikan ulasan dan
							rating untuk setiap konten yang ada di situs. Sistem ini dibangun
							menggunakan JavaScript untuk menangani input pengguna secara
							real-time, dan Tailwind CSS untuk memastikan ulasan tampil dengan
							baik di semua ukuran layar. Ulasan pengguna juga dimoderasi untuk
							menjaga kualitas dan relevansi.
						</p>
					</div>
				</div>
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(5)"
				>
					<h2 class="faq-question text-lg dm-sans font-semibold cursor-pointer">
						5. Apakah Sebelah Layar bisa diakses dari perangkat mobile?
					</h2>
					<div id="faq-answer-5" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
							Tentu saja! Sebelah Layar dirancang dengan prinsip mobile-first
							menggunakan Tailwind CSS, sehingga tampilan dan fungsionalitas
							situs tetap optimal di berbagai perangkat, termasuk smartphone dan
							tablet. Penggunaan JavaScript juga memastikan interaksi tetap
							reaktif dan cepat meskipun diakses dari perangkat mobile.
						</p>
					</div>
				</div>
			</div>
		</div>
		<script>
			function toggleFaq(index) {
				const answer = document.getElementById(`faq-answer-${index}`);
				if (answer.classList.contains("hidden")) {
					answer.classList.remove("hidden");
					answer.classList.add("block");
				} else {
					answer.classList.remove("block");
					answer.classList.add("hidden");
				}
			}
		</script>
	</div>
</html>
