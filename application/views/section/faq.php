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
			<h1 class="text-3xl font-bold mb-6 text-center dm-sans">FAQ - Whatever <span class="text-red-600">Screen</span></h1>
			<div id="faq-container">
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(1)"
				>
					<h2 class="faq-question text-lg dm-sans font-semibold cursor-pointer">
						1. What is Whatever Screen?
					</h2>
					<div id="faq-answer-1" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
						 Whatever Screen is a website that provides movie reviews,
						 TV series, and other multimedia content. 
						 The website is designed using Tailwind CSS for styling and JavaScript to ensure a dynamic and reactive user experience.
						</p>
					</div>
				</div>
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(2)"
				>
					<h2 class="faq-question text-lg dm-sans font-semibold cursor-pointer">
						2. How to navigate on the Whatever Screen website?
					</h2>
					<div id="faq-answer-2" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
						 Navigation on Whatever Screen is very easy. We use a responsive navigation menu at the top of the page,
						 where you can quickly access the latest reviews, specific genres, and selected articles.
						 This menu was created using Tailwind CSS and JavaScript to provide a smooth user experience across multiple devices.
						</p>
					</div>
				</div>
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(3)"
				>
					<h2 class="faq-question text-lg dm-sans font-semibold cursor-pointer">
						3. Does Whatever Screen support search features?
					</h2>
					<div id="faq-answer-3" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
						 Yes, Whatever Screen comes with a reactive search feature.
						 You can type in the title of the movie or series you're looking for in the search box,
						 and the results will appear instantly thanks to the 
						 the use of JavaScript. This feature utilizes Tailwind CSS to ensure the display of search results remains neat and responsive.
						</p>
					</div>
				</div>
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(4)"
				>
					<h2 class="faq-question text-lg dm-sans  font-semibold cursor-pointer">
						4. How Whatever Screen handles user feedback?
					</h2>
					<div id="faq-answer-4" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
						Whatever Screen allows users to leave reviews and ratings for any content on the site. This system is built
						using JavaScript to handle user input in
						real-time user input, and Tailwind CSS to ensure reviews display well on all screen sizes.
						well on all screen sizes. User reviews are also moderated to
						maintain quality and relevance.
						</p>
					</div>
				</div>
				<div
					class="faq-item border-b border-neutral-900 py-4"
					onclick="toggleFaq(5)"
				>
					<h2 class="faq-question text-lg dm-sans font-semibold cursor-pointer">
						5. Can Whatever Screen be accessed from mobile devices?
					</h2>
					<div id="faq-answer-5" class="faq-answer hidden mt-2">
						<p class="archivo max-w-sm text-sm text-neutral-300">
						 Of course! Whatever Screen is designed with mobile-first principles using Tailwind CSS,
						 so that the appearance and functionality of the and functionality of the site remains optimized on various devices, 
						 including smartphones and tablets. The use of JavaScript also ensures that interactions remain reactive and fast even when accessed from mobile devices.
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
