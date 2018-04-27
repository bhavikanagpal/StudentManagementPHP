


<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>student managment system.</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password],select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}



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
<body>
<h3 align="right">
<a href="login.php">Login</a></h3>
<h1 align="center">Welcome to Student Management System.</h1>

<form method="post" action="index.php">


<table style="width:30%" align="center" >


<tr><td colspan="2" align="center">Student information</td>
</tr>

<tr><td align="left">Chooose Standerd:</td>
<td> 
<select name="std" required>
<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
<option value="5">5th</option>
</select>
</td>
</tr>

<tr><td align="left">Enter Rollno:</td>
<td> <input type="text" name="rollno" required>
</td>
</tr>

<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Show info"></td>
</tr>

</table></form>
</body>
</html>


