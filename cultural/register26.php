<?php
session_start();
$_SESSION['message']='';
$mysqli=new mysqli('localhost','root','','login');

if($_SERVER['REQUEST_METHOD']=='POST'){
	
		if($_POST['password']==$_POST['confirmpassword']){
			$username=$mysqli->real_escape_string($_POST['username']);
			$email=$mysqli->real_escape_string($_POST['email']);
			$password=md5($_POST['password']);
			
			$sql="INSERT into login26 (username,email,password)"."VALUES('$username','$email','$password')";
			
			if($mysqli->query($sql)==true){
				$_SESSION['message']='Registration successful! Added $username to the database!';
				$_SESSION['username'] = $username;
				header("location:home26.php");
				
			}
			else{
				$_SESSION['message']="User could not be added to the database!";
			}
			}
		else{
			$_SESSION['message']='Passwords do not match!';
		}
		
}
?>
<html>
<head>
<title>Registration Form</title>

<link rel="stylesheet" href="style1.css" type="text/css">
<script>  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
}
if(password.length<8){  
  alert("Password must be at least 8 characters long.");  
  return false;  
  }  
}  
</script>
<style>
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

<form class="form" name="myform" action="register26.php" method="post" onsubmit="return validateform()">
<div id="name2" style="text-align:center">

<h2 style="color:green;">Create your account</h2>

<br>
<br>
<div class="alert alert-error"><?= $_SESSION['message'] ?></div>
<label ><b>Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
<input type="text" placeholder="  User Name  " style="font-style:italic" name="username" required/>
<br>
<br>
<label ><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
<input type="email" placeholder="  Email  " style="font-style:italic" name="email" required/>
<br>
<br>
<label ><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
<input type="password" placeholder="  Password  "  style="font-style:italic" name="password" autocomplete="new-password" required/>
<br>
<br>
<label ><b>Confirm Password:&nbsp;&nbsp;&nbsp;</b></label>
<input type="password" placeholder="  Confirm Password  " style="font-style:italic" name="confirmpassword" autocomplete="new-password" required/>
<br>
<br>
<input type="submit" value="Register" name="register" class="button3 button1" style="width:100px" "height:40px;"/>


</div>
</form>
</body>
<div class="footer">
<p>Site Managed and Maintained by Central Railways</p>
</div>
</html>