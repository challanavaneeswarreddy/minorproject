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

<div><center>
<?php
session_start();
$nav=$_SESSION['test'];	
$connect=mysqli_connect("localhost","padmin","challa@1011","naveen");
	echo $enkey;
	$query="select * from registration where userid='$nav'";
	$result=mysqli_query($connect,$query);
	$row=mysqli_fetch_array($result);
	$cav=rand(1,3);
	if($cav==1){
	echo "Clue Question : ".$row['question1'];
	$num2=$row['answer1'];}
	elseif($cav==2){
	echo "Clue Question : ".$row['question2'];
	$num2=$row['answer2'];}
	else
	{
	echo "Clue Question : ".$row['question3'];
	$num2=$row['answer3'];}
?>
<br><br>
<?php
	$nav6=$_SESSION['test6'];
	$num=rand(1000,9999);
	$_SESSION['test2']=$num;
	$key=$num-$num2;
	echo "Encrypted Key : ".$key;
	
?><br><br>
<?php
	echo $nav6;
	unset($_SESSION['test6']);
?><br>
<form method="POST" action="decrypt.php">
	<span>D</span>ecrypted Key:&nbsp&nbsp<input type="text" name="key2" maxlength="4" minlength="4" required><br><br><br>
	<input type="submit" name="save" value=" Submit ">&nbsp&nbsp&nbsp
	<a href="3.forgot.html"><input type="button" name="forgot" value="Forgot Key"></a><br><br>
	</form>


</center>
</div>
<body>
</html>
