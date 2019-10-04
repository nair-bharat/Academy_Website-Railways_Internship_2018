<?php include('adminex3.php'); 
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$edit_state=true;
	$rec = mysqli_query($db,"SELECT * FROM employee WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$name = $record['fname'];
	$des = $record['designation'];
	$contact = $record['contact'];
	$image= $record['image'];
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

</style>
<title>Executive Committee</title>
<link rel="stylesheet" type="text/css" href="shell.css">

<link rel="stylesheet" href="style1.css" type="text/css">
 </head>
 <body>
 <div class="container">
<center><font color="blue" size="20px"><p style="font-size:30px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="logout.php"><button class="button button2" style="width:70px" "height:50px;">Logout</button></a></p><br>
<div style="background-color:black; height:8px;margin-top:-40px;">

</div>

<h1 style="text-align:center; margin-top:15px;text-shadow: 9px 8px 0px rgba(0,0,0,0.15); font-size:30px;">EXECUTIVE MEMBERS</h1>


<?php
  session_start();
  echo  "" ." " .  $_SESSION['username'];
 ?></h2>
<div class="nav" style=" margin-top:20px; ">
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
<div style="margin-top:-30px; margin-left:100px;">
<div style="margin-left:-150px">
<br>
<br>
<table class="t01">
    <thead>
	  <tr>
	    
	    <th>DESIGNATION</th>
		<th>FULLNAME</th>
		<th>CONTACT</th>
		<th>EMAIL</image>
		
		<th colspan="2">Action</th>
	  </tr>
	</thead>
	
	   <?php while($row = mysqli_fetch_array($result)){ ?>
	      <?php if($row['fname'] != null){ ?>
		 <tr>
		 
	      <td><?php echo ($row['designation']); ?></td>
		  <td><?php echo ($row['fname']);?></td>
		  <td><?php echo ($row['contact']);?></td>
		  <td><?php echo ($row['email']);?></td>
		 
		  <td>
		    <a class="edit_btn" href="executivecomitee.php?edit=<?php echo $row['id'];?>">Edit</a>
		  </td>	
		  <td>
		    <a class="del_btn" href="adminex3.php?del=<?php echo $row['id'];?>">Delete</a>
		  </td>	
	      
	   </tr>  
	 <?php  } ?>
	    <?php  } ?>
   
  </table>
  </div>
  <form method="post" action="adminex3.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id;?>">
   <div class="input-group">
     <label>DESIGNATION</label>
	 <input type="text" name="des" value="<?php echo $des;?>">
   </div>
   <div class="input-group">
     <label>EMLOYEE NAME</label>
	 <input type="text" name="name" value="<?php echo $name;?>">
   </div>
    <div class="input-group">
     <label>CONTACT DETAILS</label>
	 <input type="text" name="contact" value="<?php echo $contact;?>">
   </div>  
   <div class="input-group">
     <label>EMAIL</label>
	 <input type="email" name="email">
   </div>  
    <div class="input-group">
	<?php if ($edit_state == false): ?>
	 <button type="submit" name="save" class="btn">Save</button>
	<?php else: ?>
     <button type="submit" name="update" class="btn">Update</button>
	<?php endif ?>
    
   </div>   
	 
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