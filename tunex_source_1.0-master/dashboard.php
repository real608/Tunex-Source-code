<?php
include 'more/connect.php';
if(!$loggedIn) {
	header("Location: /");
}
?>
<?php
if(empty($error)){
  if(isset($_POST['send']))
{
    $sql = "INSERT INTO wall (username, user_id, message, datee)
    VALUES ('".$username."','".$user->id."','".$_POST["message"]."', '".date("Y/m/d")."')";

    $result = mysqli_query($conn,$sql);
}
}

/*if(strlen($message) < 3 || strlen($message) > 200) {
        $error = '
        <div style="height: 0px;"></div>
       <div class="alert alert-primary" style="margin-bottom: 10px;" role="alert">
            Message needs to be between 3 and 200 characters.
        </div>';
    }*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<?php require 'more/nav.php'; ?>
<br>
<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<img src="user.png" style="width: 300px; margin-bottom: -10px;">
				<h3>&nbsp;<?php echo $username ; ?></h3>
			</div>
		</div>
		<div class="col">
			User wall and friends coming soon.
		</div>
		<div class="col">
			<!-- Update -->
		</div>
		<div class="col">
			
		</div>
	</div>
</div>
<br>
<?php require 'more/footer.php'; ?>
</body>
</html>