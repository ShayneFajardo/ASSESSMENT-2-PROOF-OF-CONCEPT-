<?php 
    $SERVER = 'localhost';
    $USER = 'root';
    $PASSWORD = '';
    $DBname = 'strimolo';

    $conn = mysqli_connect ($SERVER, $USER, $PASSWORD, $DBname);

    if(!$conn)
    {
        die("<script>alert('Connection Failed')</script>");
    }
?>