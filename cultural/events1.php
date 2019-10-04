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
	
	padding-left:150px;
	padding-right:150px;
	
}



</style>
</head>
<body>
<div class="container">
<center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="Home.php"><button class="button button2" style="width:70px" "height:50px;">Home</button></a></p><br>
<div style="background-color:black; height:8px;margin-top:-50px;">

</div>
<marquee><h3><font color="brown">Welcome to CRCA Website</font></h3></marquee>
<div class="nav">
<ul >
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
mysqli_select_db($con,'eventsdb');

$sql = "SELECT * from events";

$record=mysqli_query($con,$sql);

?>
<center>
<table border="3" cellspacing="1" cellpadding="1" height="80px" width="1100px" style="margin-top:100px";"text-align:center";>
<tr>
<th>Event No</th>
<th>Event Name</th>
<th>Time</th>
</tr>

<?php
echo "<center>";
while($records=mysqli_fetch_array($record))//we can also use assoc in place of array
{
	echo "<tr>" ;
	echo "<td>".$records['eventno']."</td>";
	echo "<td>".$records['eventname']."</td>";
	echo "<td>".$records['time']."</td>";
	echo "</tr>" ;
}
echo "</center>"
?>

</table>
</center>
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