<footer>
      <div class="row">
        <div>
          <h4>Menu</h4>
					<p><a href="services.php">Go back to Home</a></p>
          <p><a href="portfolio.php">Look at my Portfolio</a></p>
          <p><a href="contact.php">Contact Me Here</a></p>					
					<p>Check out <a href="https://www.freecodecamp.org/">Free Code Camp</a> if you want to learn about web development.</p>
        </div>
        <div>
          <h4>Tech Stack</h4>
          <p>Front End: HTML, Bootstrap 4, CSS, Sass, jQuery, React, Redux</p>
          <p>Back End: Express.js, Mongoose, mLab</p>
          <p>Assets: Google Fonts, Unsplash.com, Font Awesome Icons</p>
        </div>
        <div>
          <h4>Developer</h4>
          <p>The Proactive Dev</p>
          <p>Get in touch with me:</p>
					<div class="social">
						<ul class="web">
							<li><a href="https://www.facebook.com/theproactivedev/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
							<li><a href="https://ph.linkedin.com/in/eirin-gonzales-5951aa9b"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="https://twitter.com/theproactivedev"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://github.com/theproactivedev"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
							<li><a href="https://gitlab.com/theproactivedev"><i class="fa fa-gitlab" aria-hidden="true"></i></a></li>
						</ul>
					</div>
        </div>
      </div>
			<p>&copy; <?php date_default_timezone_set("Asia/Manila"); echo date('Y'); ?> Eirin Gonzales</p>
		</footer>

	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$("html").removeClass("js");
		});
	</script>
</body>

</html>
