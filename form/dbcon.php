<?php

    $DB_HOST = 'localhost';
    $DB_USER = 'lottopla_rich';
    $DB_PASS = 'lottopla_rich';
    $DB_NAME = 'lottopla_rich';
    
    try{
        $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
        $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    
?>