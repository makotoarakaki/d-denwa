<h2>担当者一覧</h2>
<br>
<?php if ($persons): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ユーザー名</th>
			<th>メールアドレス</th>
			<th>コメント</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($persons as $item): ?>		<tr>

			<td><?php echo $item->personname; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->comment; ?></td>
			<td>
				<?php echo Html::anchor('admin/person/view/'.$item->id, '<i class="icon-eye-open"></i> 詳細', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('admin/person/edit/'.$item->id, '<i class="icon-wrench"></i> 修正', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('admin/person/delete/'.$item->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('本当に削除しますか?')")); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>該当する担当者情報がありません。</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/person/create', '担当者追加', array('class' => 'btn btn-success')); ?>

</p>
