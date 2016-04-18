<?php

class Model_Person extends \Orm\Model
{
	protected static $_table_name = 'persons';

	protected static $_properties = array(
		'id',
		'personname',
		'email',
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

		$val->add_field('personname', '担当者', 'required|max_length[50]');
		$val->add_field('email', 'メールアドレス', 'nozenkaku|valid_email|max_length[50]');
		$val->add_field('comment', 'コメント', 'max_length[400]');

		return $val;
	}
}
