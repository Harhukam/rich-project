<?php
 require '../conn.php';
 $conn    = Connect();
 session_start(); 
/*  if(!isset($_SESSION['login_user'])){
  header('Location: index.php');
 } */

if(isset($_POST['submit']))
{ 
 
 $user_name    = $conn->real_escape_string($_POST['username']);
 $password   = $conn->real_escape_string($_POST['password']);
 $_SESSION['login_user']=$user_name;
 $sql = "SELECT * FROM user where user_name = '$user_name' AND password = '$password'";
 
 $result = $conn->query($sql);

  if ($result->num_rows > 0) 
 {
  
  /* $_SESSION['username'] = $username; */
   $row = mysqli_fetch_array($result) or die();
   if(!empty($row['user_name']) AND !empty($row['password']))
    { $_SESSION['username'] = $row['password'];
   header('location:dashboard.php');
  }
  else
  {
    
    echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
    header('location:index.php?success=wrongpass');
  }  
}
else{
 echo 'SORRY... YOU ENTERED WRONG USERNAME AND PASSWORD... PLEASE RETRY...';
 header('location:index.php?success=wronguser');
} 
} else{
 header('location:index.php');
}
$conn->close();

?>