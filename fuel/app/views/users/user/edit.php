<h2>ユーザー更新</h2>
<br>

<?php echo render('admin/user/_form'); ?>
<p>
	<?php echo Html::anchor('admin/user/view/'.$user->id, '詳細'); ?> |
	<?php echo Html::anchor('admin/user', '戻る'); ?></p>
