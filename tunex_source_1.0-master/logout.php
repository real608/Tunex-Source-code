<?php
include('more/avatarconnect.php');
 session_start();
 unset($_SESSION['TetrimusSessio']);

 if(session_destroy())
 {
  header("Location: ../");
 }
?>
