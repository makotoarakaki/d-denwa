<?php

class Model_Daily extends \Orm\Model
{
	protected static $_table_name = 'dailys';

	protected static $_properties = array(
		'id',
		'no',
		'customerid',
		'customername',
		'personname',
		'datetime',
		'itemname',
//		'amount',
		'biko',
		'today',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);
	
	/*
	 * jqGrid用のリストデータ用に加工する。
	 * @param $data テーブルより取得したデータ
	 * @param $tablename テーブル名称
	 * @return 加工済みデータ
	 */
	public static function to_grid_list_data($data, $name) 
	{
		$retdata = '"';
		for ($i = 0; $i < count($data); $i++) {
			if (count($data) === $i+1) {
				$retdata .= $data[$i]['id'].':'.$data[$i][$name].'"';				
			} else {
				$retdata .= $data[$i]['id'].':'.$data[$i][$name].';';
			}
		}
		return $retdata;
	}
	
	/**
	 * jqGrid用のテーブルデータを作成する。
	 * @param array $array
	 * @return string
	 */
	public static function to_grid_table_data( array $array) {
		$result = '';
		for ($i = 0; $i < count($array); $i++)
		{
			$id = trim(str_replace("\r\n", "", $array[$i]['id']));
			$no = trim(str_replace("\r\n", "", $array[$i]['no']));
			$customer_id = trim(str_replace("\r\n", "", $array[$i]['customerid']));
			$customer_name = trim(str_replace("\r\n", "", $array[$i]['customername']));
			$person_name = trim(str_replace("\r\n", "", $array[$i]['personname']));
			$date = trim(str_replace("\r\n", "", $array[$i]['today']));
			$datetime = trim(str_replace("\r\n", "", $array[$i]['datetime']));
			$item_name = trim(str_replace("\r\n", "", $array[$i]['itemname']));
//			$amount = trim(str_replace("\r\n", "", $array[$i]['amount']));
			$biko = trim(str_replace("\r\n", "", $array[$i]['biko']));
			$result .= 
				'{no:"'.$no
				.'", id:"'.$id
				.'", customerid:"'.$customer_id
				.'", customername:"'.$customer_name
				.'", personname:"'.$person_name
				.'", date:"'.date('Y/m/d',strtotime($date))
				.'", datetime:"'.$datetime
				.'", itemname:"'.$item_name
//				.'", amount:"'.$amount
				.'", biko:"'.$biko				
				.'"}';
			// 最後のデータでなければカンマを付け足す
			if ($i < count($array) - 1)
			{
				$result .= ',';
			}		
		
		}
        return $result;
	}

}
