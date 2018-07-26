<?php
require 'conn.php';
$conn    = Connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Form 21</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="wrapper">
<form class="form-signin" action="thanks-21.php" method="post">
<div class="full">
<label> First Name:</label>
<input type="text"  class="form-control" name="first_name" required/>
</div>
<div class="full">
<label>Last Name:</label>
<input type="text"  class="form-control" name="last_name" required/>
</div>
<div class="full">
<label>Email:</label>
<input type="email"  class="form-control"  name="u_email" required/>
</div>
<div class="full">
<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Submit"/>
</div>
</form>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>