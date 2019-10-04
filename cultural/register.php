<?php
session_start();
$_SESSION['message']='';
$mysqli=new mysqli('localhost','root','','login');

if($_SERVER['REQUEST_METHOD']=='POST'){
	
		if($_POST['password']==$_POST['confirmpassword']){
			$username=$mysqli->real_escape_string($_POST['username']);
			$email=$mysqli->real_escape_string($_POST['email']);
			$password=($_POST['password']);
			
			$sql="INSERT into users(username,email,password)"."VALUES('$username','$email','$password')";
			
			if($mysqli->query($sql)==true){
				$_SESSION['message']='Registration successful! Added $username to the database!';
				$_SESSION['username'] = $username;
				header("location:admin.php");
				
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
<center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">Logout</button></a></p>
<div style="background-color:black; height:8px;margin-top:-40px;">

</div>
<marquee><h3><font color="brown">Welcome to CRCA Website</font></h3></marquee>
<h2>
<?php
  echo  "" ." " .  $_SESSION['username'];
 ?></h2>
<div class="nav">
<ul>
<li><a href="AboutUs.php">Update AboutUs</a></li>
<li><a href="executivecomitee.php">Add Executive Members</a></li>
<li><a href="events2.php">Change Events</a></li>
<li><a href="designation.php">Add Designation</a></li>
<li><a href="contacus.php">Update Contact Details</a></li>
<li><a href="Awards2.php">Update Achievements</a></li>
<li><a href="register.php">Register User</a></li>
</ul>
</div>
</div>

<form class="form" name="myform" action="register.php" method="post" onsubmit="return validateform()">
<div id="name2" style="text-align:center">

<h2 style="color:green;">Create your account</h2>

<br>
<br>
<div class="alert alert-error"><?= $_SESSION['message'] ?></div>
<label ><b>Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
<input type="text" placeholder="  User Name  "  name="username" required/>
<br>
<br>
<label ><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
<input type="email" placeholder="  Email  "  name="email" required/>
<br>
<br>
<label ><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
<input type="password" placeholder="  Password  "  name="password" autocomplete="new-password" required/>
<br>
<br>
<label ><b>Confirm Password:&nbsp;&nbsp;&nbsp;</b></label>
<input type="password" placeholder="  Confirm Password  "  name="confirmpassword" autocomplete="new-password" required/>
<br>
<br>
<input type="submit" value="Register" name="register" class="button3 button1" style="width:100px" "height:40px;"/>


</div>
</form>
</body>
<div class="footer">
<div style="background-color:black; height:4px;margin-top:300px;text-align:center;">

</div>
<p>Site Managed and Maintained by Central Railways</p>
</div>

<div style="background-color:black; height:4px; margin-top:0px">


</div>
</html>