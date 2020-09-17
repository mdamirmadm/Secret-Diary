<?php
session_start();
$con = mysqli_connect("localhost","root","","secretDiary");
if(!$con)
{
	die("Server could not be connected");
}

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "INSERT INTO users(email,password) VALUES('".$email."','".$password."')";
$result = mysqli_query($con,$query) or die("Query could not be executed");
if($result){
	$_SESSION['email'] = $email;
	$_SESSION['user_id'] = mysqli_insert_id($con);
	header('location:diary.php');
}
else{
	header("location:secretDiary.php");
}

?>