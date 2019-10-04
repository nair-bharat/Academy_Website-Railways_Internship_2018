<?php 
include('server201.php'); 
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$edit_state=true;
	$rec = mysqli_query($conn,"SELECT * FROM achievements WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$year = $record['year'];
	$achievements = $record['achievements'];
	$id= $record['id'];
}



?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width:100%;
	background-color:white;
	padding-left:100px;
	margin-left:100px;
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
</style> 
<title>shedule of event</title>
<link rel="stylesheet" type="text/css" href="shell.css">
<link rel="stylesheet" href="style1.css" type="text/css"></link>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">



 
  
<div class="header">



<div style="margin-top:0px; font-size:20px; height:60px; background-color:#F8F8FF; margin-bottom:5px;">
<p style="font-size:30px; text-decoration:underline;text-align:center; padding-top:15px; font-family:sans-serif;
    color: black;
    text-shadow: 2px 2px 4px black;}">CENTRAL RAILWAYS CULTURAL ACADEMY</p></div>

</div>


<h2 style="font-size:30px; text-align:center;"><?php
  session_start();
  echo  "Welcome" ." " .  $_SESSION['username'];
 ?></h2>
<div class="nav"style="margin-left:160px;">
<ul>

<li><a href="Awards.php">Update Achievements</a></li>
<li><a href="events.php">Change Events</a></li>
<li><a href="executivecomitee.php">Executive Committee</a></li>
<li><a href="Contact.php">Update Contact Details</a> </li>
<li><a href="register.php">Register Member</a></li>
</ul>

</div>
 <div class="center" style="background:url('12845965945_a7db2688f4_b.jpg')no-repeat;
background-size:cover;
background-attachment:fixed;">
 <p style="font-family:Times New Roman;font-weight:bold;font-size:30px;color:black;text-align:center;padding-top:30px;">ACHIEVEMENTS & AWARDS</p>
 <p style="font-family:Times New Roman;padding-left:50px;padding-right:320px;padding-top:1px;">
 

 <table style="border:1px solid white;width:68%;background-color:white;">
    <thead>
	  <tr>
	     
	    <th>Year</th>
		<th>Achievements</th>
		<th colspan="2">Action</th>
	
	  </tr>
	</thead>
	<tbody >
	   <?php while($row = mysqli_fetch_array($result)){ ?>
	   <?php if(!$row['year'] == null){?>
	 
		 <tr>
	      <td><?php echo $row['year'];?></td>
		  <td><?php echo $row['achievements'];?></td>
		   <td>
		    <a class="edit_btn" href="achiv & award.php?edit=<?php echo $row['id'];?>">Edit</a>
		  </td>	
		  <td>
		    <a class="del_btn" href="server201.php?del=<?php echo $row['id'];?>">Delete</a>
		  </td>	
	      
		 </tr>
  
	 <?php  } ?>
	 <?php  } ?>
	   
   
  </table>
  
  




  <form method="post" action="achiv & award.php" style="height:170px;">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="input-group">
     <label style="margin-top:-9px;">Year</label>
	 <input type="text" name="year" value="<?php echo $year;?>">
   </div>
   <div class="input-group">
     <label>Achievements</label>
	 <input type="text" name="achievements" value="<?php echo $achievements;?>">
   </div>
	<div class="input-group">
	<?php if ($edit_state == false): ?>
	 <button type="submit" name="save" class="btn">Save</button>
	<?php else: ?>
     <button type="submit" name="update" class="btn">Update</button>
	<?php endif ?>
	</div>
    </p>
   </div>   
   
   </div>   
	 
  
  </form>
<div class="footer" style="margin-top:1px;" >
  <p style="font-family:Times New Roman;"><h3>----central railway----<h3></p>
  </div>
</body>
</html>