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

<body style="background-color:rgba(59, 95, 153,0.8)">

<div style="position:relative; height:550px;  margin-top:0px; margin-left:20px; width:1300px;">



<table align="center">
<form method="post" action="updatestudent.php"  align="center" style="margin-top:40px; ">


<tr>
<th>Enter Standard</th>

<td><input type="number" name="standerd" placeholder="Enter Standard" required="required"/>
</td>



<th>Enter Student Name</th>

<td><input type="text" name="sname" placeholder="Enter Student name" required="required" />
</td>


<td colspan="2">
<input type="submit" value="Search" name="submit"/> 
</td>
</tr>
</form>
</table>

<table align="center" border="1"  width="92%" style="margin-top:10px;color:white;  ">

<tr>
<th>ROLL NO</th>
<th>Name</th>
<th>Image</th>
<th>Edit</th>
</tr>






<?php

if(isset($_POST['submit']))
{
	
	include('../dbcon.php');
	
	$std = $_POST['standerd'];
	$name=$_POST['sname'];
	
	$qry="SELECT * FROM student WHERE std='$std' AND name LIKE '$name'";
	
	$run=mysqli_query($con,$qry);
	
	if(mysqli_num_rows($run)>1){
		
		echo "<tr><td colspane='5'>No record found..!!</td></tr>";
	}else{
	
		while($data=mysqli_fetch_assoc($run))
		{
			
			?>
			<tr align="center">
			<td><?php echo $data['rollno']; ?></td>
			<td><?php echo $data['name']; ?></td>
			<td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px;" /></td>
			<td><a href="updateform.php?srn=<?php echo $data['rollno'];?>">Edit</a></td>
			</tr>
			</table></html>
			<?php
		}
	}
}

?>
</div>