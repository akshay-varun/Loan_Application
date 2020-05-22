<?php

    $server="localhost";
    $user="dbms";
    $password="hdjdh83748jfjf#@A";
    $db="tutorial";

    $conn=new mysqli($server,$user,$password,$db);

    //database connection error if econnection does not exist
    if($conn->connect_error) {
        die($conn->connect_error);
    }
 ?>   

