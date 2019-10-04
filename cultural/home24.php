<link rel="stylesheet" href="">

<?php session_start();
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
<center><a><font color="blue" size="30px"><img src="logocentral.jpg" height="40" width="50">Central Railway Cultural Academy</font><br><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">LOGOUT</button></a><br><br><br>
<h3 style="color:red;padding-left:1325px;">Welcome <?=$_SESSION['username'] ?></h3>
<div class="nav">
<ul>
<li><a href="About.html">About CRCA</a></li>

<li><a href=" ">Structure of CRCA     <img src="8.png" width="15px" height="20px"></img></a>
<ul>
<li><a href="login1.php">Zonal HQ Apex Body</a></li>
<li><a href="login2.php">(CEC) Headquarter     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login3.php">Headquarter(All HQ Offices )     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login4.php">a. HQ  Executive body</a></li>
</ul>
</li>

<li><a href="login5.php">Division      <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login6.php">a.Divn. Apex body </a></li>
<li><a href="login7.php">b. Divn. executive body     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login8.php">1. BB</a></li>
<li><a href="login9.php">2. NGP</a></li>
<li><a href="login10.php">3. BSL     <img src="9.png" width="15px" height="10px"></img></a>

<ul>
<li><a href="login11.php">ZRTI</a></li>
</ul>
</li>
<li><a href="login12.php">4. PA</a></li>
<li><a href="login13.php">5. SUR     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login14.php">WM/KWV</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href="login15.php"> Workshop     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login16.php">a. W/S. Apex  body	</a></li>
<li><a href="login17.php">b. W/S/ Executive body      <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login18.php">1. CWM (PR)     <img src="9.png" width="15px" height="10px"></img> </a>
<ul>
<li><a href="login19.php">Dy. CMM(M)PR</a></li>
</ul>
</li>
<li><a href="login20.php">2. CWM(MTN)     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login21.php">Dy. M(CWE)MTN</a></li>
</ul>
</li>
<li><a href="login22.php">3. CWM S&T(BY)     <img src="9.png" width="15px" height="10px"></img> </a>
<ul>
<li><a href="login23.php">a.CM(P&S)BY</a></li>
<li><a href="login24.php"> b.Dy.CMM(G)CRD </a></li>
</ul>
</li>
<li><a href="login25.php">4. CWM(POH)BSL     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href="login26.php">Dy.CMM(ACL)BSL</a></li>
</ul>
</li>
<li><a href="login27.php">5. Dy. CMM(TMW)NKRD</a></li>
<li><a href="login28.php">6. CWM(CEW)MMR</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href="Awards.html">Achievements & Awards</a></li>
<li><a href="events.php">Schedule of Events</a></li>
<li><a href="committee.php">Executive Committee</a></li>
<li><a href="news.html">Latest News</a></li>
<li><a href="Contact.php">Contact Us</a> </li>
<li><a href="register24.php">Register</a></li>
</ul>
</div>

</body>
<div class="footer2">
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>
</div>
</html>