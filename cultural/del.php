<?php
$conn=mysqli_connect('localhost','root','','login');
if(!$conn)
{
	die("Cannot Connect Please Try Again Later");

}
if(isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($conn,"DELETE FROM designation WHERE id=$id");
	header('location:designation.php');
}
?>