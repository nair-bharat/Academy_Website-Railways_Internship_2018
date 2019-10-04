<?php
//Connection mysql_affected_rows
$con =mysqli_connect('localhost','root','');

//select the database
mysqli_select_db($con,'login');

//select query
$sql= "DELETE FROM achievements WHERE id='$_GET[id]'";

//execute query
if(mysqli_query($con,$sql)){
	header("refresh:1;url=Awards.php");
}
else{
	echo "Not deleted";
}

?>