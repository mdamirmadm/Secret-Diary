<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("location: secretDiary.php");
}

$con = mysqli_connect("localhost","root","","secretDiary");
if(!$con){
  echo "server could not be connected!";
}

$title = $_POST['title'];
$diary = $_POST['text'];
$id = $_POST['id'];

$query = "UPDATE diary SET title = '".$title."' ,diary = '".$diary."' WHERE id = '".$id."'";

$result = mysqli_query($con,$query) or die(mysqli_error($con));

if($result){
	echo "<script>alert('Diary updated successfully');";
	echo "window.location.href='diary.php'</script>";

}else{
	echo "<script>alert('Diary updated successfully');";
	echo "window.location.href='diary.php'</script>";
}
?>