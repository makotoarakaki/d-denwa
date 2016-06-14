<?php echo Form::open(array("class"=>"form-horizontal", "enctype"=>"multipart/form-data")); ?>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<h2>タイトル</h2>
					<?php echo Form::input('title', Input::post('title', isset($contents) ? $contents[0]['title'] : ''), array('class' => 'form-control',  'placeholder' => 'タイトル')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<h2>画像</h2>
			<?php 
				//ファイル名取得
				if (!empty($contents[0]['filename'])) {
					$filename = $contents[0]['filename'];
					// 保存先よろファイル名を取得
					$image_path = \File::get(DOCROOT.'/uploads/'.$filename);
					$url = $image_path->get_path();
					echo Form::hidden('filename', $filename);
			?>
					<?php echo Html::img($url, array('class' => 'thumbnail')); ?>
				<p><?php echo Html::anchor('users/content/image_delete/'.$contents[0]['id'], '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('この画像を本当に削除しますか?')")); ?></p>
			

			<?php
				
				}
				echo Form::file('upload' , array('class' => 'btn btn-primary')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
			<h2>概要</h2>
				<?php echo Form::textarea('overview', Input::post('overview', isset($contents) ? $contents[0]['overview'] : ''), array('class' => 'form-control', 'rows' => 6, 'cols' => 50, 'placeholder'=>'この欄は任意です。広告の概要等を入力して下さい。')); ?>

			</div>
		</div>
	</fieldset>
	<br />
	<div class="form-group centered">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', '保存', array('class' => 'btn btn-primary')); ?>&nbsp;&nbsp;
		<?php echo Html::anchor('users/content', 'キャンセル', array('class' => 'btn btn-danger')); ?>

	</div>
<?php echo Form::close(); ?>