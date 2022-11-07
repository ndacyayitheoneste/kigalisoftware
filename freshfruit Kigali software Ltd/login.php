<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$login=addslashes($login);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db(berwashop);
$qu=mysql_query("select username,password from shopkeeper where username='".$username."'");
$result=mysql_fetch_assoc($qu);
if(empty($_POST['username']))
{
 header("location:login.php");
	return false;
}
if(empty($_POST['password']))
{
	header("location:login.php");
	return false;
}
if($username==$result['username']and$password==$result['password'])
{
	$_SESSION["login"]=$_POST["login"];
	header("location:insert.php");
}
else
{
	header("location:login.php");	
}
?>