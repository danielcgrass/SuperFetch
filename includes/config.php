<?php
    ob_start(); //wait until all the data is inputed until sending info to the server
    session_start();
    $timezone = date_default_timezone_set("America/Kentucky/Lousville");

    $con = mysqli_connect("localhost", "root", "root", "SuperFetch");

    if(mysqli_connect_errno()){
        echo "failed to connect: " . mysqli_connect_errno();
    }



?>