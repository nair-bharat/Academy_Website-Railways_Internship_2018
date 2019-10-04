<?php include('adminex.php'); 
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$edit_state=true;
	$rec = mysqli_query($db,"SELECT * FROM employee WHERE id=$id")
	or die("Error is there".mysqli_error($db));
	$record = mysqli_fetch_array($rec);
	$name = $record['fname'];
	$des = $record['designation'];
	$contact = $record['contact'];
	$image= $record['image'];
	$dob= $record['dob'];
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
	padding-left:100px;
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
.button3 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
	border-radius: 12px;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
	border-radius: 12px;
	
}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style> 
<title>AdminExecutive</title>
<link rel="stylesheet" type="text/css" href="shell.css">

<link rel="stylesheet" href="style1.css" type="text/css">
 </head>
 <body>

<center><font color="blue" size="20px"><p style="font-size:30px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">Logout</button></a></p><br>
<div style="background-color:black; height:8px;margin-top:10px;">

</div>
<marquee><h4><font color="brown">Welcome to CRCA Website</font></h4></marquee>
</div>


<h2 style="font-size:30px; text-align:center;"><?php
  session_start();
  echo  "Welcome" ." " .  $_SESSION['username'];
 ?></h2>
<div class="nav">
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
	    
	    <th>Designation</th>
		<th>&nbsp;&nbsp;&nbsp;Fullname&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;Contact&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;Age&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;Joining&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;Image&nbsp;&nbsp;&nbsp;</image>
		
		<th colspan="2">Action</th>
	  </tr>
	</thead>
	
	   <?php while($row = mysqli_fetch_array($result)){ ?>
		 <tr>
		 <?php if(!$row['imagename'] == null){?>
	      <td><?php echo  ($row['designation']); ?></td>
		  <td><?php echo ($row['fname']);?></td>
		  <td><?php echo ($row['contact']);?></td>
		  <td><?php echo ($row['age']);?></td>
		  <td><?php echo ($row['post']);?></td>
		  <td><img src=<?php echo ($row['imagename']);?> height=150px width=150px style="border-radius: 50%; border: 2px solid red;"></td>
		 
		  <td>
		    <a class="edit_btn" href="adminexecutive.php?edit=<?php echo $row['id'];?>">Edit</a>
		  </td>	
		  <td>
		    <a class="del_btn" href="adminex.php?del=<?php echo $row['id'];?>">Delete</a>
		  </td>	
	      
	   </tr>  
	 <?php  } ?>
	  <?php  } ?>
	   
   
  </table>
  
  <form method="post" action="adminex.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <center>
   <div class="input-group">
   <br>
   <br>
     <label>DESIGNATION</label>
	 <input type="text" name="des" value="<?php echo $des;?>" required>
   </div>
   <br>
   <div class="input-group">
     <label>EMLOYEE NAME</label>
	 <input type="text" name="name" value="<?php echo $name;?>" required>
   </div>
   <br>
    <div class="input-group">
     <label>CONTACT DETAILS</label>
	 <input type="text" name="contact" value="<?php echo $contact;?>" required>
   </div>  
   <br>
   <div class="input-group">
     <label>Date Of Birth</label>
	 <input type="date" name="dob" value="<?php echo $contact;?>" required>
   </div>  
   <br>
   <div class="input-group">
     <label>Date Of JOINING</label>
	 <input type="date" name="doj" value="<?php echo $contact;?>" required>
   </div> 
    <br>   
   <div class="input-group">
     <label>YOUR PHOTO</label>
	 <input type="file" name="image">
   </div> 
<br>   
    <div class="input-group">
	<?php if ($edit_state == false): ?>
	 <button type="submit" name="save" class="btn">Save</button>
	<?php else: ?>
     <button type="submit" name="update" class="button3 button1">Update</button>
	<?php endif ?>
	</center>
    
   </div>   
	 
  
  </form>
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