<h2>商品一覧</h2>
<br>
<?php if ($items): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>商品名</th>
			<th>単価</th>
			<th>コメント</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($items as $item): ?>		<tr>

			<td><?php echo $item->itemname; ?></td>
			<td><?php echo $item->unit; ?></td>
			<td><?php echo $item->comment; ?></td>
			<td>
				<?php echo Html::anchor('admin/item/view/'.$item->id, '<i class="icon-eye-open"></i> 詳細', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('admin/item/edit/'.$item->id, '<i class="icon-wrench"></i> 修正', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('admin/item/delete/'.$item->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('本当に削除しますか?')")); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>該当する担当者情報がありません。</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/item/create', '商品追加', array('class' => 'btn btn-success')); ?>

</p>
