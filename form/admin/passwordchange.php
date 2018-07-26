<?php
 require '../conn.php';
 $conn    = Connect();
 session_start(); 
 if(!isset($_SESSION['login_user'])){
  header('Location: index.php');
 }

if(isset($_POST['update']))
{ 
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
		$sql ="select password from user where id='1'";
		$result = $conn->query($sql);	
	if ($result->num_rows > 0) 
	{
		$row = mysqli_fetch_array($result) or die();
		$pass= $row['password'] ;
       
        if($pass != $oldpassword)
        {
        echo "The Password you entered does not Does not match with existing Password";
			header('location:password.php?success=oldnotmatch');
        }
		elseif($newpassword==$confirmnewpassword){
			$sql1="update user set password='$newpassword' where id='1'";
			$result1 = $conn->query($sql1);
        echo "Congratulations You have successfully changed your password";
		header('location:password.php?success=yes');
       }else
        {
       echo "Passwords do not match";
	   	header('location:password.php?success=notmatch');
       }
	}
}
else{
	header('location:dashboard.php');
}

$conn->close();

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
	<a class="btn btn-lg btn-primary btn-block" href="dashboard.php">BACK TO DASHBOARD</a>
</div>
  </div>
</div>

<script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>