<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	<?php echo Asset::css(array(
		'bootstrap.css',
		'mycss.css',
	)); ?>

	<?php echo Asset::js(array(
		'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
		'jqGrid/js/jquery-1.11.0.min.js',
		'jqGrid/js/jquery-ui-1.10.4.custom.min.js',
		'bootstrap.js',
	)); ?>
	<style>
/*		body { margin: 50px; } */
		body { margin: 95px; }
	</style>	

</head>
<body>
	<div class="container">
		<div class="row">
<!--			<div class="col-md-12">-->
			<div class="centered col-md-12 col-sm-12 col-xs-12">
				<h1><?php echo $content->title; ?></h1>
				<h1><?php echo Html::img($content->filename); ?></h1>
				<h1><?php echo $content->overview; ?></h1>
			</div>
		</div>
			<footer class="centered">
			<p>Copyright © 2015 エムエークリエイション. All rights reserved</p>
		</footer>
	</div>
</body>
</html>

