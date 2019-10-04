<html>
<head>
</head>
<body>
<?php 
//Connection
$con=mysqli_connect('localhost','root','');
//select dba_close
mysqli_select_db($con,'login');


$sql="SELECT * FROM contact ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

//select query
$sql = "SELECT * from contact where role='$role' " ;

//Execute Query
$record = mysqli_query($con,$sql);





?>
<table>
<tr>
<th>Address</th>
<th>Email</th>
<th>Number</th>
<th>Joint Secretary Name</th>
<th>Joint Secretary No</th>
<th>Joint Secretary Name</th>
<th>Joint Secretary No</th>
</tr>
<?php

while($records=mysqli_fetch_array($record)){
	echo "<tr><form action=updateevents1.php method=post>";
	echo "<td><input type=text name=id value='" .$records['id'] . "'> </td>";
	echo "<td><input type=text name=address value='" .$records['address'] . "'> </td>";
	echo "<td><input type=text name=email value='" .$records['email'] . "'> </td>";
	echo "<td><input type=text name=no value='" .$records['no'] . "'> </td>";
	echo "<td><input type=text name=s1name value='" .$records['s1name'] . "'> </td>";
	echo "<td><input type=text name=s1no value='" .$records['s1no'] . "'> </td>";
	echo "<td><input type=text name=s2name value='" .$records['s2name'] . "'></td>";
	echo "<td><input type=text name=s2no value='" .$records['s2no'] . "'></td>";
    echo "<td><input type=hidden name=hidden value='" .$records['id'] . "' >";
	echo "<td><input type=submit>" ;
	echo "</form></tr>";
	} 
if (!$record) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>