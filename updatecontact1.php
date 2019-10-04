<?php
//Connection
$con=mysqli_connect('localhost','root','');
//select dba_close
mysqli_select_db($con,'login');


$sql="SELECT * FROM contact ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];



//update query
$sql = "UPDATE contact SET id='$_POST[id]',address='$_POST[address]',email='$_POST[email]',no='$_POST[no]',s1name='$_POST[s1name]',s1no='$_POST[s1no]',s2name='$_POST[s2name]',s2no='$_POST[s2no]' WHERE id='$_POST[id]'";

//Execute Query
if(mysqli_query($con,$sql))
	header("refresh:1;url=admincontact.php");
else
	echo"Not Updated";

?>