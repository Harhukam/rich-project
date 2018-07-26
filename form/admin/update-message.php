<?php
error_reporting( ~E_NOTICE );
 require '../conn.php';
 $conn    = Connect();
 session_start(); 
if(!isset($_SESSION['login_user'])){
  header('Location: index.php');
 }

$sql3 ="select * from emailmessage where msg_id='1'";
	$result4 = $conn->query($sql3);
	$row = mysqli_fetch_array($result4) or die();
	
	$sub1= $row['subject20'] ;
	$msg1= $row['message20'] ;
	$sub2= $row['subject21'] ;
	$msg2= $row['message21'] ;
  
	if(isset($_POST['update']))
	{
		if ($result4->num_rows > 0) 
		{
        $a1 = $_POST['subject20'];
        $a2 = $_POST['message20'];
        $a3 = $_POST['subject21'];
        $a4 = $_POST['message21'];
			
			$sql1="update emailmessage set subject20='$a1',message20='$a2',subject21='$a3',message21='$a4' where msg_id='1' ";
			$result1 = $conn->query($sql1);	
			
			$successMSG = "update Successfully";
			header('refresh:1;  update-message.php');
		}
		else{
		$errMSG = "Sorry.";
		}
	}
	
	
	

	
?>	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UpDate email message</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  
</head>
<body>

<div class="container">
  <div class="row">
 <div class="col-sm-12">
  
<form class="form-fre" method="post" action="">  
<h2 class="form-signin-heading">Update Subject or Message 20</h2>

<div class="full">
<input type="text" class="form-control" name="subject20" value="<?php echo $sub1; ?>" placeholder="Subject form 20" /> 
</div>	

<div class="full">
<textarea type="text" class="form-control" name="message20"  placeholder="Message for form 20" /><?php echo $msg1; ?></textarea>
</div>	

          
<h2 class="form-signin-heading">Update Subject or Message 20</h2>
<div class="full">
<input type="text" class="form-control" name="subject21" value="<?php echo $sub2; ?>" placeholder="Subject form 21" /> 
</div>	

<div class="full">
<textarea type="text" class="form-control" name="message21"  placeholder="Message for form 21" /><?php echo $msg2; ?></textarea>
</div>	
<input type="submit" name="update" value="Update" class="btn btn-lg btn-primary">
</form>
		<br/>
		<br/>
		
    	<?php
if(isset($errMSG))
{
?>
<div class="alert alert-danger">
<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
</div>
<?php
}
else if(isset($successMSG))
{
?>
<div class="alert alert-success">
<strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
</div>
<?php
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