<?php 
    $server='localhost';
    $user='root';
    $password='';
    $dbname='phplearning';

    try{
        $conn=mysqli_connect($server, $user, $password, $dbname);
    }
    catch(mysqli_sql_exception ){
        echo "database connection unsuccessful";
    }
?>