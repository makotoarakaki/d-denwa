<?php

class Model_Visithistory extends \Orm\Model
{
	protected static $_table_name = 'visithistorys';

	protected static $_properties = array(
		'id',
		'dailyid',
		'customerid',
		'customername',
		'visitdate',
		'itemname',
		'amount',
		'personname',
		'memo',
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
	
	public static function validate($factory, $data)
	{
		$val = Validation::forge($factory);
		$val->add_callable('Validation_Japanese');
		$val->add_callable('Validation_Util');

		$val->add_field('memo', 'メモ', 'max_length[500]');

		return $val;
	}

}
