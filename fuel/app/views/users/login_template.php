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
		'bootstrap.js',
	)); ?>
</head>
<body>


	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
<!--			<div class="col-md-12">-->
			<div class="col-md-12 col-sm-12 col-xs-12">
<?php echo $content; ?>
			</div>
		</div>
	</div>
</body>
</html>
