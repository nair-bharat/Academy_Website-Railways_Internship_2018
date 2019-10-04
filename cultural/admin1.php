<?php
$conn=mysqli_connect('localhost','root','','login');
if(!$conn)
{
	die("Cannot Connect Please Try Again Later");
}

$count=1;
$sql="SELECT * FROM events ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($conn,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

if($count == 1)
{
	

$s4="select * from events
order by id desc limit 1";
$s5=mysqli_query($conn,$s4);
$count=$count+1;
}


?>



<html>
<head>
<title>AdminPage</title>
<script>history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
</script>
<link rel="stylesheet" href="style1.css" type="text/css"></link>
</head>
<body>
<div class="container">
<center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">Logout</button></a></p><br>
<div style="background-color:black; height:8px;margin-top:-50px;">

</div>
<h2 style="color:red;"><?php
  session_start();
  echo  "Welcome" ." " .  $_SESSION['username'];
 ?></h2>
<div class="nav">
<ul>
<li><a href="AboutUs.php">Update AboutUs</a></li>
<li><a href="executivecomitee.php">Add Executive Members</a></li>
<li><a href="events2.php">Change Events</a></li>
<li><a href="designation.php">Add Designation</a></li>
<li><a href="contacus.php">Update Contact Details</a></li>
<li><a href="Awards2.php">Update Achievements</a></li>
<li><a href="register.php">Register User</a></li>
</ul>
</div>

</body>

<div class="footer2">
<div style="background-color:black; height:4px;margin-top:400px;text-align:center;">

</div>
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>
<div style="background-color:black; height:4px; margin-top:0px">


</div>
</div>
</html>