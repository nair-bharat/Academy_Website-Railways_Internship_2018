<html>
<head>
</head>
<body>
<?php 
//Connection
$con=mysqli_connect('localhost','root','');
//select dba_close
mysqli_select_db($con,'contact');

//select query
$sql = "SELECT * from help";

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
	echo "<tr><form action=display2.php method=post>";
	echo "<td><input type=text name=address value='" .$records['address'] . "'> </td>";
	echo "<td><input type=text name=email value='" .$records['email'] . "'> </td>";
	echo "<td><input type=text name=no value='" .$records['no'] . "'></td>";
	echo "<td><input type=text name=s1name value='" .$records['s1name'] . "'></td>";
	echo "<td><input type=text name=s1no value='" .$records['s1no'] . "'></td>";
	echo "<td><input type=text name=s2name value='" .$records['s2name'] . "'></td>";
    echo "<td><input type=text name=s2no value='" .$records['s2no'] . "'></td>";
	echo "<td><input type=submit name=update>" ;
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