<?php
session_start();
$con = mysqli_connect("localhost","root","","secretDiary");
if(!$con){
	die("Server could not be connected");
}

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT id,email,password FROM users WHERE email='$email' && password='$password'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_array($result);
	$_SESSION['user_id'] = $row['id'];
	$_SESSION['email']=$email; 
	header("location:diary.php");
}else{
	header("location:secretDiary.php");
}
?>