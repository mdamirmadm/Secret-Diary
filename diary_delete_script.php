<?php
session_start();
$con = mysqli_connect("localhost","root","","secretDiary");
if(!$con){
	die("Server could not be connected");
}
$id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$query = "DELETE FROM diary WHERE id='".$id."' AND user_id = '".$user_id."'";

$result = mysqli_query($con,$query) or die(mysqli_error($con));

if($result){
	echo "<script>alert('Diary Deleted successfully');";
	echo "window.location.href='diary_delete.php'</script>";
}else{
	echo "<script>alert('Diary Could Not Be Deleted!');";
	echo "window.location.href='diary_delete.php'</script>";
}
?>