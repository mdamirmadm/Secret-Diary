<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Secret Diary</title>
    <style type="text/css">
    	.container{
    		width: 400px;
    		margin-top: 150px;
    	}
    	#signUpForm{
    		display: none;
    	}
    	.toggleForms{
    		font-weight: bold;
    		color: black;
    	}
    	#error{
    		visibility: hidden;
    	}
    </style>
  </head>
  <body>
    <div class="container">
    	<h1>Secret Diary</h1>
    	<p><strong>Store your thoughts permanently and secretly.</strong></p>
    <form id="signUpForm" action="signup.php" method="post">
    	<p>Interested? Sign up now!</p>
    	<div class="form-group">
    		<input type="text" class="form-control" name="email" placeholder="Your Email" required>
    	</div>
    	<div class="form-group">
    		<input type="password" class="form-control" name="password" placeholder="Password">
    	</div>
    	<div class="form-group form-check">
   		 	<input type="checkbox" class="form-check-input" id="check1">
   		 	<label class="form-check-label" for="check1">Stay Logged In</label>
  		</div>
  		<div class="form-group">
  			<input type="submit" value="Sign Up" class="btn btn-primary">
  		</div>
  		<p><a class="toggleForms">Log in</a></p>
    </form>

    <form id="logInForm" action="login.php" method="post">
    	<p>Log in using your username and password.</p>
    	<div class="form-group">
    		<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" required>
    	</div>
    	<div class="form-group">
    		<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    	</div>
    	<div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="check1">
		    <label class="form-check-label" for="check1">Stay Logged In</label>
  		</div>
  		<div id="error"></div>
  		<div class="form-group">
  			<input type="submit" value="Log In" class="btn btn-primary">
  		</div>
  		<p><a class="toggleForms">Sign Up</a></p>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	$(".toggleForms").click(function(){

    		$("#signUpForm").toggle();
    		$("#logInForm").toggle();
    	})
    	error = "";
    	if($("#password").val().trim()==""){
    		error = "<p>Password field should not be empty!</p>";
    	}
    	if(error != ""){
    		$("#error").val = error;
    		$("#error").show();
    	}
    </script>
  </body>
</html>
