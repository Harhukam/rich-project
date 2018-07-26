<?php
require 'conn.php';
$conn = Connect();

if(isset($_POST['submit']))
{
$u_ip = $_POST['iptxt'];

// $sql = "SELECT * FROM value_form where u_ip = '".$u_ip."'";
// $row = $conn->query($sql);
$query= "SELECT * FROM value_form where u_ip='$u_ip'";
 $row = $conn->query($query);	
//print_r($row);
if ($res=$row->num_rows > 0) 
{

/* echo "<pre>";
 print_r($res);
 echo "</pre>";*/
//$key = urlencode(base64_encode($row[id]));
// echo "Exists user found <br/>";
 //echo $res;
echo '<a href="thanks.php?u='. $res .'" class="users">Click Manually Next page</a>';
//header('refresh:1; thanks.php?u=$res');

} 
else
{
// $query   = "INSERT into value_form (status,iptxt) VALUES('" . $first_name . "','" . $last_name . "')";
$u_code = rand(100000, 999999);
 $query   = "INSERT into value_form (status,iptxt) VALUES('" . $first_name . "','" . $last_name . "')";
$success = $conn->query($query);
//echo '<br>';
if ($success==true) {
	
	header('refresh:2; thanks.php?u=$key');
}

}  
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form 20</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <div class="container">
  <div class="row">
  <div class="wrapper">
			<form class="form-signin"  method="post">
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
				<div class="full">
					<input type="text"  class="form-control" name="iptxt" value="<?php echo $_SERVER["REMOTE_ADDR"]; ?>">
				</div>	
				
				<div class="full">
					<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Let's Start"/>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

