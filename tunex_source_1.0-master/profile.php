<?php
include 'more/connect.php';
$RefreshRate = rand(0,100000);

include 'more/filter.php';
$id = trim($conn->real_escape_string($_GET['id']));

if(!$id || !is_numeric($id)) {
    header("Location: profile?id=1");
    die();
}else{
    $checkExists = $conn->query("SELECT * FROM `users` WHERE `id`='$id'");
    $exists = mysqli_num_rows($checkExists);
    if($exists == 0) {
        header("Location: 404");
        die();
    }
}

$select = $conn->query("SELECT * FROM users WHERE id='".$id."'");
$fetchuser = mysqli_fetch_object($select);


if ($fetchuser == 0) {
    header("Location: ../");
}

if($fetchuser->username !== $user->username) {
$updateviews = $conn->query("UPDATE `users` SET `profile_views` = `profile_views` + 1 WHERE username = '$fetchuser->username'");
}

$getUviews = $conn->query("SELECT `profile_views` FROM `users` WHERE username = '$fetchuser->username'");

while($row = mysqli_fetch_array($getUviews)) {
    $profileviews = $row['profile_views']; //$db-query("SELECT `profile_views` FROM `users` WHERE username='$fetch_user->username'");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<?php require 'more/nav.php'; ?>
<br>
<div class="container">
	<div class="card" style="height: 290px;">
		<img src="user.png" style="width: 300px;">
		<h3 style="margin-top: -270px; margin-left: 280px;"><?php echo "".$fetchuser->username.""; ?></h3>
		<h6 style="margin-left: 280px;"><?php echo "".$fetchuser->description.""; ?></h6>
	</div>
</div>
<br>
<?php require 'more/footer.php'; ?>
</body>
</html>