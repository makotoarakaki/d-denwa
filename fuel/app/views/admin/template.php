<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	<?php echo Asset::css(array(
		'bootstrap.css',
		'mycss.css',
		'bootstrap-datepicker.css',
		'jquery.timepicker.css',
		'jqGrid/css/jquery-ui-1.10.4.custom.css',
		'jqGrid/css/ui.jqgrid.css',
		'jqGrid/css/ui.jqgrid-bootstrap.css',
		'jqGrid/css/ui.jqgrid-bootstrap-ui.css',
	)); ?>

	<?php echo Asset::js(array(
		'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
		'jqGrid/js/jquery-1.11.0.min.js',
		'jqGrid/js/jquery-ui-1.10.4.custom.min.js',
		'jqGrid/js/jquery.jqGrid.min.js',
		'jqGrid/js/i18n/grid.locale-ja.js',
		'bootstrap.js',
		'bootstrap-datepicker.js',
		'jquery.timepicker.js',
		'locales/bootstrap-datepicker.ja.js',
	)); ?>
	<style>
		body { margin: 50px; }
	</style>
	<script>
		$(function(){ $('.topbar').dropdown(); });
	</script>
	

</head>
<body>

	<?php if ($current_user): ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
<!--
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">ダッシュボード</a>
			</div>
-->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php
						$user_files = new GlobIterator(APPPATH.'classes/controller/admin/user.php');
						$user_segment = $user_files->getBasename('.php');
					?>
					<li class="<?php echo Uri::segment(2) == $user_segment ? 'active' : '' ?>">
						<?php echo Html::anchor('admin/user', 'ユーザー管理') ?>
					</li>
					<?php
						$person_files = new GlobIterator(APPPATH.'classes/controller/admin/person.php');
						$person_segment = $person_files->getBasename('.php');
					?>
					<li class="<?php echo Uri::segment(2) == $person_segment ? 'active' : '' ?>">
						<?php echo Html::anchor('admin/person', '担当者管理') ?>
					</li>
					<?php
						$item_files = new GlobIterator(APPPATH.'classes/controller/admin/item.php');
						$item_segment = $item_files->getBasename('.php');
					?>
					<li class="<?php echo Uri::segment(2) == $item_segment ? 'active' : '' ?>">
						<?php echo Html::anchor('admin/item', '商品管理') ?>
					</li>
					<?php
						$customer_files = new GlobIterator(APPPATH.'classes/controller/admin/customer.php');
						$customer_segment = $customer_files->getBasename('.php');
					?>
					<li class="<?php echo Uri::segment(2) == $customer_segment ? 'active' : '' ?>">
						<?php echo Html::anchor('admin/customer', '顧客管理') ?>
					</li>
					<?php
						$history_files = new GlobIterator(APPPATH.'classes/controller/admin/dailyhistory.php');
						$history_segment = $history_files->getBasename('.php');
					?>
					<li class="<?php echo Uri::segment(2) == $history_segment ? 'active' : '' ?>">
						<?php echo Html::anchor('admin/dailyhistory', '日別履歴管理') ?>
					</li>
					<?php
						$daily_files = new GlobIterator(APPPATH.'classes/controller/admin/daily.php');
						$daily_segment = $daily_files->getBasename('.php');
					?>
					<li class="<?php echo Uri::segment(2) == $daily_segment ? 'active' : '' ?>">
						<?php echo Html::anchor('admin/daily', '日別管理') ?>
					</li>
				</ul>
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $current_user->username ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?php echo Html::anchor('admin/logout', 'ログアウト') ?></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo $title; ?></h1>
				<hr>
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
			<div class="col-md-12">
<?php echo $content; ?>
			</div>
		</div>
		<hr/>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
			<p>Copyright © 2015 エムエークリエイション. All rights reserved</p>
				<!--<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>-->
		</footer>
	</div>
</body>
</html>
