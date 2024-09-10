<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth with PHP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            width: 100vw;
            overflow-x: hidden;
            position: relative;
            background:url('background.jpg');
            background-size: cover;
        }
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 30px;
            padding: 20px 30px;
            border-radius: 10px;
            background: transparent;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }
        input{
            outline: none;
            border: none;
            width:70%;
            padding: 6px 10px;
            background-color: rgba(255, 255, 255, 0.5);
        }
        .form-input{
            display: flex;
            justify-content: start;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            color: rgb(45, 45, 45);
        }
        button{
            outline: none;
            border: none;
            padding: 6px 10px;
            border-radius: 5px;
            background: rgb(45, 45, 45);
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin: auto;
            width: 60%;
        }
        a{
            text-decoration: none;
        }
        #message{
            display: none;
            font-weight: bold;
            animation:animate 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        @keyframes animate{
            0%{
                opacity: 0;
                transform: scale(0);
            }
            100%{
                opacity: 1;
                transform: scale(1);
            }
        }
        #message.show{
            display: block;
        }
    </style>
</head>
<body>
    <main>
        <!-- If you don't want the form data to reset after you submit then store your  form data in session after submitting and use it -->
        <form action="registerValidate.php" method="POST">
            <h1>Register</h1>
            <div class="form-input">
                <label for="firstname">First Name: </label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="form-input">
                <label for="lastname">Last Name: </label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div class="form-input">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-input">
                <label for="password">Password: </label>
                <input type="text" name="password" id="password">
            </div>
            <button type="submit">Submit</button>
            <h3 id="message" class="<?php echo isset($_SESSION['error']) || isset($_SESSION['success'])?'show':''; ?>" style="<?php echo isset($_SESSION['error'])?'color:red;':'color:green;' ?>">
                <?php
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);// Clear the error message after displaying it
                }else{
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }
                ?>
            </h3>
            <h3>Already have an account?<a href="login.php">Sign In</a></h3>
        </form>
    </main>
</body>
</html>