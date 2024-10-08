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
    </style>
</head>
<body>
    <main>
        <form action="#" method="POST">
            <h1>Login</h1>
            <div class="form-input">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-input">
                <label for="password">Password: </label>
                <input type="text" name="password" id="password">
            </div>
            <button type="submit">Submit</button>
            <h3>Don't have an account?<a href="register.php">Sign up</a></h3>
        </form>
    </main>
</body>
</html>