<h2>商品更新</h2>
<br>

<?php echo render('admin/item/_form'); ?>
<p>
	<?php echo Html::anchor('admin/item/view/'.$item->id, '詳細'); ?> |
	<?php echo Html::anchor('admin/item', '戻る'); ?></p>
