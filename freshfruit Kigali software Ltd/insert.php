<html>
<body>
	<center>
	<table border="0">
		<tr>
		    <td> <img src="33.png" onscroll="4"></td>
		    <td colspan="3"><center> <img src="title.png"></center><br>
		    	<center><a href="home.html"> <img src="11.png"><img src="12.png"> </a> <a href="help.html"><img src="13.png"></a> <a href="home.html"><img src="14.png"></a> <a href="home.html"><img src="1h.png"></a></center></td>
			
			<td> <center><h1><b>Admin entry</b></h1><br><b>Click here to Logout</b></center><a href="form.php"> <img src="re.jpg"> </a></td>	
		</tr>	
		<tr>
		    <td rowspan="2"> <img src="a.jpg" onscroll="4"> <br><img src="aa.jpg" onscroll="4"></td>
		    <td colspan="3" rowspan="2"> 


		    	<center>
                  <center> <h1> Enter the products information Here</h1>

		    		<form action="insert.php"method="POST">

product_code:
<input type="text"name="product_code"><br><br>
product_name:
<input type="text"name="product_name"><br><br>
<input type="submit"value="send">
<input type="reset"value="cancel"><br><br>

<a href="display.php">display</a><br><br>
<a href="logout.php">logout</a><br><br>
</form>


		    	</center></td>
			
			<td rowspan="2"> <center>ADVERTISMENT</center> <br> <marquee direction="left" behavior="" style="background: cyan;"> TO AVERTISE WITH US PLEASE <br> CALL US <br>ON <br>0782192851 </marquee> <br><img src="22.png" onscroll="4"><br><img src="ew.jpg" onscroll="4"> </td>
		</tr>
		<tr>
		    
			
		</tr>

		<tr>
		    
	        <td colspan="5" bgcolor="cyan"> <center> <b><i> @ copy right Theoneste NDACYAYISABA </i></b> </center>  <b>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="left.png" onscroll="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="centa.png" onscroll="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="rait.png" onscroll="4"></b>
	        	
	         </td>
			
			
		</tr>	
	</table>
</body>
</html>


<?php
$a=$_POST['product_code'];
$b=$_POST['product_name'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db(berwashop);
$qu="insert into product values('$a','$b')";
$result=mysql_query($qu);
?>

