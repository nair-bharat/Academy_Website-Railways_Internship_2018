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
th{
	
	
}
td{
	
	
	
}


</style>
</head>
<body>
<div class="container">
<center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">Logout</button></a></p><br>
<div style="background-color:black; height:8px;margin-top:-50px;">

</div>
<br>
<br>
<div class="nav">
<ul>
<li><a href="adminexecutive.php">Add Cultural Members</a></li>
<li><a href="events.php">Change Events</a></li>
<li><a href="adminmember.php">Add CRCA Members</a></li>
<li><a href="admincontact.php">Update Contact Details</a></li>
<li><a href="Awards.php">Update Achievements</a></li>
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

$sql="SELECT * FROM events ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];
$sql = "SELECT * from events where role='$role'";


$record=mysqli_query($con,$sql);
?>
<center>
<table border="3" cellspacing="1" cellpadding="1" height="80px" width="300px" style="margin-top:100px";"text-align:center";>
<tr>
<th>EventName</th>
<th>Venue</th>
<th>Date</th>
<th>Time</th>
</tr>

<?php
echo "<center>";
while($records=mysqli_fetch_array($record))//we can also use assoc in place of array
{  
    if(!$records['venue'] == null)
	{
	echo "<tr>" ;
	echo "<td>".$records['eventname']."</td>";
	echo "<td>".$records['venue']."</td>";
	echo "<td>".$records['date']."</td>";
	echo "<td>".$records['time']."</td>";
	
	echo "</tr>" ;
}
}
echo "</center>"
?>

</table>
</center>
<div style="margin-top:80px; margin-left:500px;">
<a href="insertevents.php"><button class="button3 button1" style="width:180px" "height:50px;">Add event</button></a>
<a href="updateevents.php"><button class="button3 button1" style="width:180px" "height:50px;">Update event</button></a>
<a href="deleteevents.php"><button class="button3 button1" style="width:180px" "height:50px;">Delete event</button></a><br><br><br>

</div>
</body>

<div class="footer">
<div style="background-color:black; height:4px;margin-top:400px;text-align:center;">

</div>
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>


<div style="background-color:black; height:4px; margin-top:0px">


</div>
</div>
</html>