<?php
include('more/connect.php');
include('more/filter.php');
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Users</title>
</head>
<body>
<?php
$fetch_users = $conn->query("SELECT * FROM users");
$total_users = mysqli_num_rows($fetch_users);

$now = time();

$fetch_online_users = $conn->query("SELECT * FROM users WHERE $now < expireTime");
$online_users = mysqli_num_rows($fetch_online_users);
?>
<?php require 'more/nav.php'; ?>
<div class="container">
  <div style="height: 12px;"></div>
<div class="row">
  <br>
  <div class="col">
    <h3>Users: <b>(<?php echo $total_users; ?>)</b></h3>
   <?php echo $online_users; ?> Users online.
  </div>
  <div class="col">
   <div style="height: 10px;"></div>
      <form action='search' method='GET' role="search">

  <div class="input-group">
        <input type="text" class="form-control" name="query" placeholder="Search...">
  <div class="input-group-append">
    <input type="submit" class="btn btn-primary btn-sm" style="font-size: 14px; margin-left: 8px; margin-top: 0px; margin-bottom: 0px; margin-right: 0px;" value="Search">
  </div>
</div>
</form>
</div>
</div>

<div style="height: 14px;"></div>

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
<a href="profile?id='.$row["id"].'" style="width: 120px; margin-left: 0px; margin-top: 4px; font-size: 14px;" class="btn btn-primary btn-sm">Profile</a>
<br></div><div style="height: 8px;"></div></div>';
}
}
echo "</div>";
?>
   </div>
 </div>
</div>
</div>
</div>
<div style="height: 15px;"></div>
</body>
