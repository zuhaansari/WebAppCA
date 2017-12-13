<?php


include "connection.php";

$loginSuccessful = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (isset($_POST["username"]) && isset($_POST["password"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
  }
  
  // Check if user exists
  $sql = "SELECT * FROM users WHERE username = '" . $username . "'";
  
  $user = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  
  if (count($user) > 0) {
		// check if password is correct
    if ($password == $user[0]["password"]) {
			$_SESSION["logged_in"] = true;
			echo "Logged in";
		} else {
			echo "incorrect password";
		}
  
  } else {
		echo "That user does not exist";
	}
}

?>
<?php include('inc/header.php'); ?>


<div class="container">


  
<form action="login.php" method="post">
  <div class="form-group">

    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
  </div>
  <div class="form-group">
  <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php include('inc/footer.php'); ?>
			