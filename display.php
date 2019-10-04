<?php
//make conncection

$con=mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con,'contact');

$sql = "SELECT * from help";

$record=mysqli_query($con,$sql);

?>
<html>
<head>
<title>Display Contact Info</title>
</head>
<body>
<table border="1" cellspacing="1" cellpadding="1">
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
while($records=mysqli_fetch_array($record))//we can also use assoc in place of array
{
	echo "<tr>" ;
	echo "<td>".$records['address']."</td>";
	echo "<td>".$records['email']."</td>";
	echo "<td>".$records['no']."</td>";
	echo "<td>".$records['s1name']."</td>";
	echo "<td>".$records['s1no']."</td>";
	echo "<td>".$records['s2name']."</td>";
	echo "<td>".$records['s2no']."</td>";
	echo "</tr>" ;
}
?>
</body>
</html>