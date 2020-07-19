<?php
require 'more/nav.php';
if($loggedIn) {
	header("Location: /dashboard");
}
$fetch_users = $conn->query("SELECT * FROM users");
$total_users = mysqli_num_rows($fetch_users);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <div class="jumbotron">
      <div class="container">
  <h1 class="display-4">Welcome to Tunex!</h1>
  <p class="lead">The best old Roblox revival, where you can meet friends, play games and create them.<br><b>Join <?php echo $total_users; ?> users now!</b></p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/gjhbVX2tjPI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <br>
  <p class="lead">
    <a class="btn btn-primary active btn-lg" href="/register" role="button">Get started!</a>
  </p>
</div>
</div>
<?php require 'more/footer.php'; ?>
  </body>
</html>
