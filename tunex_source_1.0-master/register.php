<?php
include 'more/connect.php';
include 'more/filter.php';

if($loggedIn) {
	header("Location: dashboard");
}

if(isset($_POST['sign_up'])){
$username = strip_tags($_POST['username']);
$username = trim($conn->real_escape_string($username));
$username = htmlentities($username);
$username = filter($username);

$password = strip_tags($_POST['password']);
$password = trim($conn->real_escape_string($password));
$password = htmlentities($password);

$passwordCon = strip_tags($_POST['passwordCon']);
$passwordCon = trim($conn->real_escape_string($passwordCon));
$passwordCon = htmlentities($passwordCon);

$email = strip_tags($_POST['email']);
$email = trim($conn->real_escape_string($email));
$email = htmlentities($email);    $ip = $_SERVER['REMOTE_ADDR'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  if(strlen($username) < 3 || strlen($username) > 25) {
        $error = '
        <div style="height: 0px;"></div>
       <div class="alert alert-primary" style="margin-bottom: 10px;" role="alert">
            Your username needs to be between 3 & 25 Characters!
        </div>';
    }

 if(preg_match("/∞([%$#*]+)/", $username)) {
	$error = '
      <div style="height: 0px;"></div>
       <div class="alert alert-primary" style="margin-bottom: 10px;" role="alert">
          Dont put symbols at the username.
        </div>
  ';
  }

  if(preg_match("jayer", $username)) {
  $error = '
      <div style="height: 0px;"></div>
       <div class="alert alert-primary" style="margin-bottom: 10px;" role="alert">
          Dont put symbols at the username.
        </div>
  ';
  }

    if(substr($username,-1) == " " || substr($username,0,1) == " ") {
        $error = '
            <div style="height: 0px;"></div>
       <div class="alert alert-primary" style="margin-bottom: 10px;" role="alert">
          Dont put spaces at the beggining or end of the username.
        </div>
        ';
    }

    $email = mysqli_real_escape_string($conn,$_POST['email']);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error = '
          <div style="height: 0px;"></div>
       <div class="alert alert-danger" style="margin-bottom: 10px;" role="alert">
          Invalid email.
        </div>
      ';
		}

    if($password !== $passwordCon){
        $error = '
            <div style="height: 0px;"></div>
       <div class="alert alert-primary" style="margin-bottom: 10px;" role="alert">
          Two passwords do not match. They must be the same.
        </div>
        ';
    }

    $checkUsernameQ = "SELECT * FROM users WHERE username = '$username'";
    $checkUsername = $conn->query($checkUsernameQ);

    if($checkUsername->num_rows > 0){
        $error = '
            <div style="height: 0px;"></div>
       <div class="alert alert-primary" style="margin-bottom: 10px;" role="alert">
          That username is already taken! Try with another one.
        </div>
        ';
    }

    $checkIpQ = "SELECT * FROM users WHERE Ip = '$ip'";
    $checkIp = $conn->query($checkIpQ);

    if($checkIp->num_rows > 1){
        $error = '<div class="alert alert-danger" style="margin-bottom: 10px;" role="alert">
          You cant create more than 2 alts! (Security reasons)
        </div>';
    }

    if(empty($error)){
	$timeD = time();
        $create = "INSERT INTO users (username, password, email, coins, power, description, verified, status, Ip, gettc, lastflood, membership, theme, profile_views, join_date, now) VALUES ('$username','$hashed_password','$email','10','0','Change description in settings!','0','[STATUS]','$ip','0','0','none','default','0', '$timeD','0')";
        $createUser = $conn->query($create);
        $error = '
            <div style="height: 0px;"></div>
       <div class="alert alert-success" style="margin-bottom: 10px;" role="alert">
          Success!
          </div>
        ';
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
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
    <h3>Register</h3>
    <form method="POST" action="">
    <input type="text" name="username" placeholder="Username" class="form-control">
		<p style="margin-bottom: 8px;">Choose a good one!</p>
    <input type="text" name="email" placeholder="Email" class="form-control">
    <p style="margin-bottom: 8px;">Don't write a fake email, we need it to verify you.</p>
    <input type="password" name="password" placeholder="Password" class="form-control">
    <p style="margin-bottom: 8px;">Don't share it with anyone!</p>
    <input type="password" name="passwordCon" placeholder="Confirm password" class="form-control">
		<p style="margin-bottom: 8px;">Repeat it just to confirm that it is the same.</p>
    <input href="#" type="submit" class="btn btn-success active" name="sign_up" value="Register">
    <br>
    Already have an account? <a href="/login">Login!</a>
  </div>
  </form>
</div>
<?php require 'more/footer.php'; ?>
  </body>
</html>
