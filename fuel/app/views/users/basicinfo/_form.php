<?php echo Form::open('users/basicinfo/create', array("class"=>"form-horizontal")); ?>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<h2>ユーザー名</h2>
				<?php echo Form::hidden('username', $current_user->username); ?>
				<h3><?php echo Form::label($current_user->username); ?></h3>
			</div>
		</div>
	</fieldset>
    <fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<h2>店舗名</h2>
					<?php echo Form::input('temponame', Input::post('temponame', isset($info) ? $info->temponame : ''), array('class' => 'form-control')); ?>
			</div>
		</div>
	</fieldset>
    <fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<h2>電話番号</h2>
					<?php echo Form::input('telno', Input::post('telno', isset($info) ? $info->telno : ''), array('class' => 'form-control', 'type'=>'tel')); ?>
			</div>
		</div>
	</fieldset>
	<br />
	<div class="form-group centered">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', '保存', array('class' => 'btn btn-primary')); ?>&nbsp;&nbsp;
		<?php echo Html::anchor('users/basicinfo', 'キャンセル', array('class' => 'btn btn-danger')); ?>

	</div>
<?php echo Form::close(); ?>