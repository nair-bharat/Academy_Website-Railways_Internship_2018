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
<center><a><font color="blue" size="30px"><img src="logocentral.jpg" height="40" width="50">Central Railway Cultural Academy</font><br>
<marquee><h4><font color="brown">Welcome to CRCA Website</font></h4></marquee>
<div class="nav">
<ul>
<li><a href="About.html">About CRCA</a></li>

<li><a href=" ">Structure of CRCA     <img src="8.png" width="15px" height="20px"></img></a>
<ul>
<li><a href=" ">Zonal HQ Apex Body</a></li>
<li><a href=" ">(CEC) Headquarter     <img src="9.png" width="15px" height="10px"></img></a>
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
<li><a href="events.php">Schedule of Events</a></li>
<li><a href="committee.php">Executive Committee</a></li>
<li><a href="news.html">Latest News</a></li>
<li><a href="Contact.php">Contact Us</a> </li>
<li><a href="register.php">Register</a></li>
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
mysqli_select_db($con,'awardsdb');

$sql = "SELECT * from awards";

$record=mysqli_query($con,$sql);

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
	echo "<tr>" ;
	echo "<td>".$records['year']."</td>";
	echo "<td>".$records['achievements']."</td>";
	echo "</tr>" ;
}
echo "</center>"
?>

</table>
</center>
<div style="margin-top:80px; margin-left:500px;">
<a href="insertawards.php"><button class="button3 button1" style="width:180px" "height:50px;">Add event</button></a>
<a href="updateawards.php"><button class="button3 button1" style="width:180px" "height:50px;">Update event</button></a>
<a href="deleteawards.php"><button class="button3 button1" style="width:180px" "height:50px;">Delete event</button></a><br><br><br>

</div>
</body>

<div class="footer">
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>
</div>
</html>