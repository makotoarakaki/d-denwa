		<div class="col-md-12 col-sm-12 col-xs-12">
			<p><h1><?php echo $content[$id]['title']; ?></h1></p>
<?php
		if (!empty($content[$id]['filename'])) {
			$image_path = 'uploads/'.$content[$id]['filename'];		
		} else {
			$image_path = 'uploads/no_photo.gif';
		}
?>
			<div id ="photo">
				<p><h1><?php echo Html::img($image_path); ?></h1></p>
			</div>
			<p><h3><?php echo $content[$id]['overview']; ?></h3></p>
		</div>
<br />
<p>
<?php echo Html::anchor('users/content', '戻る', array('class' => 'btn btn-primary', 'style' => 'width: 95%; height: 45px;')); ?>
</p>