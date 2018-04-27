<?php 

session_start();

	if(isset($_SESSION['uid']))
	{
		//echo $_SESSION['uid'];
	}else{
		header('location: ../login.php');
	}

?>

<?php
include('header.php');
include('titlehead.php');
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">

</head>
<body style="background-color:rgba(59, 95, 153,0.8)">

<div style="position:relative; height:550px;  margin-top:0px; margin-left:20px; width:1300px;">

<form method="post" action="addstudent.php" enctype="multipart/form-data">

<table align="center" style="margin-top:40px; ">

<tr>
<th>Roll No</th>
<td><input type="text" name="rollno" placeholder="Enter Roll no" required></td>
<tr/>

<tr>
<th>Full Name</th>
<td><input type="text" name="name" placeholder="Enter Name" required></td>
<tr/>


<tr>
<th>City</th>
<td><input type="text" name="city" placeholder="Enter City Name" required></td>
<tr/>

<tr>
<th>Contact No</th>
<td><input type="text" name="cno" placeholder="Enter Contact No" required></td>
<tr/>

<tr>
<th>Standard</th>
<td><input type="text" name="std" placeholder="Enter Standard" required></td>
<tr/>

<tr>
<th>Image</th>
<td><input type="file" name="simg"  required></td>
<tr/>

<tr>

<td colspan="2" align="center"><input type="submit" name="submit" name="submit"></td>
<tr/>

</table>


</form>
</div>
</body>

</html>

<?php 
if(isset($_POST['submit']))
{
	
	include('../dbcon.php');
	
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$cno=$_POST['cno'];
	$std=$_POST['std'];
	$img=$_FILES['simg']['name'];
	$temp=$_FILES['simg']['tmp_name'];
	
	move_uploaded_file($temp,"../dataimg/$img");
	
	$qry=" INSERT INTO student(rollno, name, city, pincode, std, image ) VALUES ('$rollno','$name','$city','$cno','$std','$img')";
	$run=mysqli_query($con,$qry);
	//echo $qry;
	//exit;
	
	$qryuser="INSERT INTO user(uname,rollno) VALUES ('$name','$rollno')";
	$runuser=mysqli_query($con,$qryuser);
		
	echo $qry;
	exit;
	if($run == true){
		
	?>	
		<script type="text/javascript">
		alert('Data inserted successfully.');
		</script>
		
		
		
	
	<?php
	
	
	}
}

?>




