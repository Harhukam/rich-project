<?php
 session_start(); 
 require '../conn.php';
 $conn    = Connect();
 if(isset($_POST['submit'])){
/*  $user_name    = $conn->real_escape_string($_POST['username']); */
 
 $_SESSION['login_user']=$user_name;
 $sql = "SELECT * FROM user where user_name = '$user_name'";
 
 $result = $conn->query($sql);

  if ($result->num_rows > 0) 
 {
  
  /* $_SESSION['username'] = $username; */
   $row = mysqli_fetch_array($result) or die();
   
   header('location:dashboard.php');
  }
   else
  {
   header('location:index.php');
}}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  
</head>
<body>
  
<div class="container">
  <div class="row">
      <div class="wrapper">
  <form class="form-signin" method ="post" action="login.php">  
 
    <h2 class="form-signin-heading">Please login</h2>
    <div class="full">
    <input type="text" class="form-control" name="username" placeholder="User name" required="" autofocus="" />
    </div>
    <div class="full">
    <input type="password" class="form-control" name="password" placeholder="Password" required=""/> 
</div>    
    <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" />   
  </form>
  <?php
  if(isset($_GET['success'])){
  $msg= $_GET['success'];
  if($msg=='wrongpass'){
   echo "<span class='msg'>SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...</span>";
  }elseif($msg=='wronguser'){
   echo "<span class='errmsg'>SORRY... YOU ENTERED WRONG USERNAME AND PASSWORD... PLEASE RETRY...</span>";
  }else{
   
  }
  }
  ?>
   </div>
  </div>
</div>

<script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
