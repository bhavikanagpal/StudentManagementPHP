<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
</head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
 input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}
</style>


<body  style="background-image:url('images/homebg.png'); background-repeat: no-repeat;background-size:cover;">

<div>

<div id="login" style="margin-top:180px;margin-left:680px; position:absolute;width:500px; height:300px; background-color:rgba(233,233,233,0.8); border-radius:5px; ">

<div style="margin-top:30px; position:relative;">
<h1 align="center">Login</h1>
</div>
<form actopn="login.php" method="post">

<table align="center">

<tr>
<td>Username
</td><td><input type="text" name="uname" required</td>
</tr>

<tr>
<td>Password
</td><td><input type="password" name="pswd" required</td>
</tr>

<tr><td colspan="2" align="center"><input type="submit" name="login" value="Login"></td></tr>

</table>
</form>

</div>
</div>
</body>
</html>




<?php 



include('dbcon.php');

if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pswd'];
	

	if($username=="admin")
	{
	$qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	
	
	if($row < 1)
	{

		?>
		<script type="text/javascript">alert('username or password not match!!');
		window.open('login.php','_self');</script>
		<?php
	}else{
		
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		//echo $id;
		session_start();
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
		
	}
	
	}
	else{
	
	$qry="SELECT * FROM user WHERE rollno='$username'";
	
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	
	
	if($row < 1)
	{

		?>

		<script type="text/javascript">
		alert('username or password not match!!');
		window.open('login.php','_self');</script>

		<?php
	}elseif($row=1){
		
		$data=mysqli_fetch_assoc($run);
		
		$rollno=$data['$rollno'];
		
		session_start();
		$_SESSION['uid']=$rollno;
		header('location:student/studentdash.php');
		
	}
	else{
		?>
		
		
		<script type="text/javascript">alert('username or password not match!!');
		window.open('login.php','_self');</script>
		
		<?php
		
	}
		
		
		
	}
}



?>