<?php

class Model_Basicinfo extends \Orm\Model
{
	protected static $_table_name = 'basicinfo';

	protected static $_properties = array(
		'temponame',
		'telno',
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

	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_callable('Validation_Japanese');

		$val->add_field('temponame', '店舗名', 'max_length[50]');
		$val->add_field('telno', '電話番号', 'nozenkaku|max_length[15]');

		return $val;
	}
}
