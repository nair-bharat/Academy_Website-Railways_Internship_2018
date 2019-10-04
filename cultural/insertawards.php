<?php
$conn = mysqli_connect('localhost','root','');

if(!$conn){
	echo "Not connected ";
}
mysqli_select_db($conn,'login');

$count=1;
$sql="SELECT * FROM achievements ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($conn,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

if($count == 1)
{
	

$s4="select * from achievements
order by id desc limit 1";
$s5=mysqli_query($conn,$s4);
$s6=mysqli_fetch_array($s5);
//$venue=$s6['venue'];
/*if($venue == '')
{
	$s7="delete from events order by id DESC LIMIT 1 ";
	mysqli_query($conn,$s7);
}*/
$count=$count+10;
}

echo $role;


 if(($_POST) && !empty($_POST)){
$Year = mysqli_real_escape_string($conn, $_POST['year']) ;
$Achievements= mysqli_real_escape_string($conn, $_POST['achievements']) ;
{
$sql ="INSERT into achievements (year,achievements,role) VALUES ('$Year','$Achievements','$role')";

if(mysqli_query($conn,$sql)){
 $message="inserted";
 echo "<script type='text/javascript'>alert('$message');</script>";
}
else{
$message="not inserted";
 echo "<script type='text/javascript'>alert('$message');</script>";
}
header("location=Awards.php");
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
<form action="Awards.php" method="POST">
Year :
<br>
<br>
<input type="text" name="year">
<br>
<br>
<br>
&nbsp;
Achievements :
<br>
<br>
<input type="text" name="achievements">
<br>
<br>
<br>
<input type="submit"  value="Insert Achievements">
</form>
</body>
</html>

