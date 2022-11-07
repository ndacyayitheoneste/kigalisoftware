<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
$login_P=addslashes($login_p);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db(berwashop);
$qu=mysql_query("select username,password from shopkeeper where username='".$username."'");
$result=mysql_fetch_assoc($qu);
if(empty($_POST["username"]))
{
     header("location:login_p.php");
	return false;
}
if(empty($_POST["password"]))
{
	header("location:login_p.php");
	return false;
}
if($username==$result['username']and $password==$result['password'])
{
$_SESSION["login_P"]=$_POST["login_p"];
	header("location:insert_P.php");
}
else
{
	header("location:login_P.php");
}
?>