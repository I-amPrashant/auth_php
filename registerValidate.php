<?php 
    session_start();
    require 'db.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $firstname=htmlspecialchars($_POST['firstname']);
        $lastname=htmlspecialchars($_POST['lastname']);
        $email=htmlspecialchars($_POST['email']);
        $password= htmlspecialchars($_POST['password']);
        $passwordHash=password_hash($password, PASSWORD_DEFAULT);

        $checkEmail="SELECT * FROM authphp WHERE email='$email'";
        $result=mysqli_query($conn, $checkEmail);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['error']="Email already exists";
            header('Location: register.php');
            exit();
        }

        $sql="INSERT INTO authphp (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$passwordHash')";


        if(empty($firstname) || empty($lastname) || empty($email) || empty($password)){
            $_SESSION['error']="All fields are required";
            header('Location: register.php');
            exit();
        }

        try{
            mysqli_query($conn, $sql);
            $_SESSION['success']="User created successfully";
            header('Location: register.php');
            exit();
        }
        catch(mysqli_sql_exception $e){
            header('Location: register.php');
        };
    }
?>