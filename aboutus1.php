<?php
$conn=mysqli_connect('localhost','root','','login');
if(!$conn)
{
	die("Cannot Connect Please Try Again Later");
}
$designation="";
$res="";
if(isset($_POST['submit']) && !empty($_POST) )
{

	$aboutus = $_POST['aboutus'];
	$sql="UPDATE aboutus SET aboutus='$aboutus' WHERE id=1";
	$result=mysqli_query($conn,$sql);
	if(!$result)
	{
		echo "CANNOT INSERT PLEASE TRY AGAIN LATER";
		
	}
	/*else{
		echo "<script>
alert('SUCCESSFULLY ENTERED ');
window.location.href='designation.php';
</script>";
	}*/
$sql2="SELECT * FROM aboutus WHERE id=1";
$res=mysqli_query($conn,$sql2);
}



?>
<html>
<head>
<style>
textarea{
	resize:none;
}
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
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
form {
	background-color:white;
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

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

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
	height:100px;
	width:200px;
	
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}


span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>
<title>About Us</title>
<link rel="stylesheet" type="text/css" href="shell.css">

<link rel="stylesheet" href="style1.css" type="text/css">
 </head>
 <body>
 
<div class="container">
<center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="Home.php"><button class="button button2" style="width:70px" "height:50px;">Home</button></a></p><br>
<div style="background-color:black; height:8px;margin-top:-50px;">

</div>
<marquee><h4><font color="brown">Welcome to CRCA Website</font></h4></marquee>
<h1 style="text-align:center; margin-top:15px;text-shadow: 9px 8px 0px rgba(0,0,0,0.15); font-size:30px;">ABOUT US</h1>

</h2>
<div class="nav" style="margin-left:0px; margin-top:20px; ">
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
<div>  

  <div class="container">
   
</div>
<div>
<table class="t01" style="margin-top:50px;">
<tr>


</tr>

<?php
$sql2="SELECT * FROM aboutus WHERE id=1";
$res=mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($res))
{ ?>   
    <tr>
		 
	      <td><?php echo ($row['aboutus']); ?></td>
	      
	   </tr>  
	 <?php  } ?>

</table>
</div>
<footer> 
<div style="background-color:black; height:4px;margin-top:400px;text-align:center;">

</div>
<div class="footer"style="margin-top:-20px;">
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>


<div style="background-color:black; height:4px; margin-top:0px">


</div>
</body>
</html>