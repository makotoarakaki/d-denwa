<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	<?php echo Asset::css(array(
		'bootstrap.css',
		'mycss.css',
//		'ddenwa/rcs/style.min.css',
		'ddenwa/rcs/rcswitcher.min.css',
	)); ?>

	<?php echo Asset::js(array(
		'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
		'jqGrid/js/jquery-1.11.0.min.js',
		'jqGrid/js/jquery-ui-1.10.4.custom.min.js',
		'bootstrap.js',
		'ddenwa/rcs/jquery-2.1.3.min.js',
		'ddenwa/rcs/rcswitcher.min.js',
	)); ?>
	<style>
/*		body { margin: 50px; } */
		body { margin: 95px; }
	</style>
	<script>
		$(function(){ $('.topbar').dropdown(); });
	</script>
	

</head>
<body>

	<?php if ($current_user): ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
<!--
				<a class="navbar-brand" href="#">ダッシュボード</a>
-->
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php
						$content_files = new GlobIterator(APPPATH.'classes/controller/users/content.php');
						$content_segment = $content_files->getBasename('.php');
					?>
					<li class="<?php echo Uri::segment(2) == $content_segment ? 'active' : '' ?>">
						<?php echo Html::anchor('users/content', '広告管理') ?>
					</li>
					<?php
						$basicinfo_files = new GlobIterator(APPPATH.'classes/controller/users/basicinfo.php');
						$basicinfo_segment = $basicinfo_files->getBasename('.php');
					?>
					<li class="<?php echo Uri::segment(2) == $basicinfo_segment ? 'active' : '' ?>">
						<?php echo Html::anchor('users/basicinfo', '基本情報') ?>
					</li>
				</ul>
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $current_user->username ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?php echo Html::anchor('users/logout', 'ログアウト') ?></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="container">
		<div class="row">
<!--			<div class="col-md-12">-->
			<div class="centered col-md-12 col-sm-12 col-xs-12">
				<h1><?php echo $title; ?></h1>
				<!--<hr>-->
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
		<!--<hr/>-->
		<footer class="centered">
			<p>Copyright © 2016 ddenwa.com. All rights reserved</p>
		</footer>
	</div>
</body>
</html>
