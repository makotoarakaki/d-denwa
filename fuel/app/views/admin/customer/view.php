<h2>詳細 <span class='muted'></span></h2>

<p>
	<strong>顧客姓:</strong>
	<?php echo $customer->last_name; ?></p>
<p>
	<strong>顧客名:</strong>
	<?php echo $customer->firs_tname; ?></p>
<p>
	<strong>フリガナ姓:</strong>
	<?php echo $customer->ph_family_name; ?></p>
<p>
	<strong>フリガナ名:</strong>
	<?php echo $customer->ph_family_name; ?></p>
<p>
	<strong>性別:</strong>
	<?php echo $customer->sex; ?></p>
<p>
	<strong>担当者:</strong>
	<?php echo $customer->personname; ?></p>
<p>
	<strong>郵便番号:</strong>
	<?php echo $customer->post_code; ?></p>
<p>
	<strong>住所１:</strong>
	<?php echo $customer->adress1; ?></p>
<p>
	<strong>住所２:</strong>
	<?php echo $customer->adress2; ?></p>
<p>
	<strong>住所３:</strong>
	<?php echo $customer->adress3; ?></p>
<p>
	<strong>電話番号:</strong>
	<?php echo $customer->phone; ?></p>
<p>
	<strong>年齢:</strong>
	<?php echo $customer->age; ?></p>
<p>
	<strong>生年月日:</strong>
	<?php echo $customer->birthday; ?></p>
<p>
	<strong>メールアドレス:</strong>
	<?php echo $customer->mail; ?></p>
<!--
<p>
	<strong>最終来店日:</strong>
	<?php echo $customer->last_visit_date; ?></p>
<p>
-->
	<strong>備考:</strong>
	<?php echo $customer->biko; ?></p>
<!--<p>
	<strong>Create at:</strong>
	<?php echo $customer->created_at; ?></p>
<p>
	<strong>Update at:</strong>
	<?php echo $customer->updated_at; ?></p>-->

<?php echo Html::anchor('admin/customer/edit/'.$customer->id, '修正'); ?> |
<?php echo Html::anchor('admin/customer', '戻る'); ?>