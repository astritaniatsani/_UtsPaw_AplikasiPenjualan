<?php 
session_start();
include 'admin/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pas=md5($pass);
$query=mysql_query("select * from admin where uname='$uname' and pass='$pas'")or die(mysql_error());

// echo $pas;
 ?>