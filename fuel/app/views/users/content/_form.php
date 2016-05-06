<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<?php echo Form::label('タイトル', 'title', array('class'=>'control-label')); ?>

					<?php echo Form::input('title', Input::post('title', isset($contents) ? $contents->title : ''), array('class' => 'form-control',  'placeholder' => 'タイトル')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="left-col-md-4 my-col-xs-7">
			<?php echo Form::label('概要：', 'overview', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('overview', Input::post('overview', isset($contents) ? $contents->overview : ''), array('class' => 'form-control', 'rows' => 6, 'cols' => 50, 'placeholder'=>'この欄は任意です。広告の概要等を入力して下さい。')); ?>

			</div>
		</div>
	</fieldset>
	<br />
	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', '保存', array('class' => 'btn btn-primary')); ?>		</div>
	</div>
<?php echo Form::close(); ?>