<?php	$connect=mysqli_connect("localhost","padmin","challa@1011","naveen");
	session_start();
	$nav2=$_SESSION['test2'];	
	$enkey=$_POST['key2'];
	$_SESSION['test6']= '<span style="font-size:15px">Decrypt the Code </span>';
	if ($enkey==$nav2)
	{
		header('Location: logged.html');
	}
	else
	{
		$_SESSION['test6']='<span style="font-size:15px;color:red">You Entered Wrong Key</span>';
		#session_destroy();
		header('Location: password.php');
	}
	
?>
