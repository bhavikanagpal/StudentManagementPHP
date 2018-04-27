<?php 

session_start();

	if(isset($_SESSION['uid']))
	{
		
	}else{
		//header('location: ../login.php');
	}

?>

<style>

.dashboard{	 
	background-color:rgba(59, 95, 153,0.8);	
	width:1350px;
	height:550px;
	font-size:25px;
 }


td{
	width:140px;
}
</style>

<body style="background-color:#E6E6FA">
<form method="post" action="changestd.php" >
<div style=" height:550px;   margin-left:20px; width:1300px;">

<div class="" align="center">

	<div class="admintitle" align="center" style="margin-top:50px;">
<h4>

<a href="logout.php" style="float:right; margin-right:30px; color:balack; font-size:20px;">Logout</a>
<a href="admindash.php" style="float:right; margin-right:30px; color:black; font-size:20px;">Dashboard</a></h4>
<h1 >Student Management System</h1>

	<div style="margin-top:50px;">
	
	<div > 
	Standard : <input type="text" name="std" placeholder="Enter Standard" >
	<input type="submit" value="Search" name="submit"/>
	</div>
	
	<div style="margin-top:100px;">
	
	
	<?php
	
	include('../dbcon.php');
	
	$std=$_POST['std'];
	?>
	<table style="" border="1">
		<tr>
		<td>Rollno : </td>
		<td>Name : </td>
		<td>Standard : </td>
		<td>Select to Update standard  : </td>
		</tr>
		<?php
	$qry="SELECT * FROM student WHERE std='$std' ";
	
	$run=mysqli_query($con,$qry);
	
	

	
		
		
		while($data=mysqli_fetch_assoc($run))
		{
			
			?>
			
			<tr align="center">
			<td><?php echo $data['rollno']; ?></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['std']; ?></td>
			<td><input type="checkbox" name="updatestd[]" value="<?php echo $data['rollno'];?>"></td>
			</tr>
			
			<?php
		}
		?>
		
		<tr>
		<td colspan="4" style="">
		<input type="submit"  style=" margin-left:150px;" name="update" value="Update Standard">
		</td>
		</tr>
		</table></html>
	
	
	</div>

	</div>

</div>

<?php
if(isset($_POST['update'])){
	{
		if(!empty($_POST["updatestd"])){
			foreach($_POST["updatestd"] as $updatestd){
				echo $updatestd;
				$qry="UPDATE student SET std=std+1 WHERE rollno='$updatestd'";
	
				$run=mysqli_query($con,$qry);
			}			
		}	
		else{
			echo "Select atleast one record..!!";
			
		}
		
	}


	
	
	
	
}
//$std=$std+1;
/*if(isset($_POST['update']))
{
$chbox=$_POST['updatestd'];
while(list ($key,$val)=@each($chbox))
{
	echo ".$chbox.";
	//mysqli_query($link,"update student set std='$std'");
}
}
	*/



?>
</div>


</body>