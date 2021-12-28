<?php

session_start();

$username=$_POST["username"];
$password=$_POST["password"];

if($username=="1941720159" OR $username=="1941720220" OR $username=="admin"
 AND $password=="1941720159" OR $password=="1941720220" OR $password=="admin")
{
	$_SESSION["username"]=$username;
	header("location:index.php");
}else{
	header("location:login.php?login_error");
}
?>