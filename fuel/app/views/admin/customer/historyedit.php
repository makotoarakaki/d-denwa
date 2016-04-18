<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	<fieldset>
		<div class="form-group">
			<div class="left-col-md-4 my-col-xs-7">
			<?php echo Form::label('メモ：', 'biko', array('class'=>'control-label')); ?>
				<?php echo Form::hidden('customerid', isset($history) ? $history->customerid : ''); ?>
				<?php echo Form::textarea('memo', Input::post('memo', isset($history) ? $history->memo : ''), array('class' => 'form-control', 'rows' => 6, 'cols' => 50, 'placeholder'=>'メモ')); ?>
				<a href="../../../classes/controller/admin/customer.php"></a>

			</div>
		</div>
	</fieldset>
	<br />
	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', '登録', array('class' => 'btn btn-primary')); ?>		</div>
	</div>
<?php echo Form::close(); ?>
<p>
	<?php echo Html::anchor('admin/customer/history/'.$history->customerid, '戻る'); ?></p>
