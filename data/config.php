<?php
/*
	数据卡初始化
*/
header('Content-Type:text/html;charset=utf8');
if (!defined('IN_WKCX'))
{
	die('Hacking attempt');
}


$gDB = array(
	'db_host' => 'localhost',
	'db_name' => 'haixin_db',	
	'db_user' => 'root',
	'db_pass' => '123456',
	'prefix'  => 'wkcx_'
	);

//user 权限控制;
define("ADD",1);
define("UPD",2);
define("LIS",4);
define("DEL",8);

?>