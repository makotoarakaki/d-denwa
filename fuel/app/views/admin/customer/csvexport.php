<script>
$(function() {
  $('#all_check').on("click",function(){
    $('.list').prop("checked", $(this).prop("checked"));
  });
});
</script>
<h2>顧客一覧</h2>
<br>
<div class="row">
<?php echo Form::open(array('action' => 'admin/customer/csvexport', 'method' => 'post')); ?>
	<div class="form-group col-xs-2">
				<?php echo Form::select('search_person', Input::post('search_person', isset($customer) ? $customer->person_id : ''), $person_selects, array('class' => 'col-md-4 form-control')); ?>
	</div>
	<div class="form-group col-xs-1">
		<button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>検索</button>
	</div>
<?php echo Form::close(); ?>
</div>

<p>
	<?php echo Html::anchor('admin/customer', '戻る'); ?></p>
	<?php
		$param = '';
		$page = \Input::get('page');
		if (isset($page)) {
			$param = '?page='.\Input::get('page');
		}
	?>

<?php echo Form::open(array('action' => 'admin/customer/tocsv', 'method' => 'post')); ?>
	<?php echo Form::hidden('hsearch_person', Input::post('search_person', isset($customer) ? $customer->person_id : '')); ?>
	<button class="btn btn-success">CSV出力</button>
<?php if ($customers): ?>
<!--<table class="table table-striped indexTable">-->
<table class="table table-striped indexTable">
	<thead>
		<tr>
			<th width="55"><?php echo Form::checkbox('all_check', '', array('id'=>'all_check')); ?></th>
			<th width="80">顧客姓</th>
			<th width="80">顧客名</th>
			<th width="80">フリガナ姓</th>
			<th width="80">フリガナ名</th>
			<th width="30">性別</th>
			<th width="130">担当者</th>
			<th width="80">郵便番号</th>
			<th width="130">住所１</th>
			<th width="130">住所２</th>
			<th width="130">住所３</th>
			<th width="130">電話番号</th>
			<th width="30">年齢</th>
			<th width="130">生年月日</th>
			<th width="130">メールアドレス</th>
			<th width="130">最終来店日</th>
			<th width="130">備考</th>
<!--			<th>作成日時</th>-->
			<th width="130">更新日時</th>
		</tr>
	</thead>
	 <tbody>
<?php foreach ($customers as $item): ?>		<tr>

			<td width="55">
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Form::checkbox('select[]', $item->id, array('class'=>'list')); ?>
					</div>
				</div>
			</td>
			<td width="80"><?php echo $item->last_name; ?></td>
			<td width="80"><?php echo $item->firs_tname; ?></td>
			<td width="80"><?php echo $item->ph_family_name; ?></td>
			<td width="80"><?php echo $item->ph_name; ?></td>
			<?php
				if(isset($item)) {
					$sex = '';
					if (isset($item->sex)) {
						if ($item->sex === '1') {
							$sex = '男';
						} else if ($item->sex === '2'){
							$sex = '女';						
						}						
					}
				}
			?>
			<td width="30"><?php echo $sex; ?></td>
			<td width="130"><?php echo $item->personname; ?></td>
			<td width="80"><?php echo $item->post_code; ?></td>
			<td width="130"><?php echo $item->adress1; ?></td>
			<td width="130"><?php echo $item->adress2; ?></td>
			<td width="130"><?php echo $item->adress3; ?></td>
			<td width="130"><?php echo $item->phone; ?></td>
			<td width="30"><?php echo $item->age; ?></td>
			<td width="130"><?php echo $item->birthday; ?></td>
			<td width="130"><?php echo $item->mail; ?></td>
			<td width="130"><?php echo $item->last_visit_date; ?></td>
			<td width="130"><?php echo $item->biko; ?></td>
			<td width="130"><?php echo Date::forge($item->updated_at)->format("%Y/%m/%d %H:%M"); ?></td>
		</tr>
<?php endforeach; ?>	
	</tbody>
</table>
<!-- 「<<<< << 1 2 3 4 5 >> >>>>」 -->
<?php echo Pagination::create_links(); ?>

<?php else: ?>
<p><strong style="color:red">該当する顧客情報がありません。</strong></p>

<?php endif; ?><p>


	<button class="btn btn-success">CSV出力</button>
</p>
<p>
	<?php echo Html::anchor('admin/customer', '戻る'); ?></p>
<?php echo Form::close(); ?>

