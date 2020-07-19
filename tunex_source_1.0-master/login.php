<?php
include 'more/connect.php';
if($loggedIn) {
	header("Location: dashboard");
}
if(isset($_POST['sign_in'])){

$username = strip_tags($_POST['username']);
$username = trim($conn->real_escape_string($username));
$username = htmlentities($username);

$password = strip_tags($_POST['password']);
$password = trim($conn->real_escape_string($password));
$password = htmlentities($password);

    $checkUsernameQ = "SELECT * FROM users WHERE username = '$username'";
    $checkUsername = $conn->query($checkUsernameQ);

    $username = mysqli_real_escape_string($conn, $username);
	$userRow = (object) $checkUsername->fetch_assoc();
    $pass = $userRow->{'password'};

 if($checkUsername->num_rows > 0){
	 if (password_verify($password, $pass)) { //logged in
			$_SESSION['id'] = $userRow->{'id'};
			$userID = $_SESSION['id'];
			header('Location: dashboard');
			die();
	 }else{
	     $error = '
          <div style="height: 15px;"></div>
       <div class="alert alert-danger" style="margin-bottom: -5;" role="alert">
          Wrong password!
        </div>
       ';
	 }
   }else{
       $error = '
       <div style="height: 15px;"></div>
       <div class="alert alert-danger" style="margin-bottom: -5;" role="alert">
          No accounts with this username. Create one!
        </div>
       ';
   }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php require 'more/nav.php'; ?>
    <br>
    <div style="width: 400px; margin: auto;">
      <?php
        if(!empty($error)){
            echo $error;
        }
        ?>
    <h3>Login</h3>
    <form method="POST" action="">
    <input type="text" name="username" placeholder="Username" class="form-control">
    <div style="height: 10px;"></div>
    <input type="password" name="password" placeholder="Password" class="form-control">
    <div style="height: 10px;"></div>
    <input href="#" type="submit" class="btn btn-success active" name="sign_in" value="Login">
    <br>
    Don't have an account yet? <a href="/register">Register now!</a>
  </div>
	</div>
  </form>
  <?php require 'more/footer.php'; ?>
  </body>
</html>
