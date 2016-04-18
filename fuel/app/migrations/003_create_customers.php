<?php

namespace Fuel\Migrations;

class Create_customers
{
	public function up()
	{
		\DBUtil::create_table('customers', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'last_name' => array('constraint' => 50, 'type' => 'varchar'),
			'firs_tname' => array('constraint' => 50, 'type' => 'varchar'),
			'ph_family_name' => array('constraint' => 50, 'type' => 'varchar'),
			'ph_name' => array('constraint' => 50, 'type' => 'varchar'),
			'sex' => array('constraint' => 1, 'type' => 'int'),
			'post_code' => array('constraint' => 10, 'type' => 'varchar'),
			'adress1' => array('constraint' => 50, 'type' => 'varchar'),
			'adress2' => array('constraint' => 50, 'type' => 'varchar'),
			'adress3' => array('constraint' => 50, 'type' => 'varchar'),
			'phone' => array('constraint' => 15, 'type' => 'varchar'),
			'age' => array('constraint' => 2, 'type' => 'INT'),
			'birthday' => array('constraint' => 15, 'type' => 'varchar'),
			'mail' => array('constraint' => 50, 'type' => 'varchar'),
			'person_id' => array('constraint' => 11, 'type' => 'INT'),
			'person' => array('constraint' => 50, 'type' => 'varchar'),
			'last_visit_date' => array('constraint' => 11, 'type' => 'INT'),
			'biko' => array('constraint' => 500, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('customers');
	}
}