<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("location: secretDiary.php");
}
$user_id = $_SESSION['user_id'];
$con = mysqli_connect("localhost","root","","secretDiary");
if(!$con){
  echo "Server could not be connected!";
}

$query = "SELECT * FROM diary WHERE user_id = '".$user_id."'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
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

    <title>Secret Diary - View Page</title>
    <style type="text/css">
      .container{
        background-color: rgb(255,255,255,0.5);
        margin-top: 20px;
        padding: 10px 10px 10px 30px;
      }
      #hidden{
        visibility: hidden;
      }
     </style>
  </head>
  <body>
    <?php include "include/header.php"; ?>
    <div class="container-fluid">
      <?php while($row = mysqli_fetch_array($result)){  ?>
      <div class="container">
      <div class="row">
        <div class="col-xs-2">Date : &nbsp</div>
        <div class="col-xs-10"><?php echo $row['date_of_diary']; ?></div>
      </div>
      <div class="row">
        <div class="col-xs-2">Title : &nbsp</div>
        <div class="col-xs-10"><?php echo $row['title']; ?></div>
      </div>
      <div class="row">
        <div class="col-xs-2">Content : &nbsp</div>
        <div class="col-xs-10"><?php echo $row['diary']; ?></div>
      </div>
      <form action="update.php" method="get">
      <input type="text" name="id" id="hidden" value="<?php echo $row['id'];?>">
      <button class="btn btn-primary mt-1" type="submit">Update</button>
      <button class="btn btn-primary mt-1" type="submit" formaction="diary_delete_script.php" formmethod="get">Delete</button>
    </form>
    </div>
    <?php } ?>
    </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
