<?php
require 'conn.php';
$conn    = Connect();
$sql1 ="select number from frequency where id='1'";
$result1 = $conn->query($sql1);
$row = mysqli_fetch_array($result1) or die();
$number= $row['number'] ;
if(isset($_POST['update-fre']))
{
if ($result1->num_rows > 0) 
{
$number = $_POST['number'];
$sql2="update frequency set number='$number' where id='1'";
$result2 = $conn->query($sql2);		
}else{
echo 'Sorry';
}
}




if(isset($_GET['u']) && !empty($_GET['u'])) 
{

$uid = base64_decode(urldecode($_GET['u']));//encryption
$sql5 ="select * from value_form where id='$uid' ";
$resuser = $conn->query($sql5);
$row = mysqli_fetch_array($resuser) or die();
$usr_fn= $row['first_name'] ;
$usr_ln= $row['last_name'] ;
$usr_em= $row['u_email'] ;
$usr_cod= $row['u_code'] ;
}

else{
    
     header('location: index.php');
}



$sql3 ="select * from emailmessage where msg_id='1'";
$result4 = $conn->query($sql3);
$row = mysqli_fetch_array($result4) or die();
$subject20= $row['subject20'] ;
$message20= $row['message20'] ;
$subject21= $row['subject21'] ;
$message21= $row['message21'] ;




if(isset($_POST['submit']))
{

$first_name    = $conn->real_escape_string($_POST['first_name']);
$last_name    = $conn->real_escape_string($_POST['last_name']);
$u_email   = $conn->real_escape_string($_POST['u_email']);
$u_code   = $conn->real_escape_string($_POST['u_code']);
//$u_status   = $conn->real_escape_string($_POST['u_ip']);



 $sql = "SELECT * FROM value_form WHERE  u_code !='$u_code' AND id='$uid' ";
$resultu = $conn->query($sql);


if ($resultu->num_rows >0)
{

echo "Please Enter Correct Code";

    
}
else
{

$query   = "UPDATE value_form SET first_name='$first_name',last_name='$last_name',u_email='$u_email',u_code='$u_code', u_status='Y' WHERE id='$uid' ";
$success = $conn->query($query);

echo '<br>';
if (!$success) 
{
die("Couldn't enter data ".$conn->error);
} 
else
{
$sqlnew = "SELECT * FROM value_form";
$get_val = $conn->query($sqlnew);
$show_val= $get_val->num_rows;
$show_vals=$show_val;
/* for ($result = 49; $result <= 100; $result++) {    */
if( $show_vals % $number == 0 ) 
{

$err=array();
$subject = $subject20;
$to = $u_email;
$message = $message20;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: lotto <congrats@lotto-play.net>' . "\r\n";
$mail=mail($to,$subject,$message,$headers); 

echo'<script>window.location = "../20x.html" </script>';
} elseif ($show_vals!== 0) {
echo'<script>window.location = "../21351x.html" </script>';
}

}  
}  
}
$conn->close();
?>
<style>
a.users {
background-color: #29b7e2;
color: #fff;
padding: 10px;
margin-top: 20px;
display: inline-block;
text-decoration: none;
}
</style>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Form 20</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<div class="container">
<div class="row">
<div class="wrapper">
<form class="form-signin"  method="post">
<div class="full">
<label> First Name:</label>
<input type="text"  class="form-control" name="first_name" value="<?php echo $usr_fn; ?>" required/>
</div>	
<div class="full">
<label>Last Name:</label>
<input type="text"  class="form-control" name="last_name" value="<?php echo $usr_ln; ?>" required/>
</div>
<div class="full">
<label>Email:</label>
<input type="email"  class="form-control"  name="u_email" value="<?php echo $usr_em; ?>" required/>
</div>

<div class="full">
<input type="text" readonly="true" name="code" class="form-control"  id="pass1" value="<?php echo $usr_cod; ?>">

<input type="text" placeholder="Enter Code" id="pass2" onkeyup="checkPass(); return false;"  class="form-control"  name="u_code" value="" required/>
</div>

<div class="full">
<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Submit"/>
</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">

	function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
// $(function(){
//   $("#first, #second").on("keyup", function () {
//     var fst=$("#first").val();
//     var sec=$("#second").val();
//     if (Number(sec)==Number(fst)) {
//       alert("code verify");
//     return true;
//     }
//   })
// })
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>