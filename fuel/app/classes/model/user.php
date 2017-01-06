<?php

class Model_User extends \Orm\Model
{
	protected static $_table_name = 'users';

	protected static $_properties = array(
		'id',
		'username',
		'password',
		'count',
		'group',
		'email',
		'last_login',
		'login_hash',
		'profile_fields',
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

		$val->add_field('username', 'ユーザーID', 'alphanum|required|max_length[50]');
		$val->add_field('password', 'パスワード', 'required|max_length[255]');
		$val->add_field('email', 'メールアドレス', 'required|valid_email|max_length[50]');
		$val->add_field('group', 'グループ', 'required');

		return $val;
	}
}
