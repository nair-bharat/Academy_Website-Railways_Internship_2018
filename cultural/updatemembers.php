<html>
<head>
</head>
<body>
<?php 
//Connection
$con=mysqli_connect('localhost','root','');
//select dba_close
mysqli_select_db($con,'membersdb');

//select query
$sql = "SELECT * from members";

//Execute Query
$record = mysqli_query($con,$sql);

?>
<table>
<tr>
<th>Name</th>
<th>Designation</th>
<th>Contact</th>
</tr>
<?php

while($records=mysqli_fetch_array($record)){
	echo "<tr><form action=updatemembers1.php method=post>";
	echo "<td><input type=text name=name value='" .$records['name'] . "'> </td>";
	echo "<td><input type=text name=designation value='" .$records['designation'] . "'> </td>";
	echo "<td><input type=text name=contact value='" .$records['contact'] . "'></td>";
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