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



{
	

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
  	
			$query = "INSERT INTO executive (fname,designation,email,contact)VALUES('$name','$des','$mail','$contact')";
	 $insert=mysqli_query($db, $query);
	 if($insert){
            echo "<script>
			alert('Value Inserted successfully.');
			window.location.href='executivecomitee.php';</script>";
        }
		else{
            echo "File upload failed, please try again.";
        } 
	 
	$result = mysqli_query($db, "SELECT * FROM members WHERE role='$role'") 
	or die("ERROR: ".mysqli_error($db));
	 header('location: executivecomitee.php'); 
	
		
		
	
	
}
}


if(isset($_POST['update'])){
	$id= mysql_real_escape_string($_POST['id']);
	$name= mysql_real_escape_string($_POST['name']);
	$des=mysql_real_escape_string($_POST['des']);
	$contact=mysql_real_escape_string($_POST['contact']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
	
	mysqli_query($db,"UPDATE executive SET fname='$name',designation='$des',contact='$contact',email='$email' WHERE id='$id'");
	
	header('location:executivecomitee.php');
}

if(isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($db,"DELETE FROM executive WHERE id=$id");
	header('location:executivecomitee.php');
}

$result = mysqli_query($db,"SELECT * FROM executive");







?>