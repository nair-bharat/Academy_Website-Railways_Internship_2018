<?php 
  $conn=mysqli_connect('localhost','root','','login');
  if (!$conn){
    die("DB Connection failed " . mysqli_error($conn));
  }

$role=" ";



$role=$_GET["role"];


?>



<html>
<head>
<style>
*{
margin:0px;
padding:0px;
list-style:none;
font-size:14px;
text-decoration:none;

}

.side{
height:35px;
width:500px;
float:right;
text-align:right;

}
body{
background-color:	#D2691E;
font-family:monospace;
  height: 100%;
    margin: 0;
    padding: 0;
}
.nav{
cursor:pointer;
height:40px;
width:100%;
margin-left:10px;
}
.query{
margin-left:10px;
margin-top:100px;
float:left;
color:black;
float:left;
background-color:#FFF0F5;
height:300px;
width:200px;
text-align:center;
padding-top:5px;
border-radius:20px;
font-size:15px;
border:2px solid black;
text-decoration:underline;
color:blue;

}

.active:hover{
background-color:#A8CD1B;
}

footer{
margin-top:450px;
height:60px;
width:100%;
background-color:#F8F8FF; 
font-size:10px;



}
table {
    width:100%;
	background-color:white;
	padding-left:30px;
}
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 2px;
    text-align: left;
	padding-left:30px;
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
<link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
<center><font color="blue" size="20px"><p style="font-size:50px;">CENTRAL RAILWAY CULTURAL ACADEMY</font><a href="Home.php"><button class="button button2" style="width:70px" "height:50px;">Home</button></a></p>
<div style="background-color:black; height:8px;margin-top:-40px;">

</div>
<div style="font-size:30px;text-align:right; padding-top:15px; font-family:sans-serif;
    color: black;
    text-shadow: 2px 2px 4px black;}">
	<br>
	<br>
	<br>
	<br>
<?php
echo $role;
?>
</div>
<br>
<br>
</div>

<div >
<h1 style="font-size:24px;text-align:center; padding-top:15px; font-family:sans-serif;
    color: black;
    text-shadow: 2px 2px 4px black;}"> MEMBERS </h1>
<table>
<tr>
<th>NAME</th>
<th>DESIGNATION</th>
<th>EMAIL</th>
<th>CONTACT</th>
</tr>
<tr>
<?php
$sql="SELECT * FROM members WHERE role='$role'";
$s1=mysqli_query($conn,$sql)
or die("ERROR:" .mysqli_error($conn));
while($row=mysqli_fetch_array($s1))
{ 
     if(!$row['fname'] == null)
	 {
	echo "<tr>";
	echo "<td>".$row['fname']."</td>";
	echo "<td>".$row['designation']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['contact']."</td>";
	echo "</tr>";
}
}

?>
</tr>
</table>
</div>
<br>
<br>
<div >
<h1 style="font-size:24px;text-align:center; padding-top:15px; font-family:sans-serif;
    color: black;
    text-shadow: 2px 2px 4px black;}"> EVENTS </h1>
<table>
<tr>
<th>NAME</th>
<th>DESIGNATION</th>
<th>EMAIL</th>
<th>CONTACT</th>
</tr>
<tr>
<?php
$sql="SELECT * FROM events WHERE role='$role'";
$s1=mysqli_query($conn,$sql)
or die("ERROR:" .mysqli_error($conn));
while($row=mysqli_fetch_array($s1))
{ 
     if(!$row['eventname'] == null)
	 {
	echo "<tr>";
	echo "<td>".$row['eventname']."</td>";
	echo "<td>".$row['venue']."</td>";
	echo "<td>".$row['time']."</td>";
	echo "<td>".$row['date']."</td>";
	echo "</tr>";
}
}

?>
</tr>
</table>
</div>
<br>
<br>
<div >
<h1 style="font-size:24px;text-align:center; padding-top:15px; font-family:sans-serif;
    color: black;
    text-shadow: 2px 2px 4px black;}">CULTURAL MEMBERS </h1>
<table>
<tr>
<th>NAME</th>
<th>DESIGNATION</th>
<th>CONTACT</th>
<th>AGE</th>
<th>DATE OF JOINING</th>
<th>PIC</th>
</tr>
<tr>
<?php
$sql="SELECT * FROM employee WHERE role='$role'";
$s1=mysqli_query($conn,$sql)
or die("ERROR:" .mysqli_error($conn));
while($row=mysqli_fetch_array($s1))
{ 
     if(!$row['fname'] == null)
	 {
	echo "<tr>";
	echo "<td>".$row['fname']."</td>";
	echo "<td>".$row['designation']."</td>";;
	echo "<td>".$row['contact']."</td>";
	echo "<td>".$row['age']."</td>";
	echo "<td>".$row['post']."</td>";
	?>
	<td><img src=<?php echo $row['imagename'];?> height="150px"  width="150px" style="border-radius: 50%; border: 2px solid red;" alt="MY IMAGE"/></td>
		 
		 
		<?php  
		echo ($row['imagename']);
	echo "</tr>";
}
}
?>
</tr>
</table>
</div>
 <br>
 <br>
 
 <div >
<h1 style="font-size:24px;text-align:center; padding-top:15px; font-family:sans-serif;
    color: black;
    text-shadow: 2px 2px 4px black;}">AWARDS AND ACHIVEMENTS </h1>
	<table>
<tr>

<th>YEAR</th>
<th>ACHIVEMENT</th>
</tr>
<tr>
<?php
$sql="SELECT * FROM achievements WHERE role='$role'";
$s1=mysqli_query($conn,$sql)
or die("ERROR:" .mysqli_error($conn));
while($row=mysqli_fetch_array($s1))
{ 
     if(!$row['year'] == null)
	 {
	echo "<tr>";
	echo "<td>".$row['year']."</td>";
	echo "<td>".$row['achievements']."</td>";
	
	echo "</tr>";
}
}
?>
</tr>
</table>
</div>
<div style="height:300px;width:400px;background-color:white; margin-top:40px ;margin-left:50px; border-radius:12px;text-align:left;border:3px solid black; padding-top:10px; padding-left:-50px;">

<h1 style="font-size:24px;text-align:center; padding-top:15px; font-family:sans-serif;
    color: black;
    text-shadow: 2px 2px 4px black;}">CONTACT US </h1>
	<br>
<?php
$sql="SELECT * FROM contact WHERE role='$role'";
$s1=mysqli_query($conn,$sql)
or die("ERROR:" .mysqli_error($conn));
while($result1=mysqli_fetch_assoc($s1))
{
	if($result1['no'] != '' )
	{
	echo "<h1>Central Railway Cultural Academy Headquarters" . "</h1>" ;
	echo "<h2>ADDRESS" . "</h2>" ;
	echo "<h3>".$result1['address']."</h3>";
	echo "<h3>Contact NO. : ".$result1['no']."</h3>" ;
	echo "<h3>GMAIL :  ".$result1['email']."</h3>" ;
	echo "<h2>JOINT SECRETARIES" . "</h2>" ;
	echo "<h3>".$result1['s1name']."</h3>" ;
	echo "<h3>".$result1['s1no']."</h3>";
	echo "<h3>".$result1['s2name']."</h3>" ;
	echo "<h3>".$result1['s2no']."</h3>";
	}
}

?>

</div>

<footer> 
<div class="footer">
<div style="background-color:black; height:4px;margin-top:300px;text-align:center;">

</div>
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>

<div style="background-color:black; height:4px; margin-top:0px">


</div>
</body>
</html>
