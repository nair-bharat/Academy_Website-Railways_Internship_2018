<?php 
  $conn=mysqli_connect('localhost','root','','login');
  if (!$conn){
    die("DB Connection failed " . mysqli_error($conn));
  }
  $result1="";
  $result="";
  $res="sam";
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
 $res=$result1['role'];
 echo $res;
 $s="INSERT INTO events(role,no) VALUES ('$res','$res1')";
 mysqli_query($conn,$s);
 if($result1['role']=="admin")
 {
	 header("Location:admin1.php");
	 
 }	 
 else
 {
	 header("location:events.php");
	 echo $res;
 }
 
       
    
   }
  if($count == 0){ echo "Incorrect Username/Password <br /> Enter correct details";
     }

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
<li><a href="Awards.html">Achievements & Awards</a></li>
<li><a href=" ">Schedule of Events</a></li>
<li><a href="">Executive Committee</a></li>
<li><a href="news.php">Latest News</a></li>
<li><a href="Contact.html">Contact Us</a> </li>
<li><a href="login.php">Login</a></li>
</ul>
</div>
</div>
<form method="POST">
<div id="name2" style="text-align:center">
<h2 style="color:green;">LOGIN HERE</h2>
<br>
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

<div class="footer">
<p>Site Managed and Maintained by Central Railways</p>
</div>
</html>