<?php
session_start();
if(!isset($_SESSION['email'])){
	header("location:secretDiary.php");
}
session_unset();
session_destroy();
header("location:secretDiary.php");
?>