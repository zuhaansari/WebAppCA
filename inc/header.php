<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
	$_SESSION["logged_in"] = false;
}

?>
<!DOCTYPE html>

<html>

	<head>
	  <link rel="shortcut icon" href="favicon.ico">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


		<title>BingeIt</title>

	  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	  <link rel="stylesheet" href="/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
	  <link rel="stylesheet" href="/css/style.css">
	  <meta charset="UTF-8">
	  
	</head>

		<body>
				<ul class="topnav" id="myTopnav">
				  <li><a href="index.php">Home</a></li>
				  <li><a href="movies.php">About me</a></li>
			
      <?php if ($_SESSION["logged_in"]) { ?>
					<li><a href="/logout.php">Log Out</a></li>
      <?php } else { ?>
					<li><a href="login.php">Login</a></li>
				  <li><a href="register.php">Register</a></li>
				<?php } ?>
			</ul>
			
      
      
      
      