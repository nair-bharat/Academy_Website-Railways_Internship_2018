
<?php
$conn=mysqli_connect('localhost','root','','login');
if(!$conn)
{
	die("Cannot Connect Please Try Again Later");
}
$designation="";
$res="";
if(isset($_POST['submit']) && !empty($_POST) )
{

	$designation = $_POST['designation'];
	$sql="INSERT INTO designation (designation) VALUES ('$designation')";
	$result=mysqli_query($conn,$sql);
	if(!$result)
	{
		echo "CANNOT INSERT PLEASE TRY AGAIN LATER";
		
	}
	/*else{
		echo "<script>
alert('SUCCESSFULLY ENTERED ');
window.location.href='designation.php';
</script>";
	}*/
$sql2="SELECT * FROM designation";
$res=mysqli_query($conn,$sql2);
}



?>
<html>
<head>
<style>
table {
    width:100%;
	background-color:white;
}
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 2px;
    text-align: center;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
 th {
    background-color: black;
    color: white;
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

form {
	background-color:white;
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
	height:100px;
	width:200px;
	
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}



span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<title>Designation</title>
<link rel="stylesheet" href="style1.css" type="text/css">
 </head>
 <body>
 <div class="container">
<center><font color="blue" size="20px"><p style="font-size:30px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">Logout</button></a></p><br>
<div style="background-color:black; height:8px;margin-top:-40px;">

</div>

<h2 style="font-size:30px; text-align:center;"><?php
  session_start();
  echo  "Welcome" ." " .  $_SESSION['username'];
 ?></h2>
<div class="nav">
<ul>
<li><a href="AboutUs.php">Update AboutUs</a></li>
<li><a href="executivecomitee.php">Add Executive Members</a></li>
<li><a href="events2.php">Change Events</a></li>
<li><a href="designation.php">Add Designation</a></li>
<li><a href="contacus.php">Update Contact Details</a></li>
<li><a href="Awards2.php">Update Achievements</a></li>
<li><a href="register.php">Register User</a></li>
</ul>

</div>
<div>
<br>
<form action="" method="post">
  

 
    <label><b>DESIGNATION</b></label>
    <input type="text" placeholder="Enter Designation" name="designation" required>
 <button type="submit" class="button" name="submit">SUBMIT</button>
</form>
<br>
<br>
<br>
<br>
<div>
<table class="t01">
<tr>
<th>DESIGNATION</th>
<th>action</th>

</tr>

<?php
$sql2="SELECT * FROM designation";
$res=mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($res))
{ ?>   
    <tr>
		 
	      <td><?php echo ($row['designation']); ?></td>
		  		  <td>
		    <a class="del_btn" href="del.php?del=<?php echo $row['id'];?>">Delete</a>
		  </td>	
	      
	   </tr>  
	 <?php  } ?>

</table>
</div>
<footer>
<br>
<br>
<br>
<br>
<br> 
<div class="footer">
<div style="background-color:black; height:4px;margin-top:400px;text-align:center;">

</div>
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>


<div style="background-color:black; height:4px; margin-top:0px">


</div>
</div>
</body>
</html>