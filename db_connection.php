<?php
    
    session_start();
    //credentials
    $hostname="localhost";
    $db_name="id3509828_oxomlab_master_db";
    $username="id3509828_khurs10101";
    $password="khurs10101";
    //ends

    //connection to database
    $con= mysqli_connect($hostname,$username,$password,$db_name);
    
    if(mysqli_connect_errno())
    {
        echo "Error occured ".mysqli_connect_errno();
    }
    



?>