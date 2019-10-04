<?php
$conn=mysqli_connect('localhost','root','','login');
if(!$conn)
{
	die("Cannot Connect Please Try Again Later");
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
echo "sameer";
$sql = "UPDATE contactus SET address='$address',no='$no',email='$email',s1name='$s1name',s1no='$s1no',s2name='$s2name',s2no='$s2no' WHERE  id=1 ";
mysqli_query($conn,$sql);
clearstatcache();
header('location:contacus1.php');
exit;

}


$query="SELECT * FROM contactus where id=1" ;
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
<center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="Home.php"><button class="button button2" style="width:70px" "height:50px;">Home</button></a></p>
<div style="background-color:black; height:8px;margin-top:-40px;">

</div>
<marquee><h3><font color="brown">Welcome to CRCA Website</font></h3></marquee>
<h1 style="text-align:center; margin-top:15px;text-shadow: 9px 8px 0px rgba(0,0,0,0.15); font-size:30px;">CONTACT US</h1>


<div class="nav" style="margin-top:20px; "><ul >
<li><a href="aboutus1.php">About CRCA</a></li>

<li><a href=" ">Structure of CRCA     <img src="8.png" width="15px" height="20px"></img></a>
<ul>
<li><a href="login1.php?role=zonalapexbody">Zonal HQ Apex Body</a></li>
<li><a href="login1.php?role=cechq">(CEC) Headquarter<img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login1.php?role=hq">Headquarter(All HQ Offices )     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login1.php?role=hqexbody">a. HQ  Executive body</a></li>
</ul>
</li>

<li><a href="login1.php?role=division">Division      <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login1.php?role=divapexbody">a.Divn. Apex body </a></li>
<li><a href="login1.php?role=divexbody">b. Divn. executive body     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login1.php?role=divexbodybb">1. BB</a></li>
<li><a href="login1.php?role=divexbodyngp">2. NGP</a></li>
<li><a href="login1.php?role=divexbodybsl">3. BSL     <img src="9.png" width="15px" height="10px"></img></a>

<ul>
<li><a href="login1.php?role=divexbodyzrti">ZRTI</a></li>
</ul>
</li>
<li><a href="login1.php?role=divexbodypa">4. PA</a></li>
<li><a href="login1.php?role=divexbodysur">5. SUR     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login1.php?role=divexbodywm">WM/KWV</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href="login1.php?role=workshop"> Workshop     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login1.php?role=workshopapexbody">a. W/S. Apex  body	</a></li>
<li><a href="login1.php?role=workshopexbody">b. W/S/ Executive body      <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login1.php?role=workshopcwmpr">1. CWM (PR)     <img src="9.png" width="15px" height="10px"></img> </a>
<ul>
<li><a href="login1.php?role=workshopcwmmpr">Dy. CMM(M)PR</a></li>
</ul>
</li>
<li><a href="login1.php?role=workshopcwmmtn">2. CWM(MTN)     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login1.php?role=workshopcwemtn">Dy. M(CWE)MTN</a></li>
</ul>
</li>
<li><a href="login1.php?role=workshopcwmby">3. CWM S&T(BY)     <img src="9.png" width="15px" height="10px"></img> </a>
<ul>
<li><a href="login1.php?role=workshopcmby">a.CM(P&S)BY</a></li>
<li><a href="login1.php?role=workshopcmmcrd"> b.Dy.CMM(G)CRD </a></li>
</ul>
</li>
<li><a href="login1.php?role=workshopcwmbsl">4. CWM(POH)BSL     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login1.php?role=workshopcmmbsl">Dy.CMM(ACL)BSL</a></li>
</ul>
</li>
<li><a href="login1.php?role=workshopcmmnkrd">5. Dy. CMM(TMW)NKRD</a></li>
<li><a href="login1.php?role=workshopcwmmmr">6. CWM(CEW)MMR</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href="Awards1.php">Achievements & Awards</a></li>
<li><a href="events1.php">Schedule of Events</a></li>
<li><a href="executivecomitee1.php">Executive Committee</a></li>
<li><a href="contacus1.php">Contact Us</a> </li>
<li><a href="login.php">Login</a></li>
</ul>

</div>
<div style="height:500px;width:600px;background-color:white; margin-top:50px ;margin-left:50px; border-radius:12px;text-align:left;border:3px solid black; padding-top:10px; padding-left:30px;">

<?php
while($result1=mysqli_fetch_array($result))
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
	}
}

?>

</div>
<div>

<?php
clearstatcache();
?>


 <?php
clearstatcache();
?>

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



