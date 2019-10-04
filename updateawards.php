<html>
<head>
</head>
<body>
<?php 
//Connection
$con=mysqli_connect('localhost','root','');
//select dba_close
mysqli_select_db($con,'login');

//select query
$sql = "SELECT * from achievements ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

//select query
$sql = "SELECT * from achievements where role='$role' " ;

//Execute Query
$record = mysqli_query($con,$sql);
?>
<table>
<tr>
<th>Year</th>
<th>Achievements</th>
</tr>
<?php

while($records=mysqli_fetch_array($record)){
	echo "<tr><form action=updateawards1.php method=post>";
	echo "<td><input type=text name=year value='" .$records['year'] . "'> </td>";
	echo "<td><input type=text name=achievements value='" .$records['achievements'] . "'> </td>";
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