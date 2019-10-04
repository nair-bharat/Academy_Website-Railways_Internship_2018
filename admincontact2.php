<html>
<head>
<title>Events</title>
<link rel="stylesheet" href="style1.css" type="text/css"></link>
<style>
.button3 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
	border-radius: 12px;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
	border-radius: 12px;
	
}
td{
	
	padding-left:50px;
	
}

</style>
</head>
<body>
<div class="container">
<center><a><font color="blue" size="30px"><img src="logocentral.jpg" height="40" width="50">Central Railway Cultural Academy</font><br>
<marquee><h4><font color="brown">Welcome to CRCA Website</font></h4></marquee>
<div class="nav">
<ul>
<li><a href="#">Add Cultural Members</a></li>
<li><a href="events.php">Change Events</a></li>
<li><a href="#.php">Add CRCA Members</a></li>
<li><a href="admincontact.php">Update Contact Details</a></li>
<li><a href="Awards.html">Update Achievements</a> </li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>

</div>
<br>
<br>
<br>
<br>
<br>
<?php
//make conncection

$con=mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con,'login');

$sql="SELECT * FROM contact ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];
$sql = "SELECT * from contact where role='$role'";


$record=mysqli_query($con,$sql);
echo $role;

?>
<center>
<table border="3" cellspacing="1" cellpadding="1" height="50px" width="800px" style="margin-top:100px";text-align="center";>
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
echo "<center>";
while($records=mysqli_fetch_array($record))//we can also use assoc in place of array
{
	if(!$records['address'] == null){
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
}
echo "</center>"
?>

</table>
</center>
<div style="margin-top:80px; margin-left:500px;">
<a href="insertcontact.php"><button class="button3 button1" style="width:180px" "height:50px;">Add Contact</button></a>
<a href="display1.php"><button class="button3 button1" style="width:180px" "height:50px;">Update Contact</button></a>
<a href="deletecontact.php"><button class="button3 button1" style="width:180px" "height:50px;">Delete Information</button></a><br><br><br>

</div>
</body>

<div class="footer">
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>
<div style="background-color:black; height:6px;width:100%; margin-top:0px">

</div>
</div>
</html>