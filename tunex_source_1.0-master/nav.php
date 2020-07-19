<?php require 'connect.php'; ?>
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <!--<a class="navbar-brand" href="#"><img src="http://tunex.es/logo.png" style="width: 100px;"></a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/groups">Groups</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/users">Users</a>
      </li>
    </ul>
    <?php
      if(!$loggedIn) {
        echo '
          <a href="/login" class="btn btn-success active my-2 my-sm-0">Login</a>&nbsp;
          <a href="/register" class="btn btn-primary active my-2 my-sm-0">Register</a>
        ';
      } else {
        echo '
        <div class="dropdown">
<button class="btn btn-secondary dropdown-toggle my-2 my-sm-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  '; echo $username; echo'
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="/profile?id='.$user->id.'">Profile</a>
  <a class="dropdown-item" href="/settings">Settings</a>
  <a class="dropdown-item" href="/logout">Logout</a>
</div>
</div>
        ';
      }
    ?>
  </div>
</div>
</nav>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
