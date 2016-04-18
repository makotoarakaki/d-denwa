<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

INFO - 2015-10-06 20:56:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-06 20:56:03 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-06 20:56:03 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-06 20:56:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-06 20:56:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-06 20:56:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-06 20:56:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-06 20:56:12 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-06 20:56:12 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-06 20:56:13 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/form"
INFO - 2015-10-06 20:56:13 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-06 20:56:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
ERROR - 2015-10-06 20:56:17 --> Error - File "C:/Users/USER/custumersys/cm0001/fuel/app/classes/controller/admin/customer.php" does not contain class "Controller_Admin_Customer" in C:\Users\USER\custumersys\cm0001\fuel\core\classes\autoloader.php on line 395
INFO - 2015-10-06 20:57:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-06 20:57:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-06 20:57:26 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-10-06 20:57:27 --> 1146 - Table 'cm0001_dev.cm_customers' doesn't exist [ SELECT `cm_t0`.`id` AS `t0_c0`, `cm_t0`.`last_name` AS `t0_c1`, `cm_t0`.`firs_tname` AS `t0_c2`, `cm_t0`.`ph_family_name` AS `t0_c3`, `cm_t0`.`sex` AS `t0_c4`, `cm_t0`.`adress1` AS `t0_c5`, `cm_t0`.`adress2` AS `t0_c6`, `cm_t0`.`adress3` AS `t0_c7`, `cm_t0`.`phone` AS `t0_c8`, `cm_t0`.`age` AS `t0_c9`, `cm_t0`.`birthday` AS `t0_c10`, `cm_t0`.`mail` AS `t0_c11`, `cm_t0`.`person_id` AS `t0_c12`, `cm_t0`.`person` AS `t0_c13`, `cm_t0`.`last_visit_date` AS `t0_c14`, `cm_t0`.`biko` AS `t0_c15`, `cm_t0`.`create_at` AS `t0_c16`, `cm_t0`.`update_at` AS `t0_c17`, `cm_t0`.`created_at` AS `t0_c18`, `cm_t0`.`updated_at` AS `t0_c19` FROM `cm_customers` AS `cm_t0` ] in C:\Users\USER\custumersys\cm0001\fuel\core\classes\database\mysqli\connection.php on line 290
