<?php
 require '../conn.php';
 $conn    = Connect();
 session_start(); 
 if(!isset($_SESSION['login_user'])){
  header('Location: index.php');
 }

	$sql ="select number from frequency100 where id='1'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result) or die();
	$number= $row['number'] ;
	if(isset($_POST['update-fre']))
	{
		if ($result->num_rows > 0) 
		{
			$number = $_POST['number'];
			$sql1="update frequency100 set number='$number' where id='1'";
			$result1 = $conn->query($sql1);		
		}else{
			echo 'Sorry';
		}
	}
?>	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Frequency 21</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  
</head>
<body>

<div class="container">
  <div class="row">
      <div class="wrapper">
		<form class="form-fre" method="post" action="">  
	
		  <h2 class="form-signin-heading">Change Frequency 21</h2>
		    <div class="full">
		  <input type="text" class="form-control" name="number" value="<?php echo $number; ?>" placeholder="Frequency" required=""/> 
</div>		
 
		  <input type="submit" class="btn btn-lg btn-primary btn-block" name="update-fre" Value="Update Frequency" />   
		</form>
		<?php
		if(isset($_POST['update-fre']))
		{
			if ($result->num_rows > 0) 
			{
				echo "<span class='msg'>Congratulations You have successfully changed your frequency</span>";
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