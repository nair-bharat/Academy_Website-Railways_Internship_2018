<?php
       $year = "";
      $achievements = "";
	 $id= 0;
	 $edit_state = false;
	 

$conn=mysqli_connect('localhost','root','','login');
if(!$conn)
{
	die("Cannot Connect Please Try Again Later");
}

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
$year=$s6['year'];
/*if($year == '')
{
	$s7="delete from award order by id DESC LIMIT 1 ";
	mysqli_query($conn,$s7);
}*/
$count=$count+10;
}


if(isset($_POST['save'])){
	$year = mysqli_real_escape_string($conn,($_POST['year']));
   $achievements =mysqli_real_escape_string($conn,( $_POST['achievements']));
  
	 
	 $query = "INSERT INTO achievements(year,achievements,role)VALUES('$year','$achievements','$role')";
	 mysqli_query($conn, $query);
	 header('location: achiv & award.php');
}




if(isset($_POST['update'])){
	$year= mysql_real_escape_string($_POST['year']);
	$achievements= mysql_real_escape_string($_POST['achievements']);
	$id=mysql_real_escape_string($_POST['id']);
	
	mysqli_query($conn,"UPDATE achievements SET year='$year',achievements='$achievements' WHERE id=$id");
	header('location:achiv & award.php');
}


if(isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($conn,"DELETE FROM achievements WHERE id=$id");
	header('location:achiv & award.php');
}

$query="SELECT * FROM achievements where role='$role' " ;
$result=mysqli_query($conn,$query);







?>
