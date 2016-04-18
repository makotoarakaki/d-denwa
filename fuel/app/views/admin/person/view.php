<h2>担当者：<?php echo $person->personname; ?></h2>

<p>
	<strong>担当者</strong>
	<?php echo $person->personname; ?></p>
<p>
	<strong>メールアドレス</strong>
	<?php echo $person->email; ?></p>

	<strong>コメント</strong>
	<?php echo $person->comment; ?></p>

<?php echo Html::anchor('admin/person/edit/'.$person->id, '修正'); ?> |
<?php echo Html::anchor('admin/person', '戻る'); ?>