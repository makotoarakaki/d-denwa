<h2>広告一覧</h2>
<br>
<div class="row">
<?php if ($contents): ?>
<!--<table class="table table-striped indexTable">-->
<table class="table table-striped indexTable">
	<thead>
		<tr>
			<th width="55">&nbsp;</th>
			<th width="80">タイトル</th>
			<th width="130">更新日時</th>
		</tr>
	</thead>
	 <tbody>
<?php foreach ($contents as $item): ?>		<tr>

			<td width="55">
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('admin/customer/history/'.$item->id, '<i class="icon-eye-open"></i> 履歴', array('class' => 'btn btn-default btn-sm')); ?>							<?php echo Html::anchor('admin/customer/view/'.$item->id, '<i class="icon-eye-open"></i> 詳細', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('admin/customer/edit/'.$item->id, '<i class="icon-wrench"></i> 修正', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('admin/customer/delete/'.$item->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('本当に削除しますか?')")); ?>					</div>
				</div>
			</td>
			<td width="80"><?php echo $item->title; ?></td>
			<td width="130"><?php echo Date::forge($item->updated_at)->format("%Y/%m/%d %H:%M"); ?></td>
		</tr>
<?php endforeach; ?>	
	</tbody>
</table>
<!-- 「<<<< << 1 2 3 4 5 >> >>>>」 -->
<?php echo Pagination::create_links(); ?>
<?php else: ?>
<p><strong style="color:red">該当する情報がありません。</strong></p>

<?php endif; ?><p>


	<?php echo Html::anchor('users/content/create', '広告追加', array('class' => 'btn btn-success')); ?>

</p>
