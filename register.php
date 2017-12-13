<?php

include "connection.php";

$error;
$userCreated = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (isset($_POST["username"]) && isset($_POST["password"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
  }
  
  // Check if user already exits
  
  $sql = "SELECT * FROM users WHERE username = '" . $username . "'";
  
  $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  
  if (count($result) > 0) {
    $error = "That user already exists";
  
  } else {    
    $sql = "INSERT INTO `users`(`username`, `password`) VALUES ('" . $username . "'," . "'" . $password . "')";
    $conn->query($sql);
    $userCreated = true;
  }
}

?>
<?php include('inc/header.php'); ?>


<div class="container">

<?php if ($userCreated) {echo "Registration successful"; } ?>
<?php if ( isset($error) ) {echo $error; } ?>
  
<form action="register.php" method="post">
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
			