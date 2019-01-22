<?php

    include "conn.php";
    include "checkdb.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $year = $_POST['year'];
    $branch = $_POST['branch'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    switch($year){
        case "first":
            $year = 1;
            break;
        case "second":
            $year = 2;
            break;
        case "third":
            $year = 3;
            break;
        case "fourth":
            $year = 4;
            break;
        default:
            $year = 0;
    }

    $ins = "INSERT INTO 
            register            #table name 
            VALUES (
                '$fname',
                '$lname',
                '$year',
                '$branch',
                '$email',
                '$contact'
            );";

    $conn->query($ins) or die("Couldn't enter data");

    header("Location: ../html/confirmreg.html");
?>