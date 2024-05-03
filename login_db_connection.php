<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration";

    $login_conn = mysqli_connect($servername,$username,$password,$dbname);

    if($login_conn)
    {
        //echo "successfull";
    }
    else{
        echo "failed";
    }

?>