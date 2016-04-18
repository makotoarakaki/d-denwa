<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('担当者', 'personname', array('class'=>'control-label')); ?>

				<?php echo Form::input('personname', Input::post('personname', isset($person) ? $person->personname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'担当者')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('メールアドレス', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($person) ? $person->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'example@mail.com')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('コメント', '', array('class'=>'control-label')); ?>

				<?php echo Form::input('comment', Input::post('comment', isset($person) ? $person->comment : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'コメント')); ?>

		</div>
		
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', '登録', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>