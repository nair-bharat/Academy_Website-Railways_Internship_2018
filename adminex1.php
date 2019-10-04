<?php

      $name = "";
    $des = "";
     $contact = "";	
	 $id= 0;
	
	 $edit_state = false;
	 
$db = mysqli_connect('localhost','root','','login');
if(!$db)
{
	 die("Error: ".mysqli_error($db));
}
$count=1;
$sql="SELECT * FROM members ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($db,$sql);

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

if($count == 1)
{
	

$s4="select * from members
order by id desc limit 1";
$s5=mysqli_query($db,$s4);
$s6=mysqli_fetch_array($s5);
$address=$s6['email'];
/*if($address == '')
{
	$s7="delete from members order by id DESC LIMIT 1 ";
	mysqli_query($db,$s7);
}
$count=$count+10;
}*/



if(isset($_POST['save'])){
   $name = $_POST['name'];
    $des = $_POST['des'];
     $contact = $_POST['contact'];
	 $mail= $_POST['email'];
  	
			$query = "INSERT INTO members (fname,designation,email,contact,role)VALUES('$name','$des','$mail','$contact','$role')";
	 $insert=mysqli_query($db, $query);
	 if($insert){
            echo "<script>
			alert('Value Inserted successfully.');
			window.location.href='adminmember.php';</script>";
        }
		else{
            echo "File upload failed, please try again.";
        } 
	 
	$result = mysqli_query($db, "SELECT * FROM members WHERE role='$role'") 
	or die("ERROR: ".mysqli_error($db));
	 header('location: adminmember.php'); 
	
		
		
	
	
}
}


if(isset($_POST['update'])){
	$id= mysql_real_escape_string($_POST['id']);
	$name= mysql_real_escape_string($_POST['name']);
	$des=mysql_real_escape_string($_POST['des']);
	$contact=mysql_real_escape_string($_POST['contact']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
	
	mysqli_query($db,"UPDATE members SET fname='$name',designation='$des',contact='$contact',email='$email' WHERE id=$id");
	
	header('location:adminmember.php');
}

if(isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($db,"DELETE FROM members WHERE id=$id");
	header('location:adminmember.php');
}

$result = mysqli_query($db,"SELECT * FROM members WHERE role='$role'");







?>