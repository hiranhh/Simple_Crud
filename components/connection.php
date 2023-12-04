<?php
    /* DATABASE CONNECTION*/
    $con = mysqli_connect("localhost","root","","simple_curd2");

    if(!$con){
        die('Connection Failed'. mysqli_connect_error());
    }
?>
