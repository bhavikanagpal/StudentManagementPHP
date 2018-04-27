<?php 

session_start();

	if(isset($_SESSION['uid']))
	{
		
	}else{
		//header('location: ../login.php');
	}

?>

<?php
include('../dbcon.php');

$query="select * from attendance_records where student_roll= ' ".$_SESSION['uid']."';";
$records=mysqli_query($con,$query);





?>

<style>
a:link, a:visited {
    background-color: rgba(233,233,233,0.8);
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: rgba(233,233,233,0.8);
}

.admintitle{
	background-color:black;
	color:#fff;
	width:1350px;
	height:100px;
	line-height:100px;
}

.dashboard{	 
	background-color:rgba(59, 95, 153,0.8);	
	width:1350px;
	height:550px;
	font-size:25px;
 }

</style>
<div class="admintitle" align="center">
<div style="position:absolute; margin-left:100px;"><h1>Student Dashboard</h1> </div>
<div style="position:relative;">
<h4><a href="../logout.php" style="margin-left:1030px; color:#fff; font-size:20px;">Logout</a></h4>
</div>

</div>



<div class="dashboard" style="position:absolute; ">

<div style="position:relative;height:550px; width:260px; background-color:rgba(59, 95, 153,0.8)">

<div><a  style="text-decoration: none;width:240px;" href="attendance.php">View Attendance </a> </div>

<div style="position:relative; margin-left:300px;">
	xyz
<?php 
	$uid=$_SESSION['uid'];	
	
	
	$qry="SELECT * FROM attendence WHERE a_rollno='$uid' ";
	
	$run=mysqli_query($con,$qry);
	
	if(mysqli_num_rows($run)<1){
		
		echo "<tr><td colspan='5'>No record found..!!</td></tr>";
	}else{
	
		while($data=mysqli_fetch_assoc($run))
		{
			
			?>
			<tr align="center">
			<td><?php echo $data['a_rollno']; ?></td>
			<td><?php echo $data['a_name']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><?php echo $data['date']; ?></td>
			</tr>
			</table></html>
			<?php
		}
	}

	
?>	
	</div>
</div>
</div>


</div>
