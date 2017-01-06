<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $temponame; ?></title>
	<?php echo Asset::css(array(
		'ddenwa/assets/css/main.css',
	)); ?>
	<!--[if lte IE 8]>
	<?php echo Asset::css(array(
		'ddenwa/assets/css/ie8.css',
	)); ?>
    <![endif]-->
	<!--[if lte IE 9]>
	<?php echo Asset::css(array(
		'ddenwa/assets/css/ie9.css',
	)); ?>
    <![endif]-->

	<?php echo Asset::js(array(
		'ddenwa/assets/js/jquery.min.js',
		'ddenwa/assets/js/skel.min.js',
		'ddenwa/assets/js/util.js',
		'ddenwa/assets/js/main.js',
	)); ?>
	<!--[if lte IE 8]>
	<?php echo Asset::js(array(
		'ddenwa/assets//js/ie/html5shiv.js',
		'ddenwa/assets//js/ie/respond.min.js',
	)); ?>
    <![endif]-->


</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="ddenwa.php" class="logo">
									<span><?php echo Html::img('assets/img/logo.png'); ?></span>
								</a>

							<!-- Nav -->
							<!--
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
							-->

						</div>
					</header>

				<!-- Menu -->
<!--
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.html">Ipsum veroeros</a></li>
							<li><a href="generic.html">Tempus etiam</a></li>
							<li><a href="generic.html">Consequat dolor</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>
-->
				<!-- Main -->
					<div id="main">
					<?php foreach ($contents as $item): ?>

						<div class="inner">
							<h1><?php echo $item->title; ?></h1>
							<?php 
								//ファイル名取得
								$filename = $item->filename;
							?>

							<span class="image main"><a href="tel:'<?php echo $telno; ?>'"><?php echo Html::img('uploads/'.$filename, array('class' => 'thumbnail')); ?></a></span>
							<p><?php echo $item->overview; ?></p>
						</div>
					<?php endforeach; ?>
					</div>

				<!-- Footer -->
					<footer id="footer">
<!--
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
-->
							<ul class="copyright">
								<p>&copy; Untitled. All rights reserved D-Denwa.com</p>
							</ul>
						</div>
					</footer>

			</div>
	</body>
</html>
