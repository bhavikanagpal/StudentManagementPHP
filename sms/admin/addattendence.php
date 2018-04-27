 <?php
include('../dbcon.php');
include("headerattn.php");

if(isset($_POST['submit']))
{
	
	foreach($_POST['attendence_status'] as $id=>$status)
	{
		$a_name=$_POST['student_name'][$id];
		$a_rollno=$_POST['rollno'][$id];
		$date=date("y-m-d");
		mysqli_query($con,"insert into attendence (a_name,a_rollno,status,date)value('$a_name','$a_rollno','$status','$date')");
		
		
	}
}
?>

<div class="panel panel-default">

<div class="panel panel-heading">
<h2>
<a class="btn btn-success" href="addstudent.php">Add Student</a>
<a class="btn btn-info pull-right" href="viewdetail.php">View All</a>
</h2>

<h3><div class="well text-center"> Date:<?php echo date("y-m-d")?></div>
</h3>
<div class="panel panel-body">
<form action="" method="post">
<table class="table table-striped">
<tr>
<th>NO.</th>
<th>Student Name</th>
<th>Roll no</th>
<th>Attendence</th>
</tr>

<?php
$res=mysqli_query($con,"select * from student");
$cnt=0;
while($row=mysqli_fetch_array($res)){
	


?><tr>
<td><?php echo $cnt+1;?></td>
<td><?php echo $row['name'];?></td>
<input type="hidden" value="<?php echo $row['name'];?>" name="student_name[]">

<td><?php echo $row['rollno'];?></td>
<input type="hidden" value="<?php echo $row['rollno'];?>" name="rollno[]">


<td><input type="radio" name="attendence_status[<?php echo $cnt; ?>]" value="present">Present
<input type="radio" name="attendence_status[<?php echo $cnt; ?>]" value="absent">Absent</td>
</tr>


<?php
$cnt++;
}
?>
</table>
<input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>