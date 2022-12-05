<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$mysql_dbname = 'hoo';

//connection to the dartabase
$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_dbname);

if(@mysqli_connect_error())
{
	die('User cannot connect to the Database! Try Again....');
}
else
{
	@mysqli_select_db($link, 'welcome to the dreamers');
}

date_default_timezone_set('Asia/Karachi');
$error="";
?>