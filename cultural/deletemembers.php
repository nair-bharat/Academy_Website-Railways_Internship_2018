<html>
<head>
<title>DeleteMembers</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
<th>Name</th>
<th>Designation</th>
<th>Contact</th>
</tr>
<?php

//Connection mysql_affected_rows
$con =mysqli_connect('localhost','root','');

//select the database
mysqli_select_db($con,'membersdb');

//select query
$sql= "SELECT * FROM members";

//execute query
$record=mysqli_query($con,$sql);

while($records=mysqli_fetch_array($record)){
	echo "<tr>";
	echo"<td>".$records['name']."</td>";
	echo"<td>".$records['designation']."</td>";
	echo"<td>".$records['contact']."</td>";
	echo"<td><a href=deletemembers1.php?id=".$records['id'].">Delete</a></td>";
}

?>
</table>
</body>
<table>
</html>
