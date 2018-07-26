<?php
require '../conn.php';
$conn    = Connect();

    // The truncate way
if(isset($_POST['delete'])){
    $sql = "TRUNCATE TABLE value_form100";

$result = $conn->query($sql);

    if(!$result)

    {

        die("ERR");

    }
	else
	{
			header('location:record.php');
	}
}
?>