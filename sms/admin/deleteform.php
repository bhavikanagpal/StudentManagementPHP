<?php


include('../dbcon.php');
	
	$srn=$_REQUEST['srn'];
	
	$qry="DELETE FROM student WHERE rollno='$srn'";
	
	$run=mysqli_query($con,$qry);
	//echo $qry;
	//exit;
	if($run == true){
		
	?>	
		<script type="text/javascript">
		alert('Data Deleted successfully.');
		//<?php header ('location:updateform.php?rollno=$srn') ?>
		window.open('deleteform.php','_self');
		</script>
		
	<?php
	}
	?>