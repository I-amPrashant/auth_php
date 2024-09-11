<?php
    session_start();
    require 'db.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $email=htmlspecialchars($_POST['email']);
        $password=htmlspecialchars($_POST['password']);

        if(empty($email) || empty($password)){
            $_SESSION['loginError']="All fields are required";
            header("Location: login.php");
            exit();
        }

        $sql="SELECT * FROM authphp WHERE email='$email';";

        try{
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                if(password_verify($password, $row['password'])){
                    $_SESSION['firstname']=$row['firstname'];
                    header("Location: homepage.php");
                    exit();
                }else{
                    $_SESSION['loginError']="Incorrect password";
                    header("Location: login.php");
                    exit();
                }
            }else{
                $_SESSION['loginError']="Incorrect Email or password";
                header("Location: login.php");
                exit();
            }
        }
        catch(mysqli_sql_exception){
            $_SESSION['loginError']="Error reading from database";
            header("Location: login.php");
            exit();
        }

    }else{
        header("Location: login.php");
    }


?>
