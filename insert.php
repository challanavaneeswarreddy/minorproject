<?php
$fullname=$_POST['username'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$userid=$_POST['userid'];
$question1=$_POST['question1'];
$answer1=$_POST['answer1'];
$question2=$_POST['question2'];
$answer2=$_POST['answer2'];
$question3=$_POST['question3'];
$answer3=$_POST['answer3'];

	$conn=new mysqli('localhost','padmin','challa@1011','naveen');
	if  ($conn->connect_error) {
		die('Connection failed: '.$conn->connect_error);
		}
	else{
			$stmt=$conn->prepare("insert into registration(fullname,email,phonenumber,dob,sex,userid,question1,answer1,question2,answer2,question3,answer3) values(?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssissssisisi",$fullname,$email,$phonenumber,$dob,$sex,$userid,$question1,$answer1,$question2,$answer2,$question3,$answer3);
			$stmt->execute();
			echo "New record inserted successfully";
		$stmt->close();
		$conn->close();
	}

?>
