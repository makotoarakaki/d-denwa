<h2>顧客更新</h2>
<br>

<?php echo render('users/content/_form'); ?>
<p>
	<?php echo Html::anchor('users/content/view/'.$contents->id, 'プレビュー'); ?> |
	<?php echo Html::anchor('users/content', '戻る'); ?></p>
