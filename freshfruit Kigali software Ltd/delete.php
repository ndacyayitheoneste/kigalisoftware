<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db(berwashop);
$qu=mysql_query("delete from product where product_code='$_GET[product_code]'");
$result=mysql_query($qu,$con);
echo'<script type="text/javascript">window.location=\'display.php\';</script>';
?>