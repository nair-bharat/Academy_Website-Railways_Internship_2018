
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
	
	padding-left:80px;
	padding-right:80px;
	
}
td{
	
	
	
}


</style>
</head>
<body>
<div class="container"><center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">Logout</button></a></p>
<div style="background-color:black; height:8px;margin-top:-40px;">

</div>
<marquee><h4><font color="brown">Welcome to CRCA Website</font></h4></marquee>
<div class="nav">
<ul>

<li><a href="Awards.php">Update Achievements</a></li>
<li><a href="events.php">Change Events</a></li>
<li><a href="executivecomitee.php">Executive Committee</a></li>
<li><a href="Contact.php">Update Contact Details</a> </li>
<li><a href="register.php">Register Member</a></li>
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

$sql="SELECT * FROM achievements ORDER BY id DESC LIMIT 1";


$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];
$sql = "SELECT year,achievements from achievements where role='$role'";


$record=mysqli_query($con,$sql)
or die("hfjds".mysqli_error($con));

?>
<center>
<table border="3" cellspacing="2" cellpadding="2" style="margin-top:100px";"text-align:center";>
<tr>
<th>Year</th>
<th>Achievements</th>
</tr>

<?php
echo "<center>";
while($records=mysqli_fetch_array($record))//we can also use assoc in place of array
{
	if(!$records['achievements'] == null){
	echo "<tr>" ;
	echo "<td>".$records['year']."</td>";
	echo "<td>".$records['achievements']."</td>";
	echo "</tr>" ;
	}
}
echo "</center>"
?>

</table>
</center>
<div style="margin-top:80px; margin-left:500px;">
<a href="insertawards.php"><button class="button3 button1" style="width:180px" "height:50px;">Add Achievement</button></a>
<a href="updateawards.php"><button class="button3 button1" style="width:180px" "height:50px;">Update Achievement</button></a>
<a href="deleteawards.php"><button class="button3 button1" style="width:180px" "height:50px;">Delete Achievement</button></a><br><br><br>

</div>
</body>

<div class="footer">
<div style="background-color:black; height:4px;margin-top:300px;text-align:center;">

</div>
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>
<div style="background-color:black; height:4px; margin-top:0px">


</div>
</div>
</html>