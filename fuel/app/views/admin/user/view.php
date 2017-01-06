<h2>ユーザー：<?php echo $user->username; ?></h2>

<p>
	<strong>お名前</strong>
	<?php echo $user->username; ?></p>
<p>
	<strong>メールアドレス</strong>
	<?php echo $user->email; ?></p>
<p>
	<strong>コース</strong>
	<?php echo $user->count; ?></p>

<?php echo Html::anchor('admin/user/edit/'.$user->id, '修正'); ?> |
<?php echo Html::anchor('admin/user', '戻る'); ?>