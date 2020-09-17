<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("location: secretDiary.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Hello, world!</title>
    <style type="text/css">
    	.banner{
    		width: 500px;
    		height: 300px;
    		position: relative;
    		top: 120px;
    		left: 430px;
    		background-color:rgb(255,255,255,0.5); 
    		padding: 30px;
    	}

    	#submitBtn{
    		margin-top: 20px;
    		padding: 10px 30px;
    		font-size: 18px;
    	}
    	h3{
    		margin-top: 30px;
    		margin-bottom: -5px;
    	}
    </style>
  </head>
  <body>
	<?php include "include/header.php"; ?>
    <div class="container-fluid">
    	<div class="banner">
    			<h2>Delete From Diary</h2>
    			<h3>Delete By Title</h3>
    			<form action="diary_delete_script.php" method="get">
    				<div class="form-group">
    					<label for="title"></label>
    					<input type="text" name="title" id="title" class="form-control"  placeholder="Enter the title here...">
    					<input type="submit" value="Delete" class="btn btn-primary" id="submitBtn">
    				</div>
    			</form>
   		 </div>
    </div>
    <?php include "include/footer.php"; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>



