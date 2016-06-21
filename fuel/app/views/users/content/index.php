<script>
window.onload = function(){

		$('.gender :radio').rcSwitcher({

		// reverse: true,
		theme: 'light',
		// width: 70,
		blobOffset: 0,
		// inputs: true,
		autoStick: true,

		})
		// Listen to status changes
		.on( 'turnon.rcSwitcher', function( e, data ){
			//POSTメソッドで送るデータを定義します var flg = {パラメータ名 : 値};
//alert($('input[name=mainflg]:checked').val());
			var flg = {request : $('input[name=mainflg]:checked').val()};
			/**
			 * Ajax通信メソッド
			 * @param type  : HTTP通信の種類
			 * @param url   : リクエスト送信先のURL
			 * @param flg  : サーバに送信する値
			 */
			$.ajax({
				type: "POST",
				url: '<?php echo Uri::current(); ?>' + '/mainflg',
				data: flg,
				/**
				 * Ajax通信が成功した場合に呼び出されるメソッド
				 */
				success: function(flg, dataType)
				{
					//successのブロック内は、Ajax通信が成功した場合に呼び出される

				},
				/**
				 * Ajax通信が失敗した場合に呼び出されるメソッド
				 */
				error: function(XMLHttpRequest, textStatus, errorThrown)
				{
					//通常はここでtextStatusやerrorThrownの値を見て処理を切り分けるか、単純に通信に失敗した際の処理を記述します。

					//this;
					//thisは他のコールバック関数同様にAJAX通信時のオプションを示します。

					//エラーメッセージの表示
					alert('Error : ' + errorThrown);
				}
			});
			console.log( data.$input[0].checked );

		} );
	};
</script>

<h2>広告一覧</h2>
<br>
<p>
	<?php echo Html::anchor('users/content/create', '広告追加', array('class' => 'btn btn-primary', 'style' => 'width: 100%; height: 45px;')); ?>
</p>

<div class="row">
<?php if ($contents): ?>
<!--<table class="table table-striped indexTable">-->
<table class="table table-striped indexTable">
	<thead>
		<tr>
			<th width="55">&nbsp;</th>
			<th width="80">タイトル</th>
			<th width="500">イメージ</th>
			<th width="130">更新日時</th>
		</tr>
	</thead>
	 <tbody>
<?php foreach ($contents as $item): ?>		<tr>

			<td width="55">
				<div class="btn-toolbar">
					<div class="btn-group">
							<?php echo Html::anchor('users/content/view/'.$item->id, '<i class="icon-eye-open"></i> プレビュー', array('class' => 'btn btn-default btn-sm', 'style' => 'margin-bottom: 5px')); ?>						<?php echo Html::anchor('users/content/edit/'.$item->id, '<i class="icon-wrench"></i> 修正', array('class' => 'btn btn-default btn-sm', 'style' => 'margin-bottom: 5px')); ?>						<?php echo Html::anchor('users/content/delete/'.$item->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('本当に削除しますか?')")); ?>
						<div class="gender block">
							<input type="radio" name="mainflg" id="main" value="<?php echo $item->id; ?>" <?php if ($item->mainflg == 1) {?> checked="checked" <?php } ?> onclick="setid('<?php echo $item->id; ?>');"><br />
						</div>
					
					</div>
				</div>
			</td>
			<td width="80"><?php echo $item->title; ?></td>
			<?php 
				//ファイル名取得
				$filename = $item->filename;
				if (!empty($filename)) {
				// 保存先よろファイル名を取得
					$image_path = \File::get(DOCROOT.'/uploads/'.$filename);
					$url = $image_path->get_path();	
			?>
					<td width="500"><?php echo Html::img($url, array('class' => 'thumbnail')); ?></td>
			<?php
				} else {
			?>
					<td width="500"><h4>画像がありません。</h4></td>
			<?php
				}
			?>
			<td width="130"><?php echo Date::forge($item->created_at)->format("%Y-%m-%d %H:%M:%S"); ?></td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>
<!-- 「<<<< << 1 2 3 4 5 >> >>>>」 -->
<?php echo Pagination::create_links(); ?>
<?php else: ?>
<p><strong style="color:red">該当する情報がありません。</strong></p>

<?php endif; ?><p>

<p>
	<?php echo Html::anchor('users/content/create', '広告追加', array('class' => 'btn btn-primary', 'style' => 'width: 100%; height: 45px;')); ?>
</p>

