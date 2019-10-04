<html>
<head>
</head>
<body>
<?php 
//Connection
$con=mysqli_connect('localhost','root','');
//select dba_close
mysqli_select_db($con,'login');


$sql="SELECT * FROM events ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

//select query
$sql = "SELECT * from events where role='$role' " ;

//Execute Query
$record = mysqli_query($con,$sql);





?>
<table>
<tr>
<th>EventNo</th>
<th>EventName</th>
<th>Venue</th>
<th>Date</th>
<th>Time</th>
</tr>
<?php

while($records=mysqli_fetch_array($record)){
	echo "<tr><form action=updateevents1.php method=post>";
	echo "<td><input type=text name=id value='" .$records['id'] . "'> </td>";
	echo "<td><input type=text name=eventname value='" .$records['eventname'] . "'> </td>";
	echo "<td><input type=text name=venue value='" .$records['venue'] . "'> </td>";
	echo "<td><input type=text name=date value='" .$records['date'] . "'> </td>";
	echo "<td><input type=text name=time value='" .$records['time'] . "'></td>";
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