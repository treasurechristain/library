<?php
require_once('inc/db.php');
$session_role2 = $_SESSION['role'];
$session_username2 = $_SESSION['username'];
?>
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Joy Normsoh</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="">Welcome: <i class="fa fa-user"></i> <?php echo ucfirst($session_username2);?></a></li>
            <li><a href="add-book.php"><i class="fa fa-plus-square"></i> Add Book</a></li>
            <?php
              if($session_role2 == 'admin'){
              ?>
            <li><a href="add-user.php"><i class="fa fa-user-plus"></i> Add User</a></li>
            <?php }?>
            <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>

            <li><a href="index.php"><i class="fa fa-user"></i> Home</a></li>
            <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>