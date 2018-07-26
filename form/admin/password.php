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
  <title>Change Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  
</head>
<body>

<div class="container">
  <div class="row">
      <div class="wrapper">
		<form class="form-Password" method ="post" action="passwordchange.php">  
	
		  <h2 class="form-signin-heading">Change Password</h2>
		    <div class="full">
		  <input type="password" class="form-control" name="oldpassword" placeholder="old password" required=""/> 
</div>		
 <div class="full">
		  <input type="password" class="form-control" name="newpassword" placeholder="New Password" required=""/> 
</div>		  
 <div class="full">
		  <input type="password" class="form-control" name="confirmnewpassword" placeholder="Confirm new Password" required=""/> 
</div>		
		  <input type="submit" class="btn btn-lg btn-primary btn-block" name="update" Value="Update Password" />   
		</form>
		<?php
		if(isset($_GET['success'])){
		$msg= $_GET['success'];
		if($msg=='yes'){
			echo "<span class='msg'>Congratulations You have successfully changed your password</span>";
		}elseif($msg=='oldnotmatch'){
			echo "<span class='errmsg'>The Password you entered does not Does not match with existing Password</span>";
		}elseif($msg=='notmatch'){
			echo "<span class='errmsg'>Password does not match</span>";
		}else{
			
		}
		}
		?>
		<br/>
		<br/>
		<br/>
		<a class="btn btn-lg btn-primary" href="dashboard.php">BACK TO DASHBOARD</a>
	  </div>
  </div>
</div>

<script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
   