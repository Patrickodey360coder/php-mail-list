<?php

    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $from = 'patrickodey984@gmail.com';

    $db_server = 'localhost';
    $db_user = 'root';
    $db_pwd = '';
    $db_name = 'patrick_store';

    $dbc = mysqli_connect($db_server, $db_user, $db_pwd, $db_name)
    or die('Error connecting to database').mysql_connect_error();

    if(isset($_POST['send'])){

        $query = "SELECT * from email_list";

        $result = mysqli_query($dbc, $query) or die('cannot query database');

        while($row = mysqli_fetch_array($result)){
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];

            $message = "Dear <b> $first_name $last_name</b> \n $body";
            $to = $row['email'];
            mail($to, $subject, $message, 'From:'.$from);

            echo 'email sent to '.$to.'<br/>';
            
            
        };
    };

    mysqli_close();
    


    

    



?>