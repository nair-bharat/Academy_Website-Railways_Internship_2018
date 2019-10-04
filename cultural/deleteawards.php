<html>
<head>
<title>DeleteAwards</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
<th>Year</th>
<th>Achievements</th>
</tr>
<?php

//Connection mysql_affected_rows
$con =mysqli_connect('localhost','root','');

//select the database
mysqli_select_db($con,'login');

$sql="SELECT * FROM achievements ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

//select query
$sql = "SELECT * from achievements where role='$role' " ;

//execute query
$record=mysqli_query($con,$sql);

while($records=mysqli_fetch_array($record)){
	echo "<tr>";
	echo "<td>".$records['year']."</td>";
	echo "<td>".$records['achievements']."</td>";
	echo"<td><a href=deleteawards1.php?id=".$records['id'].">Delete</a></td>";
}

?>
</table>
</body>
<table>
</html>
