<h2>ユーザー一覧</h2>
<br>
<?php if ($users): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ユーザー名</th>
			<th>メールアドレス</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->email; ?></td>
			<td>
				<?php echo Html::anchor('admin/user/view/'.$item->id, '<i class="icon-eye-open"></i> 詳細', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('admin/user/edit/'.$item->id, '<i class="icon-wrench"></i> 修正', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('admin/user/delete/'.$item->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('本当に削除しますか?')")); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>該当するユーザー情報がありません。</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/user/create', '担当者追加', array('class' => 'btn btn-success')); ?>

</p>
