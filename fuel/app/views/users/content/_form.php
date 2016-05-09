<?php echo Form::open(array("class"=>"form-horizontal", "enctype"=>"multipart/form-data")); ?>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<h2>タイトル</h2>
					<?php echo Form::input('title', Input::post('title', isset($contents) ? $contents->title : ''), array('class' => 'form-control',  'placeholder' => 'タイトル')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<h2>画像</h2>
				<?php echo Form::file('upload' , array('class' => 'btn btn-primary')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
			<h2>概要</h2>
				<?php echo Form::textarea('overview', Input::post('overview', isset($contents) ? $contents->overview : ''), array('class' => 'form-control', 'rows' => 6, 'cols' => 50, 'placeholder'=>'この欄は任意です。広告の概要等を入力して下さい。')); ?>

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