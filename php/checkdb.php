<?php 

    //checking whether database esists or not

    include "conn.php";
    
    $ge = "SHOW DATABASES";
    $db_name = "phoenix";
    $result = $conn->query($ge, MYSQLI_STORE_RESULT);

    while(list($name) = $result->fetch_row()){ 
        if(strcmp($name,$db_name)==0){
            echo $name." already exists in mysql server";
        }
    }

?>


