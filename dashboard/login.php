<?php
include 'config.php';
session_start();


if(isset($_SESSION['email'])){
    header("location: index.php");
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $fetch = "SELECT * FROM `login` WHERE email = '{$email}' AND  password = '{$pass}'";
    $fetchRes = mysqli_query($conn, $fetch);
    
    if (mysqli_num_rows($fetchRes) == 1) {
        $_SESSION['email'] = $email;
        $success = "Successfully Login";

        echo "<script>
        setTimeout(() => {
            window.location.href = 'index.php';
        }, 0);
    </script>";
    } else {
        $exist = "Incorrect Email or password";
    }
}

?>



<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        font-family: 'Raleway', sans-serif;
    }

    .container {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .container:hover .top:before,
    .container:active .top:before,
    .container:hover .bottom:before,
    .container:active .bottom:before,
    .container:hover .top:after,
    .container:active .top:after,
    .container:hover .bottom:after,
    .container:active .bottom:after {
        margin-left: 200px;
        transform-origin: -200px 50%;
        transition-delay: 0s;
    }

    .container:hover .center,
    .container:active .center {
        opacity: 1;
        transition-delay: 0.2s;
    }

    .top:before,
    .bottom:before,
    .top:after,
    .bottom:after {
        content: '';
        display: block;
        position: absolute;
        width: 200vmax;
        height: 200vmax;
        top: 50%;
        left: 50%;
        margin-top: -100vmax;
        transform-origin: 0 50%;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        z-index: 10;
        opacity: 0.65;
        transition-delay: 0.2s;
    }

    .top:before {
        transform: rotate(45deg);
        background: #e46569;
    }

    .top:after {
        transform: rotate(135deg);
        background: #ecaf81;
    }

    .bottom:before {
        transform: rotate(-45deg);
        background: #60b8d4;
    }

    .bottom:after {
        transform: rotate(-135deg);
        background: #3745b5;
    }

    .center {
        position: absolute;
        width: 400px;
        height: 400px;
        top: 50%;
        left: 50%;
        margin-left: -200px;
        margin-top: -200px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
        opacity: 0;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        transition-delay: 0s;
        color: #333;
    }

    .center input {
        width: 100%;
        padding: 15px;
        margin: 5px;
        border-radius: 1px;
        border: 1px solid #ccc;
        font-family: inherit;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    
    <div class="container" onclick="onclick">

        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
            <h2>Please Sign In</h2>
            <form method="post">
            <input type="email" placeholder="email" name = "email" />
            <input type="password" placeholder="password" name = "password" />
            <input type="submit" value="Login" name = "login">
            </form>
            <h2>&nbsp;</h2>
        </div>
    </div>

    
</body>

</html>