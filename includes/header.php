<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/favicon.ico" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Playfair+Display:400i|Raleway:400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <title><?php echo TITLE; ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$("html").addClass("js");
	</script>

</head>

<body>
		<header>

		<?php if ($theme === "home") { ?>
			<section class="bgimage <?php echo $theme; ?>" data-type="background" data-speed="4">
			<section class="white-overlay">
		<?php } else { ?>
			<section class="container">
		<?php } ?>

					<section id="flash-nav" class="header">
						<div>
							<h1><a href="services.php">Eirin Gonzales</a></h1>
							<span id="menu">Menu <i class="fa fa-bars"></i></span>
						</div>

						<nav id="navigation">
							<span id="closeMenu"><p>&times;</p></span>
							<ul role="navigation">
							<li><a href="services.php" class="relative">Services</a></li>
							<li><a href="assets/eiringonzales_resume.pdf">Resume</a></li>
							<li><a href="portfolio.php" class="relative">Portfolio</a></li>
							<li><a href="https://theproactivedeveloper.wordpress.com/" target="_blank">Blog</a></li>
							<li><a href="contact.php" class="relative">Contact</a></li>
							</ul>
						</nav>
					</section>
