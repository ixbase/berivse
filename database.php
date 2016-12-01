<?php
$host    ="localhost";
$user    ="name";
$password="pass";
$db      ="db_name";
mysql_connect($host,$user,$password) or die("not database");
mysql_select_db($db) or die("not $db");
mysql_query("SET NAMES 'UTF8'");
?>

