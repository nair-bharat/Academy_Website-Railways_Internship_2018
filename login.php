<?php 
  $conn=mysqli_connect('localhost','root','','login');
  if (!$conn){
    die("DB Connection failed " . mysqli_error($conn));
  }
  $result1="";
  $result="";
  $role="sam";
  $res1="";

if ($_POST){
	
	$count=2; 
    $username = $_POST['username'];
    $password = ($_POST['password']);     
    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' ";   
    $result = mysqli_query($conn,$sql);
    $count= mysqli_num_rows($result);
	
     if($count == 1) 
      { 
       
	  
	    session_start();
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        echo "You are logged in";
		
		$result1=mysqli_fetch_array($result);
 $role=$result1['role'];
 echo $role;
 $s="INSERT INTO events(eventname,venue,date,time,role) VALUES ('','','','','$role')";
 $s1="INSERT INTO contact(address,email,no,s1name,s1no,s2name,s2no,role) VALUES ('','','','','','','','$role')";
 $s2="INSERT INTO achievements(year,achievements,role) VALUES ('','','$role')";
 $s3="INSERT INTO achievements(year,achievements,role) VALUES ('','','$role')";
 $s4="INSERT INTO members(fname,designation,email,contact,role) VALUES ('','','','','$role')";
 $s5="INSERT INTO employee(fname,designation,contact,image,imagename,age,dob,post,role) VALUES ('','','','','','','','','$role')";
 mysqli_query($conn,$s);
 mysqli_query($conn,$s1);
 mysqli_query($conn,$s2);
 mysqli_query($conn,$s3);
 mysqli_query($conn,$s4);
 mysqli_query($conn,$s5);
 if($result1['role']=="admin")
 {
	 header("Location:admin1.php");
	 
 }	 
 else
 {
	 header("location:admin.php");
	 echo $role;
 }
 
       
    
   }
   /*
  if($count == 0){ echo "Incorrect Username/Password <br /> Enter correct details";
     }
	 */

}


 
 
 
 
 
 

?>

<html>
<head>
<title>LoginPage</title>
<link rel="stylesheet" href="style1.css" type="text/css"></link>
<style>
body{
	
}
.button3 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 40px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
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
format{
	color:red;
		margin-left:475px;
	margin-top:245px;
	vertical-align:bottom;
}
input{
	border-radius:7px;
	
}

</style>
</head>
<body>
<div class="container">
<center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="Home.php"><button class="button button2" style="width:70px" "height:50px;">Home</button></a></p>
<div style="background-color:black; height:8px;margin-top:-40px;">

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
<form method="POST">
<div id="name2" style="text-align:center">
<h2 style="color:green;">LOGIN HERE</h2>
<br>
<br>
<?php 
  $conn=mysqli_connect('localhost','root','','login');
  if (!$conn){
    die("DB Connection failed " . mysqli_error($conn));
  }
  $result1="";
  $result="";
  $role="sam";
  $res1="";

if ($_POST){
	
	$count=2; 
    $username = $_POST['username'];
    $password = ($_POST['password']);     
    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' ";   
    $result = mysqli_query($conn,$sql);
    $count= mysqli_num_rows($result);
	
     if($count == 1) 
      { 
       
	  
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        echo "You are logged in";
		
		$result1=mysqli_fetch_array($result);
 $role=$result1['role'];
 echo $role;
 $s="INSERT INTO events(eventname,venue,date,time,role) VALUES ('','','','','$role')";
 $s1="INSERT INTO contact(address,email,no,s1name,s1no,s2name,s2no,role) VALUES ('','','','','','','','$role')";
 $s2="INSERT INTO achievements(year,achievements,role) VALUES ('','','$role')";
 $s3="INSERT INTO achievements(year,achievements,role) VALUES ('','','$role')";
 $s4="INSERT INTO members(fname,designation,email,contact,role) VALUES ('','','','','$role')";
 $s5="INSERT INTO employee(fname,designation,contact,image,imagename,age,dob,post,role) VALUES ('','','','','','','','','$role')";
 mysqli_query($conn,$s);
 mysqli_query($conn,$s1);
 mysqli_query($conn,$s2);
 mysqli_query($conn,$s3);
 mysqli_query($conn,$s4);
 mysqli_query($conn,$s5);
 if($result1['role']=="admin")
 {
	 header("Location:admin1.php");
	 
 }	 
 else
 {
	 header("location:admin.php");
	 echo $role;
 }
 
       
    
   }
   /* TO enter the msg below login */
  if($count == 0){ echo "Incorrect Username/Password <br /> Enter correct details";
     }

}


 
 
 
 
 
 

?>
<br>
<label for=" first name"><b style="color:red">Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
<input type="text" id="first name" size="20" placeholder="   Enter the Username" name="username" required="required">
<br>
<br>
<label for=" last name"><b style="color:red"> Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
<input type="password" id="password" size="20" placeholder="   Enter the password" name="password" required="required">
<br>
<br>
<br>
<br>
<button class="button3 button1" style="width:180px" "height:50px;">Submit</button>
</div>
</form>
</body>

<div class="footer" style="margin-top:50px;">
<div style="background-color:black; height:4px;margin-top:300px;text-align:center;">

</div>
<p>Site Managed and Maintained by Central Railways</p>
</div>
<div style="background-color:black; height:4px; margin-top:0px">


</div>
</html>