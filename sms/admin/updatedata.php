
<body style="background-color:rgba(59, 95, 153,0.8)">

<div style="position:relative; height:550px;  margin-top:0px; margin-left:20px; width:1300px;">


<?php


include('../dbcon.php');
	
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$cno=$_POST['cno'];
	$std=$_POST['std'];
	
	$img=$_FILES['simg']['name'];
	$temp=$_FILES['simg']['tmp_name'];
	
	move_uploaded_file($temp,"../dataimg/$img");
	
	$qry="UPDATE student SET rollno='$rollno',name='$name',city='$city',pincode='$cno',std='$std',image='$img' WHERE rollno='$rollno'";
	
	$run=mysqli_query($con,$qry);
	//echo $qry;
	//exit;
	if($run == true){
		
	?>	
		<script type="text/javascript">
		alert('Data Updated successfully.');
		//<?php header ('location:updateform.php?rollno=$srn') ?>
		window.open('updateform.php?srn=<?php echo $rollno;?>','_self');
		</script>
		
	<?php
	}
	?>
	
</div>

</body>