<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('商品', 'itemname', array('class'=>'control-label')); ?>

				<?php echo Form::input('itemname', Input::post('itemname', isset($item) ? $item->itemname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'商品')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('単価', 'unit', array('class'=>'control-label')); ?>

				<?php echo Form::input('unit', Input::post('unit', isset($item) ? $item->unit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'単価')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('コメント', '', array('class'=>'control-label')); ?>

				<?php echo Form::input('comment', Input::post('comment', isset($item) ? $item->comment : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'コメント')); ?>

		</div>
		
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', '登録', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>