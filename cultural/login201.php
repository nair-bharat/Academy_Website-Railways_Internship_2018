<?php 
  $conn=mysqli_connect('localhost','root','','');
  if (!$conn){
    die("DB Connection failed " . mysqli_error($conn));
  }
  $result1="";
  $result="";
  $res="sam";
  $res1="";

if ($_POST){
	
	$count=2; 
    $firstname = $_POST['username'];
    $password = ($_POST['password']);     
    $sql = "SELECT * FROM `register` WHERE `firstname` = '$firstname' AND `password` = '$password' ";   
    $result = mysqli_query($conn,$sql);
    $count= mysqli_num_rows($result);
	
     if($count == 1) 
      { 
       
	  
	    session_start();
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $firstname;
        echo "You are logged in";
		
		$result1=mysqli_fetch_array($result);
 $res=$result1['role'];
 echo $res;
 $s="INSERT INTO contact(role,no) VALUES ('$res','$res1')";
 mysqli_query($conn,$s);
 if($result1['role']=="admin")
 {
	 header("Location:admin1.php");
	 
 }	 
 else
 {
	 header("location:admincontact.php");
	 echo $res;
 }
 
       
    
   }
  if($count == 0){ echo "Incorrect Username/Password <br /> Enter correct details";
     }

}


 
 
 
 
 
 

?>



<html>
<head>
<style>
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
body{
	background-color:#D2691E
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

.container {
    padding: 16px;
	height:175px;
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
<script src="login.js" action="admin.php">
</script>
</head>
<body>
<div style="margin-top:-30px; font-size:20px; height:60px; background-color:#F8F8FF; margin-bottom:5px;">
<p style="font-size:30px; text-decoration:underline;text-align:center; padding-top:15px; font-family:sans-serif;
    color: black;
    text-shadow: 2px 2px 4px black;}">CENTRAL RAILWAYS CULTURAL ACADEMY</p></div>

</div>

<h1 style="text-align:center; margin-top:15px;text-shadow: 9px 8px 0px rgba(0,0,0,0.15); font-size:25px;">LOGIN</h1>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="login.png" alt="Avatar" class="avatar" style="margin-left:600px;" >
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" class="button">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>


