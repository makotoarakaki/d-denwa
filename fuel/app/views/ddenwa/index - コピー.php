<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>メイン</title>
	<?php echo Asset::css(array(
		'ddenwa/assets/css/main.css',
	)); ?>

	<?php echo Asset::js(array(
//		'ddenwa/assets/js/jquery.min.js',
//		'ddenwa/assets/js/skel.min.js',
//		'ddenwa/assets/js/util.js',
//		'ddenwa/assets/js/main.js',
	)); ?>
	<!--[if lte IE 8]>
	<?php echo Asset::js(array(
//		'ddenwa/assets/js/ie/respond.min.js',
//		'ddenwa/assets//js/ie/html5shiv.js',
	)); ?>
    <![endif]-->


</head>
<body>
	<div class="container">
	<!-- Content -->
		<div id="content">
			<div class="inner">

				<!-- Post -->
					<!--<article class="box post post-excerpt">-->
					<article class="box post">
						<?php foreach ($contents as $item): ?>
						<header>
							<div id="titleBar">
								<span class="title"><?php echo $temponame; ?></span>
							</div>

							<h2><?php echo $item->title; ?></h2>
						</header>
						<div class="main">
							<?php 
								//ファイル名取得
								$filename = $item->filename;
								if (!empty($filename)) {
								// 保存先よろファイル名を取得
									$image_path = \File::get(DOCROOT.'/uploads/'.$filename);
									$url = $image_path->get_path();
								}
							?>

							<p><a href="tel:"<?php echo $telno; ?>><?php echo Html::img($url, array('class' => 'thumbnail')); ?></a></p>
							<p><?php echo $item->overview; ?></p>
						</div>
						<?php endforeach; ?>
					</article>
			<!-- Copyright -->
				<ul id="copyright">
					<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</div>
	</div>
	
</body>
</html>
