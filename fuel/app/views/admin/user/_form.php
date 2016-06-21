<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('ユーザーID', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'userID')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('パスワード', 'password', array('class'=>'control-label')); ?>

				<?php echo Form::password('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('メールアドレス', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'example@mail.com')); ?>
		</div>
		<div class="form-group">
					<?php echo Form::label('ユーザー', 'group_1'); ?>
					<?php echo Form::radio('group', 1,  isset($user) ? $user->group != '0' && $user->group == '1' : '0', array('id' => 'group_1')); ?>&nbsp;&nbsp;
					<?php echo Form::label('管理者', 'group_2'); ?>
					<?php echo Form::radio('group', 100,  isset($user) ? $user->group != '0' && $user->group == '100' : '0', array('id' => 'group_2')); ?>
					<?php 
					?> 
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', '登録', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>