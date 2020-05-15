<?php

    


    

    

    if(isset($_POST['submit'])){
        

        $db_server = 'localhost';
        $db_user = 'root';
        $db_pwd = '';
        $db_name = 'patrick_store';

        $dbc = mysqli_connect($db_server, $db_user, $db_pwd, $db_name)
        or die('Error connecting to database').mysql_connect_error();

        $first_name = $_POST['firstname'];
        $last_name  = $_POST['lastname'];
        $email      = $_POST['email'];
    
        $query = "INSERT INTO email_list(first_name, last_name, email)
               VALUES('$first_name', '$last_name', '$email')";


        mysqli_query($dbc, $query) or die('could not query database');

        echo 'customer added successfully';
        mysqli_close($dbc);
    }


    

?>