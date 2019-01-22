<?php

    include "conn.php";
    include "checkdb.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $year = $_POST['year'];
    $branch = $_POST['branch'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $name = $fname.' '.$lname;

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

    echo "
        <!DOCTYPE html>
<html>
    <head>
        <title>
            Registration Confirmed
        </title> 

        <!-- Linking Bootstrap 3 -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" >
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
       
        <!-- Linking the Stylesheet -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\" />

    </head>

    <body>

        <!-- Navigation Bar -->
        <nav class=\"navbar navbar-default navbar-fixed-top\" style=\"width: 100%;\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <p class=\"navbar-btn\" >
                        <!-- Logo -->
                        <a href=\"\" class=\"navbar-brand\" style=\"font-size: 27px;\">
                            Robotics
                        </a>
                    </p>
                    <!-- For Screen of lower dimensions -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavBar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <!-- Main menu/options of navigation bar -->
                <div class=\"collapse navbar-collapse\" id=\"myNavBar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"Index.html\" class=\"navbar-btn\">
                                Home
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of navigation bar -->

        <!-- Confirmation Message -->
        <div class=\"jumbotron text-center\" style=\"margin-top: 15%;\">
            <h1>
                $name successfully registered!
            </h1>
            <p>
                You'll be hearing from us soon!
            </p>
        </div>
        <!-- End of Confirmation Message-->

        <!-- Footer Seciton-->
        <div class=\"footer\">
            <footer style=\"margin-top: 12%;\">
                <div class=\"container text-center\" >
                    <p>Robotics &copy; Chitransh Vishwakarma. All Rights Reserved | Contact : +91 9922542931</p>
                </div>
            </footer>
        </div>
        <!-- End of Footer Section-->
    </body>
</html>
    
    ";
?>