<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="pink">
	<form action="display_p.php" method="POST">
		<a href="logout_p.php">logout</a>
	</form>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db(berwashop);
$qu=mysql_query("select*from product_in");
echo"<table border='1' align='center'>";
echo"<tr><th>product_code</th>
         <th>date</th>
         <th>quantity</th>
         <th>unique_price</th>
         <th>tatal_price</th>
         <th>action</th></tr>";
while ($row=mysql_fetch_array($qu,MYSQL_ASSOC)) 
{
echo"<tr>";
echo'<td>'.$row['product_code'].'</td>';
echo'<td>'.$row['date'].'</td>';
echo'<td>'.$row['quantity'].'</td>';
echo'<td>'.$row['unique_price'].'</td>';
echo'<td>'.$row['tatal_price'].'</td>';
echo"<td><a href='update_p.php?product_code=$row[product_code]'>edit</a></td>";
?>
<td><a href="delete_p.php?product_code=<?php
echo$row[product_code]?>"onclick="('are you sure you want to delete this record')">delete</a></td>
<?php
echo"</tr>";
}
echo"</table>";
?>