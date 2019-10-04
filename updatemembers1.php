<?php
//Connection
$con=mysqli_connect('localhost','root','');
//select dba_close
mysqli_select_db($con,'membersdb');

//update query
$sql = "UPDATE members SET name='$_POST[name]',designation='$_POST[designation]',contact='$_POST[contact]'";

//Execute Query
if(mysqli_query($con,$sql))
	header("refresh:1;url=committee.php");
else
	echo"Not Updated";

?>