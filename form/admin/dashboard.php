<?php
 require '../conn.php';
 $conn    = Connect();
 session_start(); 
 if(!isset($_SESSION['login_user'])){
  header('Location: index.php');
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  
</head>
<body>
  
<div class="container">
  <div class="row">
  <div class="wrapper">
  
  <?php
  if(isset($_SESSION['login_user'])){
  $login_session= $_SESSION['login_user'];
 echo'<span class="welcome">Welcome '.$login_session.'</span>';
  }
  /* if(!empty($_SESSION['username'])){
	  $user_name = $_SESSION['username'];
	  echo'<span>'.$user_name.'</span>';
  }  */
		?>
			<a href="record.php" class="btn btn-lg btn-primary btn-block">Records</a>
			<a href="frequency.php" class="btn btn-lg btn-primary btn-block">Change Frequency</a>
			<a href="password.php" class="btn btn-lg btn-primary btn-block">Change Password</a>
			<a href="update-message.php" class="btn btn-lg btn-primary btn-block">Update Email Message</a>
			<a href="logout.php" class="btn btn-lg btn-primary btn-block">Logout</a>
		</div>
	</div>
</div>

<script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </SCRIPT>
    <script>
        history.pushState(null, null, location.href);
         window.onpopstate = function () {
        history.go(1);
        };
    </script> 
</body>
</html>