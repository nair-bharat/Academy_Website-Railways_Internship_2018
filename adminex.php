<?php

      $name = "";
    $des = "";
     $contact = "";	
	 $id= 0;
	
	 $edit_state = false;
	 
$db = mysqli_connect('localhost','root','','login');
$count=1;
$sql="SELECT * FROM employee ORDER BY id DESC LIMIT 1";
$s1=mysqli_query($db,$sql) 
or die("esbdh" .mysqli_error($db));

$s2=mysqli_fetch_array($s1);
$role=$s2['role'];

if($count == 1)
{
	

$s4="select * from employee
order by id desc limit 1";
$s5=mysqli_query($db,$s4)
or die("esbdh" .mysqli_error($db));

$s6=mysqli_fetch_array($s5);

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
	 $dob=$_POST['dob'];
	 $doj=$_POST['doj'];
	 $today=date("Y-m-d");
	 echo $today;
	 $age = (date('Y') - date('Y',strtotime($dob)));
    echo $age;
  	$file=$_FILES['image'];
	$filename=$_FILES['image']['name'];
	echo $filename;
	echo "<br>";
	$filetmpname=$_FILES['image']['tmp_name'];
	echo $filetmpname;
	echo "<br>";
	$fileerror=$_FILES['image']['error'];
	echo $fileerror;
	echo "<br>";
	$filetype=$_FILES['image']['type'];
	echo $filetype;
	echo "<br>";
	$filesize=$_FILES['image']['size'];
	echo $filesize;
	echo "<br>";
	$fileext=explode('.',$filename);
	$fileextension=strtolower(end($fileext));
	echo $fileextension;
	$allowed= array('jpg','jpeg');
	
		if(in_array($fileextension,$allowed))
		{
			$filenamenew= uniqid('',true).'.'.$fileextension;
			$filedestination= 'image/'.$filenamenew;
			move_uploaded_file($filetmpname,$filedestination);
			echo $filedestination;
			$query = "INSERT INTO employee(fname,designation,contact,image,imagename,age,dob,post,role)VALUES('$name','$des','$contact','$imgContent','$filedestination','$age','$dob','$doj','$role')";
	 $insert=mysqli_query($db, $query);
	 if($insert){
            echo "<script>
			alert('File uploaded successfully.');
			window.location.href='adminexecutive.php';</script>";
        }
		else{
            echo "File upload failed, please try again.";
        } 
	 
	$result = mysqli_query($db, "SELECT * FROM employee WHERE role='$role'") ;
	 header('location: adminexecutive.php'); 
	}
		else{
			echo "<script>
alert('image extension can be .jpg or .jpeg');
window.location.href='adminexecutive.php';
</script>";
		}
		
	
	if(isset($_FILES['image'])) {
    $imgContent = $_FILES['image']['tmp_name'];   
    
  

  	
  
	}
	 
	} 
}


if(isset($_POST['update'])){
	$id= mysqli_real_escape_string($db,$_POST['id']);
	$name= mysqli_real_escape_string($db,$_POST['name']);
	$des=mysqli_real_escape_string($db,$_POST['des']);
	$contact=mysqli_real_escape_string($db,$_POST['contact']);
	$file=$_FILES['image'];
	$filename=$_FILES['image']['name'];
	echo $filename;
	echo "<br>";
	$filetmpname=$_FILES['image']['tmp_name'];
	echo $filetmpname;
	echo "<br>";
	$fileerror=$_FILES['image']['error'];
	echo $fileerror;
	echo "<br>";
	$filetype=$_FILES['image']['type'];
	echo $filetype;
	echo "<br>";
	$filesize=$_FILES['image']['size'];
	echo $filesize;
	echo "<br>";
	$fileext=explode('.',$filename);
	$fileextension=strtolower(end($fileext));
	echo $fileextension;
	$allowed= array('jpg','jpeg');
	if($fileerror === 0)
	{
		if(in_array($fileextension,$allowed))
		{
			$filenamenew= uniqid('',true).'.'.$fileextension;
			$filedestination= 'image/'.$filenamenew;
			move_uploaded_file($filetmpname,$filedestination);
			echo $filedestination;
	
	mysqli_query($db,"UPDATE employee SET fname='$name',designation='$des',contact='$contact',image='$imgContent',imagename='$filedestination' WHERE id=$id");
		}
	}
	header('location:adminexecutive.php');
}

if(isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($db,"DELETE FROM employee WHERE id=$id");
	header('location:adminexecutive.php');
}

$result = mysqli_query($db,"SELECT * FROM employee WHERE role='$role'");







?>
