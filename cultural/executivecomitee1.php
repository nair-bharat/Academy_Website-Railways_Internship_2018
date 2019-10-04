<?php include('adminex3.php'); 
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$edit_state=true;
	$rec = mysqli_query($db,"SELECT * FROM employee WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$name = $record['fname'];
	$des = $record['designation'];
	$contact = $record['contact'];
	$image= $record['image'];
}



?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width:100%;
	background-color:white;
}
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 2px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
 th {
    background-color: black;
    color: white;
}

</style>
<title>Executive Committee</title>
<link rel="stylesheet" type="text/css" href="shell.css">

<link rel="stylesheet" href="style1.css" type="text/css">
 </head>
 <body>
 <div class="container">
<center><font color="blue" size="20px"><p style="font-size:30px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="Home.php"><button class="button button2" style="width:70px" "height:50px;">Home</button></a></p><br>
<div style="background-color:black; height:8px;margin-top:-40px;">

</div>

<h1 style="text-align:center; margin-top:15px;text-shadow: 9px 8px 0px rgba(0,0,0,0.15); font-size:30px;">EXECUTIVE MEMBERS</h1>

</h2>
<div class="nav" style=" margin-top:20px; ">
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
<li><a href="committee1.php">Executive Committee</a></li>
<li><a href="news.php">Latest News</a></li>
<li><a href="Contact.php">Contact Us</a> </li>
<li><a href="login.php">Login</a></li>
</ul>
</div>
<div style="margin-top:-30px; margin-left:100px;">
<div style="margin-left:-150px">
<br>
<br>
<table class="t01">
    <thead>
	  <tr>
	    
	    <th>DESIGNATION</th>
		<th>FULLNAME</th>
		<th>CONTACT</th>
		<th>EMAIL</image>
		
		
	  </tr>
	</thead>
	
	   <?php while($row = mysqli_fetch_array($result)){ ?>
	      <?php if($row['fname'] != null){ ?>
		 <tr>
		 
	      <td><?php echo ($row['designation']); ?></td>
		  <td><?php echo ($row['fname']);?></td>
		  <td><?php echo ($row['contact']);?></td>
		  <td><?php echo ($row['email']);?></td>
		 
	      
	   </tr>  
	 <?php  } ?>
	    <?php  } ?>
   
  </table>
  </div>
 
  
	 
  </div>
  </form>
<footer> 
<div style="background-color:black; height:4px;margin-top:600px;text-align:center;">

</div>
<div class="footer"style="margin-top:-20px;">
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>


<div style="background-color:black; height:4px; margin-top:0px">


</div>
</body>
</html>
</body>
</html>