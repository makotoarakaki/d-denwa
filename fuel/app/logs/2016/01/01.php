<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

INFO - 2016-01-01 15:33:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2016-01-01 15:33:10 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:33:10 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:33:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2016-01-01 15:33:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:33:16 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:33:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-01 15:33:17 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:33:17 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:33:19 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/daily"
INFO - 2016-01-01 15:33:19 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:33:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 15:33:26 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:33:26 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:33:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/create"
INFO - 2016-01-01 15:33:33 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:33:33 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:38:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 15:38:11 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:38:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:38:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/view/265"
INFO - 2016-01-01 15:38:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:38:16 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:40:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 15:40:41 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:40:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:40:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/265"
INFO - 2016-01-01 15:40:46 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:40:46 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 15:40:48 --> 1054 - Unknown column 'cm_t0.customerid' in 'where clause' [ SELECT `cm_t0`.`id` AS `t0_c0`, `cm_t0`.`last_name` AS `t0_c1`, `cm_t0`.`firs_tname` AS `t0_c2`, `cm_t0`.`ph_family_name` AS `t0_c3`, `cm_t0`.`ph_name` AS `t0_c4`, `cm_t0`.`sex` AS `t0_c5`, `cm_t0`.`post_code` AS `t0_c6`, `cm_t0`.`adress1` AS `t0_c7`, `cm_t0`.`adress2` AS `t0_c8`, `cm_t0`.`adress3` AS `t0_c9`, `cm_t0`.`phone` AS `t0_c10`, `cm_t0`.`age` AS `t0_c11`, `cm_t0`.`birthday` AS `t0_c12`, `cm_t0`.`mail` AS `t0_c13`, `cm_t0`.`person_id` AS `t0_c14`, `cm_t0`.`personname` AS `t0_c15`, `cm_t0`.`last_visit_date` AS `t0_c16`, `cm_t0`.`biko` AS `t0_c17`, `cm_t0`.`created_at` AS `t0_c18`, `cm_t0`.`updated_at` AS `t0_c19` FROM `cm_customers` AS `cm_t0` WHERE `cm_t0`.`customerid` = '265' ORDER BY `cm_t0`.`updated_at` DESC LIMIT 10 OFFSET 0 ] in C:\Users\USER\custumersys\cm0001\fuel\core\classes\database\mysqli\connection.php on line 290
INFO - 2016-01-01 15:45:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-01 15:45:11 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:45:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:45:12 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/daily"
INFO - 2016-01-01 15:45:12 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:46:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 15:46:03 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:46:03 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:46:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 15:46:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:46:16 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 15:47:00 --> 1054 - Unknown column 'cm_t0.customerid' in 'where clause' [ SELECT `cm_t0`.`id` AS `t0_c0`, `cm_t0`.`last_name` AS `t0_c1`, `cm_t0`.`firs_tname` AS `t0_c2`, `cm_t0`.`ph_family_name` AS `t0_c3`, `cm_t0`.`ph_name` AS `t0_c4`, `cm_t0`.`sex` AS `t0_c5`, `cm_t0`.`post_code` AS `t0_c6`, `cm_t0`.`adress1` AS `t0_c7`, `cm_t0`.`adress2` AS `t0_c8`, `cm_t0`.`adress3` AS `t0_c9`, `cm_t0`.`phone` AS `t0_c10`, `cm_t0`.`age` AS `t0_c11`, `cm_t0`.`birthday` AS `t0_c12`, `cm_t0`.`mail` AS `t0_c13`, `cm_t0`.`person_id` AS `t0_c14`, `cm_t0`.`personname` AS `t0_c15`, `cm_t0`.`last_visit_date` AS `t0_c16`, `cm_t0`.`biko` AS `t0_c17`, `cm_t0`.`created_at` AS `t0_c18`, `cm_t0`.`updated_at` AS `t0_c19` FROM `cm_customers` AS `cm_t0` WHERE `cm_t0`.`customerid` = '19' ORDER BY `cm_t0`.`updated_at` DESC LIMIT 10 OFFSET 0 ] in C:\Users\USER\custumersys\cm0001\fuel\core\classes\database\mysqli\connection.php on line 290
INFO - 2016-01-01 15:49:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 15:49:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:49:16 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 15:49:22 --> Notice - Undefined variable: customers in C:\Users\USER\custumersys\cm0001\fuel\app\views\admin\customer\history.php on line 2
INFO - 2016-01-01 15:50:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 15:50:11 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:50:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:50:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 15:50:55 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:50:55 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:51:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 15:51:17 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:51:17 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:51:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily/search"
INFO - 2016-01-01 15:51:21 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:51:21 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:51:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily/reflec/19"
INFO - 2016-01-01 15:51:25 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:51:25 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:51:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 15:51:27 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:51:27 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:51:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily/create"
INFO - 2016-01-01 15:51:50 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:51:50 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:51:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 15:51:52 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:51:52 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:51:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily/search"
INFO - 2016-01-01 15:51:59 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:51:59 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:52:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily/reflec/19"
INFO - 2016-01-01 15:52:02 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:52:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:52:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 15:52:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:52:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:52:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily/create"
INFO - 2016-01-01 15:52:22 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:52:22 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:52:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 15:52:24 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:52:24 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:52:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 15:52:30 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:52:30 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:52:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 15:52:35 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:52:35 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 15:52:36 --> Notice - Undefined variable: item in C:\Users\USER\custumersys\cm0001\fuel\app\views\admin\customer\history.php on line 21
INFO - 2016-01-01 15:53:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 15:53:21 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:53:21 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 15:53:22 --> Notice - Undefined variable: item in C:\Users\USER\custumersys\cm0001\fuel\app\views\admin\customer\history.php on line 31
INFO - 2016-01-01 15:53:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 15:53:51 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:53:51 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:54:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 15:54:27 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:54:27 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:55:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 15:55:26 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:55:26 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 15:55:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 15:55:30 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 15:55:30 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:26:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 16:26:41 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:26:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:26:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 16:26:45 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:26:45 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:28:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 16:28:53 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:28:53 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:28:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 16:28:58 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:28:58 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:43:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 16:43:44 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:43:44 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:43:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 16:43:47 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:43:47 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:43:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 16:43:51 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:43:51 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:44:08 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history"
INFO - 2016-01-01 16:44:08 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:44:08 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:44:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 16:44:15 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:44:15 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:44:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 16:44:18 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:44:18 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:49:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-01 16:49:26 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:49:26 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:49:27 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/daily"
INFO - 2016-01-01 16:49:27 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:49:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 16:49:39 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:49:39 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:49:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 16:49:54 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:49:54 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 16:56:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 16:56:59 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:56:59 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 16:57:26 --> Notice - Undefined variable: history in C:\Users\USER\custumersys\cm0001\fuel\app\views\admin\customer\historyedit.php on line 6
INFO - 2016-01-01 16:58:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 16:58:15 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 16:58:15 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:01:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history"
INFO - 2016-01-01 17:01:27 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:01:27 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:02:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:02:28 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:02:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:02:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:02:37 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:02:37 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:02:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:02:55 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:02:55 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:03:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:03:28 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:03:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:03:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:03:37 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:03:37 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:04:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:04:00 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:04:00 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:04:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit"
INFO - 2016-01-01 17:04:35 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:04:35 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:05:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history"
INFO - 2016-01-01 17:05:17 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:05:17 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:05:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:05:28 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:05:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:05:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:05:36 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:05:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:05:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:05:50 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:05:50 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:06:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit"
INFO - 2016-01-01 17:06:05 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:06:05 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:06:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history"
INFO - 2016-01-01 17:06:28 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:06:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:07:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:07:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:07:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:07:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/19"
INFO - 2016-01-01 17:07:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:07:16 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:07:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/edit/19"
INFO - 2016-01-01 17:07:41 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:07:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:08:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:08:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:08:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:11:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/265"
INFO - 2016-01-01 17:11:23 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:11:23 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:12:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/265"
INFO - 2016-01-01 17:12:12 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:12:12 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:12:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:12:20 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:12:20 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:12:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:12:29 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:12:29 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:12:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:12:42 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:12:42 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:13:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:13:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:13:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:13:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history"
INFO - 2016-01-01 17:13:10 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:13:10 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:13:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:13:18 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:13:18 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:13:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:13:26 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:13:26 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:16:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:16:28 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:16:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:18:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:18:33 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:18:33 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:18:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history"
INFO - 2016-01-01 17:18:45 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:18:45 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:18:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:18:54 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:18:54 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:19:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:19:02 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:19:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:19:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:19:21 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:19:21 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:21:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:21:41 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:21:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:22:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:22:20 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:22:20 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:23:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:23:31 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:23:31 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:23:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:23:39 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:23:39 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:23:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:23:51 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:23:51 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:25:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:25:03 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:25:03 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:25:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history19"
INFO - 2016-01-01 17:25:36 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:25:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:25:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-01 17:25:36 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:25:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:26:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history"
INFO - 2016-01-01 17:26:58 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:26:58 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:27:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:27:10 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:27:10 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:27:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:27:19 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:27:19 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:27:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/2"
INFO - 2016-01-01 17:27:39 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:27:39 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:27:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:27:57 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:27:57 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:28:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/1"
INFO - 2016-01-01 17:28:13 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:28:13 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:28:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/historyedit/1"
INFO - 2016-01-01 17:28:27 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:28:27 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:28:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:28:39 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:28:39 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:33:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:33:23 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:33:23 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:33:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:33:30 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:33:30 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:36:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:36:20 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:36:20 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:36:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:36:27 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:36:27 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:41:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:41:42 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:41:42 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:41:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:41:50 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:41:50 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 17:41:53 --> Notice - Undefined variable: _weekday in C:\Users\USER\custumersys\cm0001\fuel\app\views\admin\customer\history.php on line 25
INFO - 2016-01-01 17:43:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:43:38 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:43:38 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 17:43:41 --> Notice - Undefined variable: _weekday in C:\Users\USER\custumersys\cm0001\fuel\app\classes\controller\admin\customer.php on line 493
INFO - 2016-01-01 17:46:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:46:03 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:46:03 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:46:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:46:10 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:46:10 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 17:46:18 --> Notice - Undefined variable: _weekday in C:\Users\USER\custumersys\cm0001\fuel\app\classes\controller\admin\customer.php on line 493
INFO - 2016-01-01 17:53:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:53:22 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:53:22 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 17:53:23 --> Notice - Undefined offset: 53 in C:\Users\USER\custumersys\cm0001\fuel\app\views\admin\customer\history.php on line 25
INFO - 2016-01-01 17:54:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:54:21 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:54:21 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:54:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:54:25 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:54:25 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 17:54:26 --> Notice - Undefined offset: 53 in C:\Users\USER\custumersys\cm0001\fuel\app\views\admin\customer\history.php on line 25
INFO - 2016-01-01 17:55:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:55:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:55:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:55:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 17:55:42 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:55:42 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 17:55:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:55:44 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:55:44 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 17:55:45 --> Error - View variable is not set: _weekday in C:\Users\USER\custumersys\cm0001\fuel\core\classes\view.php on line 450
INFO - 2016-01-01 17:57:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 17:57:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 17:57:04 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 17:57:05 --> Error - View variable is not set: _weekday in C:\Users\USER\custumersys\cm0001\fuel\core\classes\view.php on line 450
INFO - 2016-01-01 18:02:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 18:02:21 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:02:21 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 18:02:22 --> Error - View variable is not set: _weekday in C:\Users\USER\custumersys\cm0001\fuel\core\classes\view.php on line 450
INFO - 2016-01-01 18:02:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 18:02:41 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:02:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 18:03:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 18:03:05 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:03:05 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 18:03:08 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 18:03:08 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:03:08 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 18:03:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 18:03:54 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:03:54 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 18:03:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 18:03:57 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:03:57 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 18:05:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 18:05:59 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:05:59 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 18:06:00 --> Warning - date() expects at least 1 parameter, 0 given in C:\Users\USER\custumersys\cm0001\fuel\app\classes\controller\admin\daily.php on line 30
INFO - 2016-01-01 18:06:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 18:06:34 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:06:34 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 18:06:36 --> Fatal Error - Call to undefined function today() in C:\Users\USER\custumersys\cm0001\fuel\app\classes\controller\admin\daily.php on line 30
INFO - 2016-01-01 18:07:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 18:07:07 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:07:07 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 18:07:08 --> Fatal Error - Call to undefined function today() in C:\Users\USER\custumersys\cm0001\fuel\app\classes\controller\admin\daily.php on line 30
INFO - 2016-01-01 18:09:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 18:09:51 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:09:51 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2016-01-01 18:09:52 --> Fatal Error - Call to undefined function today() in C:\Users\USER\custumersys\cm0001\fuel\app\classes\controller\admin\daily.php on line 30
INFO - 2016-01-01 18:10:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/daily"
INFO - 2016-01-01 18:10:40 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:10:40 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 18:10:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/dailyhistory"
INFO - 2016-01-01 18:10:58 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:10:58 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 18:12:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer"
INFO - 2016-01-01 18:12:53 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:12:53 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-01 18:12:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/customer/history/19"
INFO - 2016-01-01 18:12:56 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-01 18:12:56 --> Fuel\Core\Request::execute - Setting main Request
