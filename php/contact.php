<?php

    include "conn.php";
    include "checkdb.php";
    include "checkRT.php";
    include "checkCT.php";

    $name = $_POST['cname'];
    $em = $_POST['cemail'];
    $msg = $_POST['cmsg'];

    $dat = "INSERT INTO 
            contact            #table name 
            VALUES (
                '$name',
                '$em',
                '$msg',
            );";


    echo $name;
    echo $em;
    echo $msg;

    $conn->query($dat) or die("Couldn't enter data");

    header("Location: ../html/confirmcon.html");
?>