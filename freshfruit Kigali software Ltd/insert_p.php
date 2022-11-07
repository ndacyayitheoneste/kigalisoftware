<html>
<head>
<title></title>
</head>
<body bgcolor="cyane">
<form action="insert_p.php"method="POST">
<a href="logout_p.php">logout</a><br><br>
<a href="display_p.php">display</a><br><br>
product_code:
<input type="text"name="product_code"><br><br>
date:
<input type="date"name="" value="date"><br><br>
quantity:
<input type="text"name="quantity" value=""><br><br>
unique_price:
<input type="text"name="unique_price" value=""><br><br>
tatal_price:
<input type="text"name="tatal_price" value=""><br><br>
<input type="submit"value="send">
<input type="reset"value="cancel">
</form>
</body>
</html>
<?php
$a=$_POST['product_code'];
$b=$_POST['date'];
$c=$_POST['quantiy'];
$d=$_POST['unique_price'];
$e=$_POST['tatal_price'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db(berwashop);
$qu="insert into product_in values('$a','$b','$c','$d','$e')";
$result=mysql_query($qu);
?>
