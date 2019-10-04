<?php
$conn = mysqli_connect('localhost','root','');

if(!$conn){
	echo "Not connected ";
}
mysqli_select_db($conn,'login');

$count=1;
$sql="SELECT * FROM events ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($conn,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

if($count == 1)
{
	

$s4="select * from events
order by id desc limit 1";
$s5=mysqli_query($conn,$s4);
$s6=mysqli_fetch_array($s5);
$venue=$s6['venue'];
if($venue == '')
{
	$s7="delete from events order by id DESC LIMIT 1 ";
	mysqli_query($conn,$s7);
}
$count=$count+10;
}

echo $role;

 if(($_POST) && !empty($_POST)){
$eventname = ($_POST['eventname']) ;
$venue= mysqli_real_escape_string($conn, $_POST['venue']) ;
$date = mysqli_real_escape_string($conn, $_POST['date']) ;
$time = mysqli_real_escape_string($conn, $_POST['time']) ;
{
$sql ="INSERT into events (eventname,venue,date,time,role) VALUES ('$eventname','$venue','$date','$time','$role')";

if(mysqli_query($conn,$sql)){
 $message="inserted";
 echo "<script type='text/javascript'>alert('$message');</script>";

}
else{
$message="not inserted";
 echo "<script type='text/javascript'>alert('$message');</script>";
}
header("location:events.php");
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
<form action="insertevents.php" method="POST">
EventName :
<br>
<br>
<input type="text" name="eventname">
<br>
<br>
<br>
&nbsp;
Venue :
<br>
<br>
<input type="text" name="venue">
<br>
<br>
<br>
&nbsp;
Date :
<br>
<br>
<input type="text" name="date">
<br>
<br>
<br>
&nbsp;
Time :
<br>
<br>
<input type="text" name="time">
<br>
<br>
<br>
<input type="submit"  value="Insert New Events">
</form>
</body>
</html>

