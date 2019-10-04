<?php
session_start();
$con = mysqli_connect('localhost','root','','contact');
if(isset($_POST['submitbtn'])){

if(!$con){
	echo "Not connected ";
}

$Address=mysqli_real_escape_string($con,$_POST['address']);
$Email=mysqli_real_escape_string($con,$_POST['email']);
$No=mysqli_real_escape_string($con,$_POST['no']);
$s1Name=mysqli_real_escape_string($con,$_POST['s1name']);
$s1No=mysqli_real_escape_string($con,$_POST['s1no']);
$s2Name=mysqli_real_escape_string($con,$_POST['s2name']);
$s2No=mysqli_real_escape_string($con,$_POST['s2no']);

$sql ="INSERT into help(address,email,no,s1name,s1no,s2name,s2no)"."VALUES('$Address','$Email',$No,'$s1Name','$s1No','$s2Name','$s2No')";
$result=mysqli_query($con,$sql);
if(!$result){
	echo "not inserted";
}
}
?>


<html>
<head>
<style>
body{
background-color:yellow;

}
div {
	
    background-color: lightgrey;
    width: 900px;
    border: 25px solid green;
    padding: 20px;
    margin: 25px;
	margin-left:100px;
}


</style>

</head>
<body>
<div>
<form align="center" action="saw.php" method="POST">
 ENTER YOUR ADDRESS<input type="text" placeholder="enter address" name="address"><br><br><br>
 ENTER YOUR EMAIL-ID<input type="email" placeholder="email" name="email"><br><br><br>
 ENTER LANDLINE NUMBER<input type="text" placeholder="number" name="no"><br><br><br>
 JOINT SECRETARY NAME<input type="text" placeholder="name" name="s1name">

 JOINT SECRETARY NUMBER<input type="text" placeholder="number" name="s1no"><br><br><br>
JOINT SECRETARY NAME<input type="text" placeholder="name" name="s2name">

 JOINT SECRETARY NUMBER<input type="text" placeholder="number" name="s2no"><br><br><br>
 <input type="submit" name="submitbtn" value="submit">

</form>
</div>

</body>



</html>











