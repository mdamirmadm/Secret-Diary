<?php
session_start();
$user_id = $_SESSION['user_id'];
$con = mysqli_connect("localhost","root","","secretDiary");
if(!$con){
	echo "Server could not be connected";
}

$title = $_POST['title'];
$text = $_POST['text'];

$query = "INSERT INTO diary(user_id,title,diary) VALUES('".$user_id."','".$title."','".$text."')";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if($result){
	echo "<script>alert('Diary added successfully');";
	echo "window.location.href='diary.php'</script>";
	
}else{
	echo "<script>alert('Diary Could Not Be Added!');";
	echo "window.location.href='diary.php'</script>";
}
?>