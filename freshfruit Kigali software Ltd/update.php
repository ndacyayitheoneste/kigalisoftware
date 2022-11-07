<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("berwashop");
$sql=mysql_query("SELECT * FROM product WHERE product_code='$_GET[product_code]'");
print"<table align='center'>";
while($row=mysql_fetch_array($sql,MYSQL_ASSOC))
{
print"<form method='post' action='update.php' >";
print"<h1 align=center ><font color=blue> Change product_Details</font></h1>";
 print"<tr>
		<td> product_code</td><td>
		<input type=text name='product_code' 
		value='".$row[product_code]."'/> </td>
	</tr>";
	echo"<tr>
		<td> product_name</td><td>
		<input type=text name='product_name' 
		value='".$row[product_name]."' /> </td>
	</tr>";
		print"<tr>
		<td><input type='submit' 
		name=submit value='Edit' /></td>
	</tr>";

print"</form>";
}
print"</table>";
?>
<?php
$product_code=$_POST['product_code'];
$product_name=$_POST['product_name'];
if($_POST['submit']){
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());
}
mysql_select_db("berwashop",$con);
if(!empty($_POST['product_name'])){
$sql="UPDATE product SET product_name='$product_name'WHERE product_code='$product_code'";
if(!mysql_query($sql,$con))
{
die('error:'.mysql_error());
}
echo'
<script type="text/javascript">
alert("a new product has successful updated!");
window.location=\'display.php\';
</script>
';
}
else
{
echo'
<script type="text/javascript">
alert("a product not updated!");
window.location=\'display.php\';
</script>
';
}
}
?>

