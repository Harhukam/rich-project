<?php
	require 'conn.php';
	$conn    = Connect();
?><h3>Total current users:</h3>
<?php
$sql = "SELECT * FROM value_form100";
$result = $conn->query($sql);
print $results= $result->num_rows;
echo "<br>";
echo "<br>";
if ($result->num_rows > 0) {	
	?>
<table style="width:100%">
  <tr>
    <th>Serial Number</th>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Email</th>
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
  </tr>';
  $i++;
  }
  ?>
</table>
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