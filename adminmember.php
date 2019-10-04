<?php include('adminex1.php');
$name="";
$des=""; 
$email="";
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$edit_state=true;
	$rec = mysqli_query($db,"SELECT * FROM members WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$name = $record['fname'];
	$des = $record['des'];
	$email=$record['email'];
	$contact = $record['contact'];
}



?>
<!DOCTYPE html>
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
    text-align: left;
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
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.edit_btn{
text-decoration:none;
padding:2px 5px;
background:green;
color:white;
border-radius:3px;
}
.del_btn{
text-decoration:none;
padding:2px 5px;
background:#800000;
color:white;
border-radius:3px;
}
</style> 
<title>AdminMemberUser</title>
<link rel="stylesheet" type="text/css" href="shell.css">

<link rel="stylesheet" href="style1.css" type="text/css">
 </head>
 <body>
 
<center><font color="blue" size="20px"><p style="font-size:40px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">Logout</button></a></p><br>
<div style="background-color:black; height:8px;margin-top:-50px;">

</div>
<marquee><h4><font color="brown">Welcome to CRCA Website</font></h4></marquee>
</div>

<h2 style="font-size:30px; text-align:center;"><?php
  session_start();
  echo  "Welcome" ." " .  $_SESSION['username'];
 ?></h2>
<div class="nav"style="margin-left:160px;">
<ul>
<li><a href="adminexecutive.php">Add Cultural Members</a></li>
<li><a href="events.php">Change Events</a></li>
<li><a href="adminmember.php">Add CRCA Members</a></li>
<li><a href="admincontact.php">Update Contact Details</a></li>
<li><a href="Awards.php">Update Achievements</a></li>
</ul>

</div>
  <table class="t01">
    <thead>
	  <tr>
	    
	    <th>DESIGNATION</th>
		<th>FULLNAME</th>
		<th>CONTACT</th>
		<th>EMAIL</th>
		
		<th colspan="4">Action</th>
	  </tr>
	</thead>
	
	   <?php while($row = mysqli_fetch_array($result)){ ?>
		 <tr>
		 <?php if(!$row['designation'] == null){?>
		  
	      <td><?php echo ($row['designation']); ?></td>
		  <td><?php echo ($row['fname']);?></td>
		  <td><?php echo ($row['contact']);?></td>
		  		  <td><?php echo ($row['email']);?></td>
		  
		    <a class="edit_btn" href="adminmember.php?edit=<?php echo $row['id'];?>">Edit</a>
		  </td>	
		  <td>
		    <a class="del_btn" href="adminex1.php?del=<?php echo $row['id'];?>" >Delete</a>
		  </td>	
	      
	   </tr>  
	 <?php  } ?>
	  <?php  } ?>
	   
   
  </table>
  
  <form method="post" action="adminex1.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id;?>">
   <div class="input-group">
     <label>DESIGNATION</label>
	 <select name="des">
	 <?php
	 $res="SELECT * FROM designation ";
	$res1=mysqli_query($db,$res)
  or die("Error: ".mysqli_error($db));
	while( $row=mysqli_fetch_array($res1))
	{
		echo "<option>".$row['designation']."</option>";
	}
	 
	 
	 ?>
	 </select>
   </div>
   <div class="input-group">
     <label>EMLOYEE NAME</label>
	 <input type="text" name="name" value="<?php echo $name;?>" required>
   </div>
    <div class="input-group">
     <label>CONTACT DETAILS</label>
	 <input type="text" name="contact" value="<?php echo $contact;?>" required>
   </div>  
       <div class="input-group">
     <label>EMAIL</label>
	 <input type="email" name="email" value="<?php echo $email;?>" required>
   </div>  
    
    
    <div class="input-group">
	<?php if ($edit_state == false): ?>
	 <button type="submit" name="save" class="btn">Save</button>
	<?php else: ?>
     <button type="submit" name="update" class="btn">Update</button>
	<?php endif ?>
    
   </div>   
	 
  
  </form>
<footer> 
<div style="background-color:black; height:4px;margin-top:100px;text-align:center;">

</div>
<div class="footer"style="margin-top:-20px;">
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>


<div style="background-color:black; height:4px; margin-top:0px">


</div>
</body>
</html>
</body>
</html>