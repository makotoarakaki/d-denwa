<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
		'hostname'   => 'localhost',
			'port'       => '3306',
			'database'   => 'ddenwa',
			'username'   => 'moriguchi',
			'password'   => 'ara3678',		),
		'profiling' => true,
	),
   'user_db' => array(
		'connection'  => array(
		'hostname'   => 'localhost',
			'port'       => '3306',
			'database'   => 'ddenwa_user',
			'username'   => 'moriguchi',
			'password'   => 'ara3678',		),
		'profiling' => true,
    ),
);
