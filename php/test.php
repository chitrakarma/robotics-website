<?php
    //checking whether a table exists or not

    include "conn.php";
    include "checkdb.php";

    $et = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE='BASE TABLE'";
    
    $tablename = "contact";

    $result = $conn->query($et, MYSQLI_STORE_RESULT);
    while(list($name) = $result->fetch_row()){ 
        if(strcmp($name,$tablename)==0){
            echo $name." table already exists in mysql server";
            break;
        }
    }
?>