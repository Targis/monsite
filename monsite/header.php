<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">

	<title><?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description'); ?></title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>

<body>

	<header class="header">
		<div class="container">
			<div class="row">

				<img src="img/logo.png" alt="logo" class="logo">
				<h1><?php echo get_bloginfo('name'); ?></h1>
				<p><?php echo get_bloginfo('description'); ?></p>

			</div> <!-- End row -->
		</div> <!-- End container -->
	</header>
	<nav class="top-menu">
		<ul class="menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Me</a></li>
			<li><a href="publications.html">Publications</a></li>
			<li><a href="contact.html">Contact Me</a></li>
			<li><a href="blog.html">Research Blog</a></li>
		</ul>
	</nav>