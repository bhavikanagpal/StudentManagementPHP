<?php 

session_start();

	if(isset($_SESSION['uid']))
	{
		
	}else{
		//header('location: ../login.php');
	}

?>

<?php
include('header.php');
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


<body style="background-color:rgba(59, 95, 153,0.8)">

<div style="position:relative; height:550px;  margin-top:0px; width:1300px;">

<div class="admintitle" align="">
<div style="position:absolute; margin-left:100px;"><h1>Dashboard</h1> </div>
<div style="position:relative;">
<h4><a href="logout.php" style="margin-left:1030px; color:#fff; font-size:20px;">Logout</a></h4>
</div>

</div>



<div class="dashboard" style="position:absolute; ">


<div><a  style="text-decoration: none;width:237px;"href="addstudent.php">Insert Student Details</a> </div>
<div><a style="text-decoration: none;width:237px;" href="updatestudent.php">Update Student Details</a> </div>
<div><a  style="text-decoration: none;width:237px;"href="deletestudent.php">Delete Student Details</a></div>
<div><a  style="text-decoration: none;width:237px;"href="addattendence.php">Add Attendence Details</a></div>
<div><a  style="text-decoration: none;width:237px;"href="changestd.php">Update Standard</a></div>


</div>
</div>
</body>