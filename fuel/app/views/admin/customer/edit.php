<h2>顧客更新</h2>
<br>

<?php echo render('admin/customer/_form'); ?>
<p>
	<?php echo Html::anchor('admin/customer/view/'.$customer->id, '詳細'); ?> |
	<?php echo Html::anchor('admin/customer', '戻る'); ?></p>
