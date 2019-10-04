<html>
<head>
<title>DeleteContact</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
<th>Address</th>
<th>Email</th>
<th>Landline</th>
<th>Joint Secretary Name</th>
<th>Joint Secretary No</th>
<th>Joint Secretary Name</th>
<th>Joint Secretary No</th>
</tr>
<?php

//Connection mysql_affected_rows
$con =mysqli_connect('localhost','root','');

//select the database
mysqli_select_db($con,'login');

$sql="SELECT * FROM contact ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

//select query
$sql = "SELECT * from contact where role='$role' " ;

//execute query
$record=mysqli_query($con,$sql);

while($records=mysqli_fetch_array($record)){
	echo "<tr>";
	echo "<td>".$records['address']."</td>";
	echo "<td>".$records['email']."</td>";
	echo "<td>".$records['no']."</td>";
	echo "<td>".$records['s1name']."</td>";
	echo "<td>".$records['s1no']."</td>";
	echo "<td>".$records['s2name']."</td>";
	echo "<td>".$records['s2no']."</td>";
	echo"<td><a href=deletecontact1.php?id=".$records['id'].">Delete</a></td>";
}

?>
</table>
</body>
<table>
</html>
