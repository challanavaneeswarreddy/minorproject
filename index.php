<html>
<title>Sign up page</title>
<head>
<style>
h1{box-shadow:2px 2px 5px blue ,3px 3px 3px white;border-radius:20px;font-style:italic;letter-spacing:1px;position:relative;top:20px;text-shadow:2px 2px 3px yellow;}
body{background-image:url("gdmlock.jpg");
	background-position:fixed;
	background-repeat:no-repeat;}
div{box-shadow:4px 4px 8px white ,-4px -4px 8px white;
	padding:4vw;
	position:absolute;
	top:15vw;left:32vw;
	background-color:black;
	color:white;
	font-size:20px;border-radius: 15px;}
div:hover{border-style: outset;
	border-width:3px;
	border-color:yellow;}
span{   color:white;font-size:25px;
	font-style:" sans-serif ";
	font-weight:bold;}
</style>
<script src="java3.js"></script>
</head>
<body>
<h1 style="color:white;text-align:center;">Signup page</h1>
<div><center><br>
<?php 
session_start();
$connect=mysqli_connect("localhost","padmin","challa@1011","naveen");
if(!empty($_POST['save']))
{
	$username=$_POST['userid'];
	$_SESSION['test']=$username;
	$query="select * from registration where userid='$username'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
	
		header('Location: password.php');	
	}
	else
	{
		echo '<span style="color:red;font-size:17px">You are not an User</span>';
		#echo '<span style="color:#AFA;text-align:center;">Request has been sent. Please wait for my reply!</span>';
	}
}
?><br><br>
<form method="POST" action="#" >
	<span>U</span>sername:&nbsp&nbsp<input type="text" name="userid"><br><br><br>
	<input type="submit" name="save" value=" Submit "><br><br>
	<a href="1.registration.html"><input type="button" name="login" value="New User"></a>&nbsp&nbsp&nbsp
	<a href="3.forgot.html"><input type="button" name="forgot" value="Forgot Username"></a><br><br>
</center>
</div>
</form>
<body>
</html>
