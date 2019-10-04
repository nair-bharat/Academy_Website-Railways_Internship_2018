
<?php
$conn=mysqli_connect('localhost','root','','login');
if(!$conn)
{
	die("Cannot Connect Please Try Again Later");
}

$count=1;
$sql="SELECT * FROM contact ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($conn,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

if($count == 1)
{
	

$s4="select * from contact
order by id desc limit 1";
$s5=mysqli_query($conn,$s4);
$s6=mysqli_fetch_array($s5);
$address=$s6['address'];
if($address == '')
{
	$s7="delete from contact order by id DESC LIMIT 1 ";
	mysqli_query($conn,$s7);
}
$count=$count+10;
}






if(isset($_POST['submit']) && !empty($_POST) )
{

$address=mysqli_real_escape_string($conn,($_POST['address']));
$email=mysqli_real_escape_string($conn,($_POST['email']));
$no=mysqli_real_escape_string($conn,($_POST['no']));
$s1name=mysqli_real_escape_string($conn,($_POST['s1name']));
$s1no=mysqli_real_escape_string($conn,($_POST['s1no']));
$s2name=mysqli_real_escape_string($conn,($_POST['s2name']));
$s2no=mysqli_real_escape_string($conn,($_POST['s2no']));

$sql = "UPDATE contact SET address='$address',no='$no',email='$email',s1name='$s1name',s1no='$s1no',s2name='$s2name',s2no='$s2no' WHERE  role='$role' ";
mysqli_query($conn,$sql);
clearstatcache();
header('location:admincontact.php');
exit;

}


$query="SELECT * FROM contact where role='$role' " ;
$result=mysqli_query($conn,$query);
?>


<html>
<head>
<style>

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

</style>

<link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
<center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">Logout</button></a></p>
<div style="background-color:black; height:8px;margin-top:-40px;">

</div>
<marquee><h4><font color="brown">Welcome to CRCA Website</font></h4></marquee>
<h1 style="text-align:center; margin-top:15px;text-shadow: 9px 8px 0px rgba(0,0,0,0.15); font-size:30px;">CONTACT US</h1>


<h2 style="font-size:30px; text-align:center;"><?php
  session_start();
  echo  "Welcome" ." " .  $_SESSION['username'];
 ?></h2>
<div class="nav"><ul >
<li><a href="adminexecutive.php">Add Cultural Members</a></li>
<li><a href="events.php">Change Events</a></li>
<li><a href="adminmember.php">Add CRCA Members</a></li>
<li><a href="admincontact.php">Update Contact Details</a></li>
<li><a href="Awards.php">Update Achievements</a></li>
</ul>

</div>
<div style="height:500px;width:400px;background-color:white; margin-top:40px ;margin-left:50px; border-radius:12px;text-align:left;border:3px solid black; padding-top:10px; padding-left:30px;">

<?php
$count=1;
while($result1=mysqli_fetch_array($result))
{   if($count>0)
	{
	if($result1['address'] != '' )
	{
	echo "<h1>Central Railway Cultural Academy Headquarters" . "</h1>" ;
	echo "<h2>ADDRESS" . "</h2>" ;
	echo "<h3>".$result1['address']."</h3>";
	echo "<h3>Contact NO. : ".$result1['no']."</h3>" ;
	echo "<h3>GMAIL :  ".$result1['email']."</h3>" ;
	echo "<h2>JOINT SECRETARIES" . "</h2>" ;
	echo "<h3>".$result1['s1name']."</h3>" ;
	echo "<h3>".$result1['s1no']."</h3>";
	echo "<h3>".$result1['s2name']."</h3>" ;
	echo "<h3>".$result1['s2no']."</h3>";
	$count=0;
	}
	}
}

?>

</div>
<div>
<form align="center" action="admincontact.php" method="POST" style="background-color:white; border:2px solid black; height:300px; width:800px; padding-top:20px; margin-left:50px; margin-top:50px;">
 ENTER YOUR ADDRESS:<input type="text" placeholder="enter address" name="address" required><br><br><br>
 ENTER YOUR EMAIL-ID:<input type="email" placeholder="email" name="email" required><br><br><br>
 ENTER LANDLINE NUMBER:<input type="text" placeholder="number" name="no" required><br><br><br>
 JOINT SECRETARY NAME:<input type="text" placeholder="name" name="s1name" required>

 JOINT SECRETARY NUMBER:<input type="text" placeholder="number" name="s1no" required><br><br><br>
JOINT SECRETARY NAME:<input type="text" placeholder="name" name="s2name" required>
<?php
clearstatcache();
?>

 JOINT SECRETARY NUMBER:<input type="text" placeholder="number" name="s2no" required><br><br><br>
 <br>
  <button type="submit" name="submit" value="submit" style="text-align:center;">SUBMIT</button>
 <?php
clearstatcache();
?>

</form>
</div>

<footer> 

<div class="footer"style="margin-top:-20px;">
<div style="background-color:black; height:4px;margin-top:300px;text-align:center;">

</div>
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>


<div style="background-color:black; height:4px; margin-top:0px">


</div>
</footer>
<div style="background-color:black; height:4px; margin-top:0px">
<?php
clearstatcache();
?>
</div>
</body>
</html>








