<h2>商品：<?php echo $item->itemname; ?></h2>

<p>
	<strong>商品</strong>
	<?php echo $item->itemname; ?></p>

	<strong>コメント</strong>
	<?php echo $item->comment; ?></p>

<?php echo Html::anchor('admin/item/edit/'.$item->id, '修正'); ?> |
<?php echo Html::anchor('admin/item', '戻る'); ?>