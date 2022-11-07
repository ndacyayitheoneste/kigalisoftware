<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db(berwashop);
$sql=mysql_query("select* from product_in where product_code='$_GET[product_code]'");
print"<table align='center'>";
while($row=mysql_fetch_array($sql,MYSQL_ASSOC)) 
{
print"<form action='update_p.php' method='POST'>";
print"<h1 align=center><font color=blue> change product_details</font></h1>";
print"<tr>
<td>product_code</td><td><input type=text name='product_code'value='".$row[product_code]."'/></td></tr>";
print"<tr>
<td>date</td><td><input type=date name='date'value='".$row[date]."'/></td></tr>";
print"<tr>
<td>quantiy</td><td><input type=text name='quantity'value='".$row[quantity]."'/></td></tr>";
print"<tr>
<td>unique_price</td><td><input type=text name='unique_price'value='".$row[unique_price]."'/></td></tr>";
print"<tr>
<td>tatal_price</td><td><input type=text name='tatal_price'value='".$row[tatal_price]."'/></td></tr>";
print"<tr>
<td><td><input type='submit' name=submit value='edit'/></td></tr>";
print"</form>";
}
print"</table>";
?>
<?php
$product_code=$_POST['product_code'];
$date=$_POST['date'];
$quantity=$_POST['quantity'];
$unique_price=$_POST['unique_price'];
$tatal_price=$_POST['tatal_price'];
if($_POST['submit'])
{
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());
}
$db=mysql_select_db("berwashop",$con);
if(!empty($_POST['product_code'])&&!empty($_POST['date'])&&!empty($_POST['quantity'])&&!empty($_POST['unique_price'])&&!empty($_POST['tatal_price']))
{
$sql="update product_in set date='$date',quantity='$quantity',unique_price='$unique_price',tatal_price='$tatal_price'where product_code='$product_code'";
if(!mysql_query($sql,$con))
{
	die('error:'.mysql_error());
}
echo'<script type="text/javascript">alert("product are successful update")window.location=\'display.php\';
</script>';
}
else
{
echo'<script type="text/javascript">alert("product are not successful update")window.location=\'display.php\';
</script>';
}
}
?>