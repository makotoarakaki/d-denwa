<h2>ユーザー：<?php echo $user->username; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $user->username; ?></p>
<p>
	<strong>Comment:</strong>
	<?php echo $user->email; ?></p>

<?php echo Html::anchor('admin/user/edit/'.$user->id, '修正'); ?> |
<?php echo Html::anchor('admin/user', '戻る'); ?>