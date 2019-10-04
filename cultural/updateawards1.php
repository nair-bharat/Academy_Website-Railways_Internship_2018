<?php
//Connection
$con=mysqli_connect('localhost','root','');
//select dba_close
mysqli_select_db($con,'login');
$sql="SELECT * FROM achievements ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);
$s2=mysqli_fetch_array($s1);
$role=$s2['role'];



//update query
$sql = "UPDATE achievements SET year='$_POST[year]',achievements='$_POST[achievements]' WHERE id='$_POST[id]'";

//Execute Query
if(mysqli_query($con,$sql))
	header("refresh:1;url=Awards.php");
else
	echo"Not Updated";

?>