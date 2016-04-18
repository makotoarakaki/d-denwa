<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<?php $birth = Model_Customer::gengo(isset($customer) ? $customer->birthday : '');?>
	<script>
		$(function () {
			   // オプション
			var options = {
				language : "ja", // 日本語のフォーマットを指定
				autoclose: true  // 選択後close
			};
			$('.last_visit_date').datepicker(options);
			$('.last_visit_date').datepicker("setDate", Date());
		});
		$(function($) {
			$('#form_person_id').change(function() {
				var selectVal = "";
				$("#form_person_id option:selected").each(function () {
					selectVal += $(this).text() + " ";
				});
				$(':hidden[name="personname"]').val(selectVal);
 			});
		});
	</script>
	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', '登録', array('class' => 'btn btn-primary')); ?>		
	</div>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<?php echo Form::label('顧客姓', 'last_name', array('class'=>'control-label')); ?>

					<?php echo Form::input('last_name', Input::post('last_name', isset($customer) ? $customer->last_name : ''), array('class' => 'form-control',  'placeholder' => '山本')); ?>
			</div>
			<div class="col-md-4 col-xs-7">
				<?php echo Form::label('顧客名', 'firs_tname', array('class'=>'control-label')); ?>

					<?php echo Form::input('firs_tname', Input::post('firs_tname', isset($customer) ? $customer->firs_tname : ''), array('class' => 'form-control', 'placeholder'=>'太郎')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<?php echo Form::label('フリガナ姓', 'ph_family_name', array('class'=>'control-label')); ?>

					<?php echo Form::input('ph_family_name', Input::post('ph_family_name', isset($customer) ? $customer->ph_family_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'ヤマモト')); ?>

			</div>
			<div class="col-md-4 col-xs-7">
				<?php echo Form::label('フリガナ名', 'ph_name', array('class'=>'control-label')); ?>

					<?php echo Form::input('ph_name', Input::post('ph_name', isset($customer) ? $customer->ph_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'タロウ')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<?php echo Form::label('性別', 'sex', array('class'=>'control-label')); ?>&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo Form::label('男性', 'sex_1'); ?>
					<?php echo Form::radio('sex', 1,  isset($customer) ? $customer->sex != '0' && $customer->sex == '1' : '0', array('id' => 'sex_1')); ?>&nbsp;&nbsp;
					<?php echo Form::label('女性', 'sex_2'); ?>
					<?php echo Form::radio('sex', 2,  isset($customer) ? $customer->sex != '0' && $customer->sex == '2' : '0', array('id' => 'sex_2')); ?>
					<?php 
					?> 
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="left-col-md-4 my-col-xs-7">

			<?php echo Form::label('担当者', 'person_id', array('class'=>'control-label')); ?>
				<?php echo Form::select('person_id', Input::post('person_id', isset($customer) ? $customer->person_id : ''), $person_selects, array('class' => 'col-md-4 form-control')); ?>
				<?php echo Form::hidden('personname', isset($customer) && $person_selects[$customer->person_id] != 0 ? $person_selects[$customer->person_id] : ''); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-2 col-xs-7">
				<?php echo Form::label('郵便番号', 'post_code', array('class'=>'control-label')); ?>

					<?php echo Form::input('post_code', Input::post('post_code', isset($customer) ? $customer->post_code : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'999-9999')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
			<?php echo Form::label('住所１', 'adress1', array('class'=>'control-label')); ?>

				<?php echo Form::input('adress1', Input::post('adress1', isset($customer) ? $customer->adress1 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'沖縄県')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
			<?php echo Form::label('住所２', 'adress2', array('class'=>'control-label')); ?>

				<?php echo Form::input('adress2', Input::post('adress2', isset($customer) ? $customer->adress2 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'那覇市上間')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
			<?php echo Form::label('住所３', 'adress3', array('class'=>'control-label')); ?>

				<?php echo Form::input('adress3', Input::post('adress3', isset($customer) ? $customer->adress3 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'１丁目９９－９ メゾンオーズ 101')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-2 col-xs-7">
			<?php echo Form::label('電話番号', 'phone', array('class'=>'control-label')); ?>

				<?php echo Form::input('phone', Input::post('phone', isset($customer) ? $customer->phone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'090-999-9999')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-1 col-xs-7">
			<?php echo Form::label('年齢', 'age', array('class'=>'control-label')); ?>

				<?php echo Form::input('age', Input::post('age', isset($customer) ? $customer->age : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'27')); ?>			
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<?php echo Form::label('生年月日', 'gengo', array('class'=>'control-label')); ?>&nbsp;&nbsp;

					西暦&nbsp;<?php echo Form::radio('gengo', 'seireki', isset($customer) ? $customer->gengo != null && $customer->gengo == 'seireki' : '', array('id' => 'gengo_1')); ?>&nbsp;&nbsp;
					大正&nbsp;<?php echo Form::radio('gengo', 'taisho', isset($customer) ? $customer->gengo != null && $customer->gengo == 'taisho' : '', array('id' => 'gengo_2')); ?>&nbsp;&nbsp;
					昭和&nbsp;<?php echo Form::radio('gengo', 'showa', isset($customer) ? $customer->gengo != null && $customer->gengo == 'showa' : '', array('id' => 'gengo_3')); ?>&nbsp;&nbsp;
					平成&nbsp;<?php echo Form::radio('gengo', 'heisei', isset($customer) ? $customer->gengo != null && $customer->gengo == 'heisei' : '', array('id' => 'gengo_4')); ?>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="left-col-md-4 my-col-xs-7">
				<?php echo Form::input('birthday_year',Input::post('birthday_year', isset($customer) ? $customer->birthday_year : ''),array('class' => 'col-md-3 form-control'));?>
			</div>
			<div class="box-left">
				年&nbsp;&nbsp;
			</div>
			<div class="left-col-md-4 my-col-xs-7">
				<?php echo Form::input('birthday_month',Input::post('birthday_month', isset($customer) ? $customer->birthday_month : ''),array('class' => 'col-md-3 form-control'));?>
			</div>
			<div class="box-left">
				月&nbsp;&nbsp;
			</div>
			<div class="left-col-md-4 my-col-xs-7">
				<?php echo Form::input('birthday_day',Input::post('birthday_day', isset($customer) ? $customer->birthday_day : ''),array('class' => 'col-md-3 form-control'));?>
			</div
			<div class="box-left">
				日&nbsp;&nbsp;
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="form-group">
			<div class="col-md-4 col-xs-7">
				<?php echo Form::label('メールアドレス', 'mail', array('class'=>'control-label')); ?>

					<?php echo Form::input('mail', Input::post('mail', isset($customer) ? $customer->mail : ''), array('class' => 'col-md-4 col-xs-7 form-control', 'placeholder'=>'example@mail.com')); ?>
			</div>
		</div>
	</fieldset>
<!--
	<fieldset>
		<div class="form-group">
			<div class="left-col-md-4 my-col-xs-7">
			<?php echo Form::label('最終来店日', 'last_visit_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('last_visit_date', Input::post('last_visit_date', isset($customer) ? $customer->last_visit_date : ''), array('class' => 'last_visit_date col-md-4 form-control', 'placeholder'=>'2015/10/13')); ?>

			</div>
		</div>
	</fieldset>
-->
	<fieldset>
		<div class="form-group">
			<div class="left-col-md-4 my-col-xs-7">
			<?php echo Form::label('備考：', 'biko', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('biko', Input::post('biko', isset($customer) ? $customer->biko : ''), array('class' => 'form-control', 'rows' => 6, 'cols' => 50, 'placeholder'=>'備考')); ?>

			</div>
		</div>
	</fieldset>
	<br />
	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', '登録', array('class' => 'btn btn-primary')); ?>		</div>
	</div>
<?php echo Form::close(); ?>