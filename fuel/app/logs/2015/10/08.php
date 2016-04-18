<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

INFO - 2015-10-08 16:55:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "form"
INFO - 2015-10-08 16:55:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:55:00 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 16:55:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "form/confirm"
INFO - 2015-10-08 16:55:23 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:55:23 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-10-08 16:55:23 --> Fatal Error - Call to undefined method Controller_Form::get_form() in C:\Users\USER\custumersys\cm0001\fuel\app\classes\controller\form.php on line 72
INFO - 2015-10-08 16:56:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 16:56:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:56:22 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 16:56:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-08 16:56:23 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:56:23 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 16:56:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-08 16:56:30 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:56:30 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 16:56:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 16:56:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:56:31 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 16:56:32 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 16:56:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:56:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/form"
INFO - 2015-10-08 16:56:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:56:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 16:56:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/form/create"
INFO - 2015-10-08 16:56:40 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:56:40 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 16:59:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/form/create"
INFO - 2015-10-08 16:59:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:59:24 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 16:59:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/form"
INFO - 2015-10-08 16:59:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 16:59:26 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 17:07:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 17:07:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:07:58 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 17:08:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 17:08:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:08:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 17:10:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 17:10:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:10:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-10-08 17:10:28 --> Notice - Field with this name exists already in this fieldset: "ph_family_name". in C:\Users\USER\custumersys\cm0001\fuel\core\classes\validation.php on line 654
INFO - 2015-10-08 17:11:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 17:11:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:11:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-10-08 17:11:46 --> Notice - Field with this name exists already in this fieldset: "ph_family_name". in C:\Users\USER\custumersys\cm0001\fuel\core\classes\validation.php on line 654
ERROR - 2015-10-08 17:11:46 --> 1048 - Column 'person_id' cannot be null [ INSERT INTO `cm_customers` (`last_name`, `firs_tname`, `ph_family_name`, `sex`, `adress1`, `adress2`, `adress3`, `phone`, `age`, `birthday`, `mail`, `person_id`, `person`, `last_visit_date`, `biko`, `create_at`, `update_at`, `created_at`, `updated_at`) VALUES ('まこと', 'たろう', 'タロウ', '2', '沖縄県', '南風原町字', '３－２－４　○○１０１', '09800003333', '31', '1974/04/19', 'info@mmm', null, '当山', '2015/10/18', 'あああああああああああああああああああ', null, null, 1444291906, 1444291906) ] in C:\Users\USER\custumersys\cm0001\fuel\core\classes\database\mysqli\connection.php on line 290
INFO - 2015-10-08 17:44:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 17:44:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:44:24 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-10-08 17:44:25 --> 1054 - Unknown column 'cm_t0.create_at' in 'field list' [ SELECT `cm_t0`.`id` AS `t0_c0`, `cm_t0`.`last_name` AS `t0_c1`, `cm_t0`.`firs_tname` AS `t0_c2`, `cm_t0`.`ph_family_name` AS `t0_c3`, `cm_t0`.`ph_name` AS `t0_c4`, `cm_t0`.`sex` AS `t0_c5`, `cm_t0`.`adress1` AS `t0_c6`, `cm_t0`.`adress2` AS `t0_c7`, `cm_t0`.`adress3` AS `t0_c8`, `cm_t0`.`phone` AS `t0_c9`, `cm_t0`.`age` AS `t0_c10`, `cm_t0`.`birthday` AS `t0_c11`, `cm_t0`.`mail` AS `t0_c12`, `cm_t0`.`person_id` AS `t0_c13`, `cm_t0`.`person` AS `t0_c14`, `cm_t0`.`last_visit_date` AS `t0_c15`, `cm_t0`.`biko` AS `t0_c16`, `cm_t0`.`create_at` AS `t0_c17`, `cm_t0`.`update_at` AS `t0_c18`, `cm_t0`.`created_at` AS `t0_c19`, `cm_t0`.`updated_at` AS `t0_c20` FROM `cm_customers` AS `cm_t0` ORDER BY `cm_t0`.`created_at` DESC ] in C:\Users\USER\custumersys\cm0001\fuel\core\classes\database\mysqli\connection.php on line 290
INFO - 2015-10-08 17:44:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-08 17:44:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:44:43 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 17:44:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 17:44:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:44:44 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 17:44:45 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 17:44:45 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 17:44:45 --> 1054 - Unknown column 'cm_t0.create_at' in 'field list' [ SELECT `cm_t0`.`id` AS `t0_c0`, `cm_t0`.`last_name` AS `t0_c1`, `cm_t0`.`firs_tname` AS `t0_c2`, `cm_t0`.`ph_family_name` AS `t0_c3`, `cm_t0`.`ph_name` AS `t0_c4`, `cm_t0`.`sex` AS `t0_c5`, `cm_t0`.`adress1` AS `t0_c6`, `cm_t0`.`adress2` AS `t0_c7`, `cm_t0`.`adress3` AS `t0_c8`, `cm_t0`.`phone` AS `t0_c9`, `cm_t0`.`age` AS `t0_c10`, `cm_t0`.`birthday` AS `t0_c11`, `cm_t0`.`mail` AS `t0_c12`, `cm_t0`.`person_id` AS `t0_c13`, `cm_t0`.`person` AS `t0_c14`, `cm_t0`.`last_visit_date` AS `t0_c15`, `cm_t0`.`biko` AS `t0_c16`, `cm_t0`.`create_at` AS `t0_c17`, `cm_t0`.`update_at` AS `t0_c18`, `cm_t0`.`created_at` AS `t0_c19`, `cm_t0`.`updated_at` AS `t0_c20` FROM `cm_customers` AS `cm_t0` ORDER BY `cm_t0`.`created_at` DESC ] in C:\Users\USER\custumersys\cm0001\fuel\core\classes\database\mysqli\connection.php on line 290
INFO - 2015-10-08 17:46:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 17:46:19 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:46:19 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 17:46:21 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 17:46:21 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 17:46:21 --> 1054 - Unknown column 'cm_t0.create_at' in 'field list' [ SELECT `cm_t0`.`id` AS `t0_c0`, `cm_t0`.`last_name` AS `t0_c1`, `cm_t0`.`firs_tname` AS `t0_c2`, `cm_t0`.`ph_family_name` AS `t0_c3`, `cm_t0`.`ph_name` AS `t0_c4`, `cm_t0`.`sex` AS `t0_c5`, `cm_t0`.`adress1` AS `t0_c6`, `cm_t0`.`adress2` AS `t0_c7`, `cm_t0`.`adress3` AS `t0_c8`, `cm_t0`.`phone` AS `t0_c9`, `cm_t0`.`age` AS `t0_c10`, `cm_t0`.`birthday` AS `t0_c11`, `cm_t0`.`mail` AS `t0_c12`, `cm_t0`.`person_id` AS `t0_c13`, `cm_t0`.`person` AS `t0_c14`, `cm_t0`.`last_visit_date` AS `t0_c15`, `cm_t0`.`biko` AS `t0_c16`, `cm_t0`.`create_at` AS `t0_c17`, `cm_t0`.`update_at` AS `t0_c18`, `cm_t0`.`created_at` AS `t0_c19`, `cm_t0`.`updated_at` AS `t0_c20` FROM `cm_customers` AS `cm_t0` ORDER BY `cm_t0`.`created_at` DESC ] in C:\Users\USER\custumersys\cm0001\fuel\core\classes\database\mysqli\connection.php on line 290
INFO - 2015-10-08 17:49:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 17:49:09 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:49:09 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 17:49:10 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 17:49:10 --> Fuel\Core\Request::execute - Called
DEBUG - 2015-10-08 17:53:51 --> Migrate class initialized
INFO - 2015-10-08 17:54:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-08 17:54:48 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:54:48 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 17:54:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 17:54:50 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 17:54:50 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 17:54:51 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 17:54:51 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 17:54:51 --> 1054 - Unknown column 'cm_t0.create_at' in 'field list' [ SELECT `cm_t0`.`id` AS `t0_c0`, `cm_t0`.`last_name` AS `t0_c1`, `cm_t0`.`firs_tname` AS `t0_c2`, `cm_t0`.`ph_family_name` AS `t0_c3`, `cm_t0`.`ph_name` AS `t0_c4`, `cm_t0`.`sex` AS `t0_c5`, `cm_t0`.`adress1` AS `t0_c6`, `cm_t0`.`adress2` AS `t0_c7`, `cm_t0`.`adress3` AS `t0_c8`, `cm_t0`.`phone` AS `t0_c9`, `cm_t0`.`age` AS `t0_c10`, `cm_t0`.`birthday` AS `t0_c11`, `cm_t0`.`mail` AS `t0_c12`, `cm_t0`.`person_id` AS `t0_c13`, `cm_t0`.`person` AS `t0_c14`, `cm_t0`.`last_visit_date` AS `t0_c15`, `cm_t0`.`biko` AS `t0_c16`, `cm_t0`.`create_at` AS `t0_c17`, `cm_t0`.`update_at` AS `t0_c18`, `cm_t0`.`created_at` AS `t0_c19`, `cm_t0`.`updated_at` AS `t0_c20` FROM `cm_customers` AS `cm_t0` ORDER BY `cm_t0`.`created_at` DESC ] in C:\Users\USER\custumersys\cm0001\fuel\core\classes\database\mysqli\connection.php on line 290
DEBUG - 2015-10-08 17:59:30 --> Migrate class initialized
INFO - 2015-10-08 18:02:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:02:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:02:31 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:02:32 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:02:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:02:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/logout"
INFO - 2015-10-08 18:02:39 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:02:39 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:02:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:02:40 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:02:40 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:02:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-08 18:02:41 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:02:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:02:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-08 18:02:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:02:49 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:02:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:02:50 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:02:50 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:02:51 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:02:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:02:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 18:02:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:02:54 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:03:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 18:03:14 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:03:14 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:04:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 18:04:45 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:04:45 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:04:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "customer"
INFO - 2015-10-08 18:04:46 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:04:46 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:04:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2015-10-08 18:04:46 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:04:46 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:06:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 18:06:04 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:06:04 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-10-08 18:06:05 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:10:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 18:10:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:10:28 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-10-08 18:10:29 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:10:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-08 18:10:57 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:10:57 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:10:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:10:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:10:58 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:10:59 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:10:59 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:10:59 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:13:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:13:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:13:17 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:13:18 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:13:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:16:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 18:16:23 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:16:23 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-10-08 18:16:24 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:17:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:17:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:17:51 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:17:52 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:17:52 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:17:52 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:17:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:17:57 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:17:57 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:17:58 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:17:58 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:17:59 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:18:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2015-10-08 18:18:12 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:18:12 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:18:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:18:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:18:15 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:18:16 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:18:16 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:18:16 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:18:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:18:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:18:43 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:18:44 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:18:44 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:18:45 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:18:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2015-10-08 18:18:52 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:18:52 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:19:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:19:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:19:00 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:19:01 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:19:01 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:19:01 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:24:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:24:39 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:24:39 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:24:40 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:24:40 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:24:40 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:27:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:27:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:27:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:27:12 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:27:12 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:27:12 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:28:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:28:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:28:22 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:29:17 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:29:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:41:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:41:29 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:41:29 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:42:01 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:42:19 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:49:47 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:52:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:52:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:52:49 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:52:50 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:52:50 --> Fuel\Core\Request::execute - Called
ERROR - 2015-10-08 18:52:50 --> Error - Property "create_at" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 18:55:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 18:55:57 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 18:55:57 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 18:55:58 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 18:55:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:01:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:01:41 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:01:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:01:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:01:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:01:47 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:22:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 19:22:48 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:22:48 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:22:49 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 19:22:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:22:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:22:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:22:54 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:24:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:24:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:24:26 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-10-08 19:24:27 --> Error - Property "id" not found for Model_Customer. in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1188
INFO - 2015-10-08 19:28:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:28:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:28:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:28:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:28:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:28:18 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:28:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:28:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:28:18 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:28:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:28:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:28:24 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:28:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:28:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:28:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:28:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:28:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:28:31 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:28:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:28:35 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:28:35 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:29:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:29:10 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:29:10 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:29:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/1"
INFO - 2015-10-08 19:29:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:29:24 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:29:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/1"
INFO - 2015-10-08 19:29:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:29:28 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-10-08 19:29:30 --> Notice - Undefined index: id in C:\Users\USER\custumersys\cm0001\fuel\packages\orm\classes\model.php on line 1476
INFO - 2015-10-08 19:30:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/1"
INFO - 2015-10-08 19:30:59 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:30:59 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:31:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "customer"
INFO - 2015-10-08 19:31:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:31:00 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:31:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2015-10-08 19:31:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:31:00 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:36:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 19:36:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:36:31 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:36:32 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 19:36:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:36:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:36:34 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:36:34 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:37:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:37:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:37:33 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:37:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:37:35 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:37:35 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:37:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/2"
INFO - 2015-10-08 19:37:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:37:44 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:37:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/2"
INFO - 2015-10-08 19:37:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:37:47 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:37:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:37:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:37:49 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:37:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/view/1"
INFO - 2015-10-08 19:37:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:37:54 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:38:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/1"
INFO - 2015-10-08 19:38:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:38:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:38:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:38:06 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:38:06 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:38:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/view/1"
INFO - 2015-10-08 19:38:12 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:38:12 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:38:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:38:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:38:15 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:41:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:41:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:41:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:41:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/1"
INFO - 2015-10-08 19:41:42 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:41:42 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:42:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/1"
INFO - 2015-10-08 19:42:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:42:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:42:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:42:03 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:42:03 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:42:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/2"
INFO - 2015-10-08 19:42:25 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:42:25 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:42:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/2"
INFO - 2015-10-08 19:42:42 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:42:42 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:42:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:42:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:42:43 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:45:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:45:25 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:45:25 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:46:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:46:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:46:51 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:46:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:46:52 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:46:52 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:47:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/view/3"
INFO - 2015-10-08 19:47:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:47:00 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:47:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:47:07 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:47:07 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:47:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/delete/2"
INFO - 2015-10-08 19:47:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:47:44 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:47:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:47:45 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:47:45 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:49:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 19:49:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:49:17 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:49:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:49:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:49:26 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 19:49:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 19:49:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 19:49:33 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:03:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 20:03:57 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:03:57 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:04:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:04:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:04:00 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:04:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:04:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:04:22 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:04:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:04:37 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:04:37 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:04:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:04:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:04:55 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:10:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2015-10-08 20:10:46 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:10:46 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:10:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:10:50 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:10:50 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:11:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:11:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:11:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:11:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:11:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:11:17 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:11:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:11:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:11:31 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:11:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:11:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:11:47 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:11:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:11:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:11:55 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:12:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:12:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:12:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:12:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:12:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:12:47 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:28:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2015-10-08 20:28:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:28:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:28:39 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/customer"
INFO - 2015-10-08 20:28:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:29:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:29:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:29:49 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:30:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:30:05 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:30:05 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:37:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:37:41 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:37:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:38:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:38:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:38:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:38:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:38:40 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:38:40 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-10-08 20:38:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2015-10-08 20:38:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-10-08 20:38:51 --> Fuel\Core\Request::execute - Setting main Request
