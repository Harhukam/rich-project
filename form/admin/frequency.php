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
  <title>Change Frequency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  
</head>
<body>

<div class="container">
  <div class="row">
      <div class="wrapper">
			<a class="btn btn-lg btn-primary" href="frequency20.php">Frequency 20</a>
			<a class="btn btn-lg btn-primary" href="frequency21.php">Frequency 21</a>
			<br>
			<br>
			<br>
			<a class="btn btn-lg btn-primary" href="dashboard.php">BACK TO DASHBOARD</a>
	  </div>
  </div>
</div>

<script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html> 