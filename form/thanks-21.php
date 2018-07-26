<?php
require 'conn.php';
$conn    = Connect();
$sql1 ="select number from frequency100 where id='1'";
	$result1 = $conn->query($sql1);
	$row = mysqli_fetch_array($result1) or die();
	$number= $row['number'] ;
	if(isset($_POST['update-fre']))
	{
		if ($result1->num_rows > 0) 
		{
			$number = $_POST['number'];
			$sql2="update frequency100 set number='$number' where id='1'";
			$result2 = $conn->query($sql2);		
		}else{
			echo 'Sorry';
		}
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

	$sql = "SELECT * FROM value_form100 where u_email='".$u_email."'";
	$result = $conn->query($sql);
 if ($result->num_rows > 0) {
			echo "Details Are Already Submitted <br/>";
			echo '<a href="index-21.php" class="users">Back</a>';
		}
		else
		{
			$query   = "INSERT into value_form100 (first_name,last_name,u_email) VALUES('" . $first_name . "','" . $last_name . "','" . $u_email . "')";
			$success = $conn->query($query);
		/* print_r($result); */
		/* $results= $result->num_rows; */
		echo '<br>';
			/* if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "id: " . $row["id"]."<br>";
				}
			}
			 */
			if (!$success) {
				die("Couldn't enter data ".$conn->error);
			} else{
				$sqlnew = "SELECT * FROM value_form100";
				$get_val = $conn->query($sqlnew);
				$show_val= $get_val->num_rows;
				$show_vals=$show_val;
				/* for ($result = 49; $result <= 100; $result++) {    */
 			 if( $show_vals % $number == 0 ) 
			  {
 
           			      
                 $err=array();
                $subject = $subject21;
                $to = $u_email;
                $message = $message21;
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: lotto <congrats@lotto-play.net>' . "\r\n";
                $mail=mail($to,$subject,$message,$headers); 
				echo'<script>window.location = "../21x.html" </script>';
				
					} elseif ($show_vals!== 0) {
			   echo'<script>window.location = "../21351x.html" </script>';
			} 
		/* {
		echo $result;
			  }  */
		/* } */
	/* if($results <= 32){
}else{
} 
echo "Thank You For Contacting Us <br>";*/
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