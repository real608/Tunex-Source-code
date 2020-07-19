<?php
include 'more/connect.php';
include 'more/filter.php';

$update = trim($conn->real_escape_string($_POST['update']));
if ($update) {
    $description = strip_tags($_POST['description']);
    $description = trim($conn->real_escape_string($description));
    $description = htmlentities($description);

    $conn->query("UPDATE users SET description='$description' WHERE id='$user->id'");
    
    $error = "<center><div class='alert alert-success' style='width:100%;'>Description updated.</div></center>";
    header("Location: /settings");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
</head>
<body>
<?php require 'more/nav.php'; ?>
<br>
<div class="container">
	<h3>Settings [BETA]</h3>
    <?php
        if(!empty($error)){
            echo $error;
        }
        ?>
    <div class="card" style="padding: 15px;">
        <h5>Change description:</h5>
        <form method="post" action="">
      <textarea class="form-control" rows="8" name="description" placeholder="<?php echo "$user->description"; ?>"></textarea>
      <div style="height: 10px;"></div>
      <input type="submit" class="btn btn-success active" name="update" value="Update">
      </form>
    </div>
</div>
<br>
<?php require 'more/footer.php'; ?>
</body>
</html>