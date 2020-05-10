<?php
	define('TITLE', 'Portfolio');
	$theme = 'portfolio';
	include('../includes/header.php');
	require_once('../includes/arrays.php');
?>
			</section>
		</header>

		<section class="page-title">
			<h2>Portfolio</h2>
		</section>

		<section id="portfolio">
			<div>
				<div class="page-title">
					<h3>Legacy Back End Projects</h3>
				</div>
				<ul class="projects group">
					<?php foreach($backend as $project) { ?>

					<li class="skills-module">
						<div class="project-piece">
							<img src="<?php echo $project["image"]; ?>">
							<div class="overlay">
								<a class="project-title" href="<?php echo $project["source"]; ?>" target="_blank"><p><?php echo $project["title"]; ?></p></a>
								<button class="close-overlay hidden"><i class="fa fa-times" aria-hidden="true"></i></button>
							</div>
						</div>
					</li>

					<?php } ?>

				</ul>

			</div>
			<div>
				<div class="page-title">
					<h3>Legacy Front End Projects</h3>
				</div>
				<ul class="projects group">
					<li class="skills-module">
						<div class="project-piece">
							<img src="assets/portfolio/disrupted.png">
							<div class="overlay">
								<a class="project-title" href="https://www.disrupted.co/" target="_blank"><p>DISRUPTED<span class="proj-desc">Worked with SchoolApply</span></p></a>
								
								<button class="close-overlay hidden"><i class="fa fa-times" aria-hidden="true"></i></button>
							</div>
						</div>
					</li>

					<?php foreach($projects as $project) { ?>

					<li class="skills-module">
						<div class="project-piece">
							<img src="<?php echo $project["image"]; ?>">
							<div class="overlay">
								<a class="project-title" href="<?php echo $project["source"]; ?>" target="_blank"><p><?php echo $project["title"]; ?></p></a>
								<button class="close-overlay hidden"><i class="fa fa-times" aria-hidden="true"></i></button>
							</div>
						</div>
					</li>

					<?php } ?>

				</ul>

			</div>
		</section>


		<section class="contact group">
			<p>Do you want a <strong>Front End Engineer</strong> who's willing to learn new things and solves problems?</p>
			<p>Do you want someone in your team who will help <strong>build the next big product of your growing business</strong>?</p>
			<p>Let's talk!</p>
			<a role="button" title="Contact Eirin Gonzales" href="contact.php" class="sliding-btn">Contact me here</a>
		</section>

		<?php

	include('../includes/footer.php');

?>
