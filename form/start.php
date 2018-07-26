<?php
require 'conn.php';
$conn = Connect();

if(isset($_POST['submit']))
{
$u_ip = $_POST['iptxt'];
//$iptxt   = $conn->($_POST['iptxt']);
//$sql = "SELECT * FROM value_form where u_ip='".$iptxt."'";
$sql = "SELECT * FROM value_form where u_ip = '$u_ip' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
echo "Exists user found <br/>";
//echo '<a href="index.php" class="users">Back</a>';
$key = urlencode(base64_encode($id));
print_r($key);
//header('location: form.php?u=<?php echo $id; ?');
}
else
{
// $query   = "INSERT into value_form (status,iptxt) VALUES('" . $first_name . "','" . $last_name . "','" . $u_email . "')";
$query = "INSERT INTO `value_form`(`u_ip`) VALUES ($u_ip)";
$success = $conn->query($query);
echo '<br>';

}  
}

$conn->close();
?>