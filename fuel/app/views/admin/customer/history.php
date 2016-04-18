<h2>来店履歴</h2>
<?php if ($visithistorys): ?>
<!--<table class="table table-striped indexTable">-->
<table class="table table-striped indexTable">
	<thead>
		<tr>
			<th width="55">&nbsp;</th>
			<th width="90">来店日時</th>
			<th width="150">メニュー</th>
			<th width="80">金額</th>
			<th width="130">担当者</th>
			<th width="200">メモ</th>
		</tr>
	</thead>
	 <tbody>
<?php
	$visitdate = '';
	// テーブル（表）作成
	foreach ($visithistorys as $history): ?>		
		 <tr>
			<td width="55">
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('admin/customer/historyedit/'.$history->id, '<i class="icon-wrench"></i> 修正', array('class' => 'btn btn-default btn-sm')); ?>
					</div>
				</div>
			</td>
			<?php 
				if ($visitdate == $history->visitdate) {
			?>
					<td width="90"></td>
			<?php
				} else { 
			?>
					<td width="90"><?php echo date('Y年m月d日',strtotime($history->visitdate)).'('.$weekday[date('w', strtotime($history->visitdate))].')'; ?></td>
			<?php		
				}
				$visitdate = $history->visitdate;
			?>
			<td width="150"><?php echo $history->itemname; ?></td>
			<td width="80"><?php echo $history->amount; ?></td>
			<td width="130"><?php echo $history->personname; ?></td>
			<td width="200"><?php echo $history->memo; ?></td>
		</tr>
<?php endforeach; ?>	
	</tbody>
</table>

<!-- 「<<<< << 1 2 3 4 5 >> >>>>」 -->
<?php echo Pagination::create_links(); ?>
<?php else: ?>
<p><strong style="color:red">該当する履歴情報がありません。</strong></p>

<?php endif; ?>
<p>
	<?php echo Html::anchor('admin/customer', '戻る'); ?></p>

