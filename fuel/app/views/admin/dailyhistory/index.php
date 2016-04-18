<script type="text/javascript">
	var param = '';
    $(function() {
	// オプション
	 var options = {
		 language : "ja", // 日本語のフォーマットを指定
		 autoclose: true  // 選択後close
	 };
	 $('#serchdate').datepicker(options);
//	 $('#serchdate').datepicker("setDate", Date());

        $("input:submit, a, button", ".toolbar").button();
        
        // フォームのフィールド検査
        function checkLength(o, min, max) {
            if (o.length > max || o.length < min) {
                return false;
            }
            return true;
        }

        // グリッド内の各フィールドデータの検査
        function checkFields(postdata) {
            var success = true;
            var message = "保存します。";

            // ポストされるデータは配列で渡されます。
            var customer_name = postdata['customername'];
            success = checkLength(customer_name, 1, 50);
            if (!success) {
                message = "顧客名は 1 ～ 50 文字で入力してください。";
                return[success,message];
            }
 
		    var date = postdata['date'];
            success = checkLength(date, 0, 10);
            if (!success) {
                message = "月日は 0 ～ 10 文字で入力してください。";
                return[success,message];
            }

			var biko = postdata['biko'];
            success = checkLength(biko, 0, 50);
            if (!success) {
                message = "備考は 0 ～ 50 文字で入力してください。";
                return[success,message];
            }
            // 検査結果を配列[boolean,string]で返します。
            return[success,message];
        }
        
        // 追加ボタンのイベントハンドラー
        $("#newuser").click(function() {
//			param = '?param=add';
            jQuery("#list").jqGrid('editGridRow',"new",{
                height:'auto',
                modal:true,                                 // モーダル表示にします。
                addCaption:"追加",                          // フォームのキャプションを設定
                bSubmit:"保存",                             // フォーム内に表示する確定ボタンのキャプション
                bCancel:"キャンセル",                       // フォーム内に表示する取消ボタンのキャプション
                reloadAfterSubmit:false,                    // cellsubmit: 'clientArray'なのでサブミット後データを再読み込みしない
				afterShowForm:function(){                // 時間設定のtimepickerを呼び出す
					// オプション
					 var options = {
						 language : "ja", // 日本語のフォーマットを指定
						 autoclose: true  // 選択後close
					 };
					 $('#date').datepicker(options);
					 $('#date').datepicker("setDate", Date());
					 $("#datetime").timepicker();
				},
                beforeSubmit:function(postdata, formid) {
					postdata['param'] = 'add';
                    // 確定直前のイベント処理
                    // 入力データのチェックをします。
                    // 配列[boolean,string]を返します。
                    return checkFields(postdata);
                },
                afterComplete:function(response, postdata, formid) {
					location.reload();
                    // 追加が完了した時のイベント処理
					//  alert("ポストされた内容:\n" + response.responseText);
                }
            });
            return false;
        });

        // 編集ボタンのイベントハンドラー
        $("#edituser").click(function() {
//			param = '?param=edit';
            var rowid = jQuery("#list").jqGrid('getGridParam','selrow');
            if (rowid != null) {
                jQuery("#list").jqGrid('editGridRow',rowid,{
                    height:'auto',
                    modal:true,                             // モーダル表示にします。
                    editCaption:"編集",                     // フォームのキャプションを設定
                    bSubmit:"更新",                         // フォーム内に表示する確定ボタンのキャプション
                    bCancel:"キャンセル",                   // フォーム内に表示する取消ボタンのキャプション
                    reloadAfterSubmit:false,                // cellsubmit: 'clientArray'なのでサブミット後データを再読み込みしない
					afterShowForm:function(){            // 時間設定のtimepickerを呼び出す
						// オプション
						 var options = {
							 language : "ja", // 日本語のフォーマットを指定
							 autoclose: true  // 選択後close
						 };
						 $('#date').datepicker(options);
						 $('#date').datepicker("setDate", Date());
						 $("#datetime").timepicker();
					},
                    beforeSubmit:function(postdata, formid) {
						postdata['param'] = 'edit';
                        // 確定直前のイベント処理
                        // 入力データのチェックをします。
                        // 配列[boolean,string]を返します。
//                        alert("ポストされた内容:\n" + postdata.personname.text());
                        return checkFields(postdata);
                    },
                    afterComplete:function(response, postdata, formid) {
	 					location.reload();
                    }
                });
            } else {
                alert("編集するデータを選択してください。");
            }
            return false;
        });

        // 削除ボタンのイベントハンドラー
        $("#deluser").click(function() {
		　　param = '?param=delete';
           var rowid = jQuery("#list").jqGrid('getGridParam','selrow');

            if (rowid != null) {
                jQuery("#list").jqGrid('delGridRow',rowid,{
                    modal:true,                             // モーダル表示にします。
                    caption:"削除",                         // フォームのキャプションを設定
                    msg:"選択したデータを削除しますか？",   // フォーム内に表示するメッセージ
                    bSubmit:"はい",                         // フォーム内に表示する確定ボタンのキャプション
                    bCancel:"いいえ",                       // フォーム内に表示する取消ボタンのキャプション
                    reloadAfterSubmit:false,                // cellsubmit: 'clientArray'なのでサブミット後データを再読み込みしない
                    afterComplete:function(response, postdata, formid) {
                        // 削除が完了した時のイベント処理
                    }
                });
            } else {
                alert("削除するデータを選択してください。");
            }
            return false;
        });
    });

    jQuery(document).ready(function()
    {
		var url = '<?php echo Uri::current(); ?>' + '/create' + param;
		var mydata = [
			<?php echo isset($daily_data) ? $daily_data : "";?>
        ];
        jQuery("#list").jqGrid({
            data: mydata,
            datatype: "local",
			mtype:"POST",
            colNames:['No.', 'ID', '顧 客 名', '担 当 者', '月 日', '時 間', 'メ ニ ュー', '金 額', 'メ モ'],
            colModel:[ {index:'no', name:'no', width: '80', align: 'center', editable:false },
				       {index:'id', name:'id', hidden:true, editrules:{ edithidden:true, editable:false }},
                       {index:'customername', name:'customername', width: '250', editable:true, editoptions:{maxlength:50} },
                       {index:'personname', name:'personname', width: '250', 
						editable:true, edittype:"select", editoptions:{value:<?php echo isset($person_data) ? $person_data : "";?>} },
                       {index:'date', name:'date', width: '160', align: 'center', editable:true, editoptions:{maxlength:10} },
                       {index:'datetime', name:'datetime', width: '160', align: 'center', editable:true },
                       {index:'itemname', name:'itemname', width: '250', 
                        editable:true, edittype:"select", editoptions:{value:<?php echo isset($item_data) ? $item_data : "";?>} },
				       {index:'amount', name:'amount', hidden:true, editrules:{ edithidden:true, editable:false }},
                       {index:'biko', name:'biko', width: '250', editable:true, editoptions:{maxlength:50} },
                      ],
            width: 950,
//			height: 'auto',
			height: 205,
 			cellEdit: false,                // false: セルの直接編集はしない
            cellsubmit: 'clientArray',
            editurl: url,  // 編集内容をサーバーへポストします
            rowNum: 10,
			rowList : [10, 15, 20, 25, 30],
//            scroll:true,
//            sortname: 'no',
//            sortorder: "ASC",
            multiselect: false,             // false: 単一選択
			pager : 'pager1',              //footerのページャー要素のid
            regional : 'ja',               //日本語
            shrinkToFit : true,       //画面サイズに依存せず固定の大きさを表示する設定
            viewrecords: true, 
            caption: '製品一覧'
        }); 
    });
</script>
<?php echo Form::open(array("class"=>"form-inline")); ?>
<table id="list">
<div class="row">
	<div class="form-group col-xs-2">
		<?php echo Form::input('searchdate', Input::post('searchdate', isset($searchdate) ? $searchdate : ''), array('class' => 'form-control', 'id' => 'serchdate')); ?>
	</div>
	<div class="form-group col-xs-1">
		<button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>検索</button>
	</div>
</div><br>
</table>
<?php echo Form::close(); ?>
<div id="pager1"></div>
<!--	
	<div class="toolbar">
		<button id="newuser" class="btn btn-primary">新規</button>&nbsp;
		<button id="edituser" class="btn btn-primary">編集</button>&nbsp;
		<button id="deluser" class="btn btn-primary">削除</button>
		<?php echo Html::anchor('admin/daily/search', '検索', array('class' => 'btn btn-success', 'style' => 'margin-left: 40px;')); ?>
	</div>
-->
