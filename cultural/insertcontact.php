
<?php
$con = mysqli_connect('localhost','root','');

if(!$con){
	echo "Not connected ";
}
mysqli_select_db($con,'login');

//Main logic
$count=1;
$sql="SELECT * FROM contact ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($con,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

if($count == 1)
{
	

$s4="select * from contact
order by id desc limit 1";
$s5=mysqli_query($con,$s4);
$s6=mysqli_fetch_array($s5);
$address=$s6['address'];
/*if($address == '')
{
	$s7="delete from contact order by id DESC LIMIT 1 ";
	mysqli_query($con,$s7);
}*/
$count=$count+10;
}
echo $role;

//for insertion
 if(($_POST) && !empty($_POST)){
$address = mysqli_real_escape_string($con, $_POST['address']) ;
$email= mysqli_real_escape_string($con, $_POST['email']) ;
$no= mysqli_real_escape_string($con, $_POST['no']) ;
$s1name= mysqli_real_escape_string($con, $_POST['s1name']) ;
$s1no= mysqli_real_escape_string($con, $_POST['s1no']) ;
$s2name= mysqli_real_escape_string($con, $_POST['s2name']) ;
$s2no= mysqli_real_escape_string($con, $_POST['s2no']) ;
{
$sql ="INSERT into contact (address,email,no,s1name,s1no,s2name,s2no,role) VALUES ('$address','$email','$no','$s1name','$s1no','$s2name','$s2no','$role')";

if(mysqli_query($con,$sql)){
 $message="inserted";
 echo "<script type='text/javascript'>alert('$message');</script>";
}
else{
$message="not inserted";
 echo "<script type='text/javascript'>alert('$message');</script>";
}
header("location=Contact.php");
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
<form action="insertcontact.php" method="POST">
Address :
<br>
<br>
<input type="" name="address">
<br>
<br>
<br>
&nbsp;
Email :
<br>
<br>
<input type="text" name="email">
<br>
<br>
<br>
&nbsp;
Number :
<br>
<br>
<input type="text" name="no">
<br>
<br>
<br>
&nbsp;
Joint Secretary Name :
<br>
<br>
<input type="text" name="s1name">
<br>
<br>
<br>
&nbsp;
Joint Secretary Number :
<br>
<br>
<input type="text" name="s1no">
<br>
<br>
<br>
&nbsp;
Joint Secretary Name :
<br>
<br>
<input type="text" name="s2name">
<br>
<br>
<br>
&nbsp;
Joint Secretary Number :
<br>
<br>
<input type="text" name="s2no">
<br>
<br>
<br>

<br>
<br>
<br>
<input type="submit"  value="Insert New Members">
</form>
</body>
</html>

