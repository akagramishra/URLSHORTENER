<?php 
    /*
    Mat padho Yaar
    */

    $domain = "localhost/url/"; //like this: swoop.cf/
    $host = "localhost";
    $user = "root"; //Database username
    $pass = ""; //Database password
    $db = "url"; //Database name

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>