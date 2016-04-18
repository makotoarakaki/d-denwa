<h2>担当者更新</h2>
<br>

<?php echo render('admin/person/_form'); ?>
<p>
	<?php echo Html::anchor('admin/person/view/'.$person->id, '詳細'); ?> |
	<?php echo Html::anchor('admin/person', '戻る'); ?></p>
