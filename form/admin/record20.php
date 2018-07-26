<?php
 require '../conn.php';
 $conn    = Connect();
 session_start(); 
 if(!isset($_SESSION['login_user'])){
  header('Location: index.php');
 }
 
 
 	$sql ="select number from frequency where id='1'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result) or die();
	$number= $row['number'] ;
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
  <form class="form-del" method ="post" action="delete20.php"> 
<h3 class="text-center">FORM 20</h3><br>
<h3>Frequency Setting: <?php echo $number; ?></h3>

<input type="Submit" class="btn btn-lg btn-primary btn-block" name="delete" value="TRUNCATE DATA"/><br>
</form>
		<br/>
		<br/>
		<a class="btn btn-lg btn-primary" href="dashboard.php">BACK TO DASHBOARD</a>
		

<h3>Total current users:</h3>

<?php
$sql = "SELECT * FROM value_form";
$result = $conn->query($sql);

print $results= $result->num_rows;
echo "<br>";
echo "<br>";
if ($result->num_rows > 0) {	
	?>
	
	<div class=" panel panel-body">
	<table style="width:100%" class="table table-responsive ">
  <tr>
    <th>Serial Number</th>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Email</th>
    <th>Random Code</th>
    <th>IP Address</th>
  </tr>
  <?php
  $i=1; 

    while($row = $result->fetch_assoc()) {
/*         echo $row["first_name"]."  ". $row["last_name"]."	  " . $row["u_email"]."<br> "; */
    
  echo'<tr>';
    echo '<td align="center">'. $i .'</td>';
	echo'<td align="center">'.$row["first_name"].'</td>
    <td align="center">'.$row["last_name"].'</td> 
    <td align="center">'.$row["u_email"].'</td>
    <td align="center">'.$row["u_code"].'</td>
    <td align="center">'.$row["u_ip"].'</td>
  </tr>';
  $i++;
  }
  
  ?>
</table>
</div>
	<?php
}	
/* if ($result->num_rows > 0) { */
    /* 
	echo 'First Name'
    while($row = $result->fetch_assoc()) {
        echo $row["first_name"]."  ". $row["last_name"]."	  " . $row["u_email"]."<br> ";
    } */
/* } */
echo '<br><br><br>';
?>
 </div>
  </div>
</div>

<script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>