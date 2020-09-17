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

$id = $_GET['id'];
$query = "SELECT title,diary FROM diary WHERE id = '".$id."'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);

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
    <title>Secret Diary - Update Page</title>
    <style type="text/css">
    	body{
    		text-align: center;
    		background: url(weather.jpg) no-repeat center center fixed;
      		-webkit-background-size: cover;
      		-noz-background-size: cover;
      		-o-background-size: cover;
      		background-size: cover;
    	}
      textarea{
        margin-top: 10px;
        width: 1340px;
        height: 500px;
        opacity: 0.5;
      }
      .container-fluid{
        margin-top: 10px;
        width: 1340px;
        height: 550px;
        text-align: center;
      }
      input[type="text"]{
        opacity: 0.5;
      }
      label{
        color:black;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <?php include "include/header.php"; ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <form action="update_script.php" method="post">
          <div class="form-inline">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control ml-2" value="<?php echo $row['title'];
            ?>">
            <input type="text" name="id" hidden="true" value="<?php echo $id; ?>">
          </div>
          <textarea rows="10" name="text"><?php echo $row['diary']; ?></textarea>
          <input type="submit" class="btn btn-primary pr-5 pl-5" value="Save">
          <p style="color: white; font-size: 18px; font-weight: bold;"><?php if(isset($_GET['success'])){
          echo $_GET['success'];
        }  ?></p>
          </form>
        </div>
      </div>
    </div>
    <?php include "include/footer.php"; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
