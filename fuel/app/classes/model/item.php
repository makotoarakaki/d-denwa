<?php

class Model_Item extends \Orm\Model
{
	protected static $_table_name = 'items';

	protected static $_properties = array(
		'id',
		'itemname',
		'unit',
		'comment',
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

		$val->add_field('itemname', '商品', 'required|max_length[50]');
		$val->add_field('unit', '単価', 'alphanum|max_length[10]');
		$val->add_field('comment', 'コメント', 'max_length[400]');

		return $val;
	}
}
