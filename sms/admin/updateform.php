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
include('../dbcon.php');

$srn=$_GET['srn'];
$qry="SELECT * FROM student WHERE rollno='$srn'";
$run=mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">

</head>

<body style="background-color:rgba(59, 95, 153,0.8)">

<div style="position:relative; height:550px;  margin-top:0px; margin-left:20px; width:1300px;">


<form method="post" action="updatedata.php" enctype="multipart/form-data">

<table align="center" style="margin-top:40px; ">

<tr>
<th>Roll No</th>
<td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
<tr/>

<tr>
<th>Full Name</th>
<td><input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
<tr/>


<tr>
<th>City</th>
<td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
<tr/>

<tr>
<th>Contact No</th>
<td><input type="text" name="cno" value=<?php echo $data['pincode']; ?> required></td>
<tr/>

<tr>
<th>Standerd</th>
<td><input type="text" name="std" value=<?php echo $data['std']; ?> required></td>
<tr/>

<tr>
<th>Image</th>
<td><input type="file" name="simg"  required></td>
<tr/>

<tr>

<td colspan="2" align="center">
<input type="hidden" name="srn" value="<?php echo $data['rollno'];?>"/>
<input type="submit" name="submit" name="submit"></td>
<tr/>

</table>


</form>
</div>
</body>

</html>
