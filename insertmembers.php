<?php
$con = mysqli_connect('localhost','root','');

if(!$con){
	echo "Not connected ";
}
mysqli_select_db($con,'membersdb');

 if(($_POST) && !empty($_POST)){
$Name = mysqli_real_escape_string($con, $_POST['name']) ;
$Designation= mysqli_real_escape_string($con, $_POST['designation']) ;
$Contact = mysqli_real_escape_string($con, $_POST['contact']) ;
{
$sql ="INSERT into members (name,designation,contact) VALUES ('$Name','$Designation','$Contact')";

if(mysqli_query($con,$sql)){
 $message="inserted";
 echo "<script type='text/javascript'>alert('$message');</script>";
}
else{
$message="not inserted";
 echo "<script type='text/javascript'>alert('$message');</script>";
}
header("location=home.php");
 }
 }
?>


<html>
<head>
<title></title>
<style>
input{
	height:50px;
	border-radius:10px;
	width:1250px;
	hover:green;
}
</style>

</head>
<body>
<form action="insertmembers.php" method="POST">
Name :
<br>
<br>
<input type="" name="name">
<br>
<br>
<br>
&nbsp;
Designation :
<br>
<br>
<input type="text" name="designation">
<br>
<br>
<br>
&nbsp;
Contact :
<br>
<br>
<input type="text" name="contact">
<br>
<br>
<br>
<input type="submit"  value="Insert New Members">
</form>
</body>
</html>

