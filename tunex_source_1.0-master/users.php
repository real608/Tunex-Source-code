<?php
include('more/connect.php');
include('more/filter.php');
$fetch_users = $conn->query("SELECT * FROM users");
$total_users = mysqli_num_rows($fetch_users);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<?php require 'more/nav.php'; ?>
	<br>
	<div class="container">
		<h3>Users (<?php echo $total_users; ?>)</h3>
		<?php
$filter = trim($conn->real_escape_string($_GET['filter']));
$Find = trim($conn->real_escape_string($_GET['Find']));

$sql2 = "SELECT * FROM users ORDER BY id DESC";

echo "<div class='row'>";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo '<div class="col col-6"><div class="card" style="height: 110px; padding-top: 6px; border-radius: 4px;"><img src="user.png" width="100px"><p style="margin-top: -90px; margin-left: 100px; font-size: 20px;"><a href="profile?id='
.$row["id"].
'">'.$row["username"].'
<br>
<a href="profile?id='.$row["id"].'" style="width: 120px; margin-left: 0px; margin-top: 4px;" class="btn btn-primary active">Profile</a>
<br></div><div style="height: 8px;"></div></div>';
}
}
echo "</div>";
?>
	</div>
</body>
<?php require 'more/footer.php'; ?>
</html>
