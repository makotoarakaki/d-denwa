		<div class="centered col-md-12 col-sm-12 col-xs-12">
			<p><h1><?php echo $content[0]['title']; ?></h1></p>
<?php
		if (!empty($content[0]['filename'])) {
			$image_path = \File::get(DOCROOT.'/uploads/'.$content[0]['filename']);		
		} else {
			$image_path = \File::get(DOCROOT.'/uploads/no_photo.gif');
		}
		$url = $image_path->get_path();
?>
			<div id ="photo">
				<p><h1><?php echo Html::img($url); ?></h1></p>
			</div>
			<p><h3><?php echo $content[0]['overview']; ?></h3></p>
		</div>
<br />
<p>
<?php echo Html::anchor('users/content', '戻る', array('class' => 'btn btn-primary', 'style' => 'width: 95%; height: 45px;')); ?>
</p>