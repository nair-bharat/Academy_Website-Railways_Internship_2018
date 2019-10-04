<html>
<head>
<title>DeleteEvents</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
<th>Event No</th>
<th>Event Name</th>
<th>Time</th>
</tr>
<?php

//Connection mysql_affected_rows
$con =mysqli_connect('localhost','root','');

//select the database
mysqli_select_db($con,'login');

$sql="SELECT * FROM events ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

//select query
$sql = "SELECT * from events where role='$role' " ;

//execute query
$record=mysqli_query($con,$sql);

while($records=mysqli_fetch_array($record)){
	echo "<tr>";
	echo"<td>".$records['id']."</td>";
	echo"<td>".$records['eventname']."</td>";
	echo"<td>".$records['venue']."</td>";
	echo"<td>".$records['date']."</td>";
	echo"<td>".$records['time']."</td>";
	echo"<td><a href=deleteevents1.php?id=".$records['id'].">Delete</a></td>";
}

?>
</table>
</body>
<table>
</html>