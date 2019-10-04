<?php
//Connection
$con=mysqli_connect('localhost','root','');
//select dba_close
mysqli_select_db($con,'contact');

//update query
$sql = "UPDATE help SET address='$_POST[address]',email='$_POST[email]',no='$_POST[no]',s1name='$_POST[s1name]',s1no='$_POST[s1no]',s2name='$_POST[s2name]',s2no='$_POST[s2no]'";

//Execute Query
if(mysqli_query($con,$sql))
	header("refresh:1;url=Contact.php");
else
	echo"Not Updated";

?>