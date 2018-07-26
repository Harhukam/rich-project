<?php
function Connect()
{
    $dbhost = "localhost";
    $dbuser = "lottopla_rich";
    $dbpass = "lottopla_rich";
    $dbname = "lottopla_rich";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
    return $conn;
}
?>
