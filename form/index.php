<?php
require 'conn.php';
$conn = Connect();

if(isset($_POST['submit']))
{

$u_ip = $_POST['iptxt'];

$query= "SELECT * FROM value_form where u_ip = '$u_ip'AND u_status='Y' ";
$row = $conn->query($query);
    if ($res = $row->num_rows > 0) 
    {
     	while($ress = $row->fetch_assoc()) 
      	{
        	//print_r($ress);
        	$u_id=   $ress['id'];
        	$addnumber="23451"; //sutom static Variable 
	        $pickid=   $ress['id'];
	        $u_id_upt=$pickid + $addnumber;
	        
	        $key = urlencode(base64_encode($ress['id']));
	        
	        $u_ip_upt = $_POST['iptxt'];
            $u_code_upt = rand(100000, 999999);
        
	        //$query   = "UPDATE value_form SET id='$u_id_upt', first_name='',last_name='',u_email='',u_code='$u_code_upt', u_status='N' WHERE id='$u_id' ";
	        
	        
	        //$query   = "DELETE FROM value_form WHERE id='$u_id' ";
	        
	         $query   = "INSERT into value_form (u_ip,u_code) VALUES('" . $u_ip_upt . "','" . $u_code_upt . "')";
	         
	        $success = $conn->query($query);
	        
	        
	             if ($success==true) 
                	{
                	     $u_ip2 = $_POST['iptxt'];
                    	$query= "SELECT * FROM value_form where u_ip = '$u_ip2'AND u_status='N' ";
                    	$row = $conn->query($query);

		            	if ($res = $row->num_rows > 0) 
		               	{
			            	while($ress = $row->fetch_assoc())
				            {
				           //$id= $ress['id'];
				           $key = urlencode(base64_encode($ress['id']));
		                 	}
		      
	         	           header('refresh:1; thanks.php?u='.$key);
	             } 
        }
     
            //header('refresh:1; thanks.php?u='.$key);
      }
            echo "exist user found";
           //header('refresh:1; thanks.php?u='.$key);
    } 

   else
   {

   $u_ip1 = $_POST['iptxt'];
   $u_code = rand(100000, 999999);
   $query   = "INSERT into value_form (u_ip,u_code) VALUES('" . $u_ip . "','" . $u_code . "')";
   $success = $conn->query($query);
   //echo '<br>';
    	if ($success==true) 
    	{
    	$query= "SELECT * FROM value_form where u_ip = '$u_ip1'AND u_status='N' ";
     	$row = $conn->query($query);

			if ($res = $row->num_rows > 0) 
			{
				while($ress = $row->fetch_assoc())
				{
				//print_r($ress);
				 //$id= $ress['id'];
				 $key = urlencode(base64_encode($ress['id']));
		     	}
		       //echo '<a href="thanks.php?u='. $id .'" class="users">Click Manually Next page</a>';
	         	header('refresh:1; thanks.php?u='.$key);
	        } 
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

<div class="full">
<input type="text"  class="form-control" name="iptxt" readonly="true" value="<?php echo $_SERVER["REMOTE_ADDR"]; ?>">
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

