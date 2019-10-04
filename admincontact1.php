<?php
//make conncection

$con=mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con,'login');

$sql = "SELECT * from help";

$record=mysqli_query($con,$sql);

?>


<html>
<head>

<title>ContactDetails</title>
<link rel="stylesheet" href="style1.css" type="text/css"></link>
</head>
<body>
<div class="container">
<center><font color="blue" size="30px"><img src="logocentral.jpg" height="40" width="50">Central Railway Cultural Academy</font><a href="Home.php"><button class="button button2" style="width:70px" "height:50px;">Home</button></a><br>
<marquee><h4><font color="brown">Welcome to CRCA Website</font></h4></marquee>
<div class="nav">
<ul>

<li><a href="About.html">About CRCA</a></li>

<li><a href=" ">Structure of CRCA     <img src="8.png" width="15px" height="20px"></img></a>
<ul>
<li><a href=" ">Zonal HQ Apex Body</a></li>
<li><a href=" ">(CEC) Zonal Headquarter     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">Headquarter(All HQ Offices )     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">a. HQ  Executive body</a></li>
</ul>
</li>

<li><a href=" ">Division      <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">a.Divn. Apex body </a></li>
<li><a href=" ">b. Divn. executive body     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">1. BB</a></li>
<li><a href=" ">2. NGP</a></li>
<li><a href=" ">3. BSL     <img src="9.png" width="15px" height="10px"></img></a>

<ul>
<li><a href=" ">ZRTI</a></li>
</ul>
</li>
<li><a href=" ">4. PA</a></li>
<li><a href=" ">5. SUR     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">WM/KWV</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href=" "> Workshop     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">a. W/S. Apex  body	</a></li>
<li><a href=" ">b. W/S/ Executive body      <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">1. CWM (PR)     <img src="9.png" width="15px" height="10px"></img> </a>
<ul>
<li><a href=" ">Dy. CMM(M)PR</a></li>
</ul>
</li>
<li><a href=" ">2. CWM(MTN)     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">Dy. M(CWE)MTN</a></li>
</ul>
</li>
<li><a href=" ">3. CWM S&T(BY)     <img src="9.png" width="15px" height="10px"></img> </a>
<ul>
<li><a href=" ">a.CM(P&S)BY</a></li>
<li><a href=" "> b.Dy.CMM(G)CRD </a></li>
</ul>
</li>
<li><a href=" ">4. CWM(POH)BSL     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">Dy.CMM(ACL)BSL</a></li>
</ul>
</li>
<li><a href=" ">5. Dy. CMM(TMW)NKRD</a></li>
<li><a href=" ">6. CWM(CEW)MMR</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href="Awards.php">Achievements & Awards</a></li>
<li><a href=" ">Schedule of Events</a></li>
<li><a href="">Executive Committee</a></li>
<li><a href="news.php">Latest News</a></li>
<li><a href="Contact.php">Contact Us</a> </li>
<li><a href="login.php">Login</a></li>
</ul>
</div>
</div>
<div style="margin-top:10px";>
<center>
<table border="10" cellspacing="1" cellpadding="1" style="margin-top:-450px";"text-align=center";>
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
</center>
</div>

<div class="footer">
<p>Site Managed and Maintained by Central Railways</p>

</div>
</body>

</html>