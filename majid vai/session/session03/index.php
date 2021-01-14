<?php
    session_start();
    if(isset($_SESSION['runju'])){
        header('location: dashboard.php');
    }
    if(isset($_POST["login"])){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        if("Runju Raton"==$uname &&  "1234"==$pass){
            $_SESSION['runju']=$uname;
            header('location: dashboard.php');
        }
        else{
            echo "invalid password";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .login{
            background-color:lime;
            padding:20px 0;
            width:30%;
            margin: 200px auto;
            border-radius:20px;
            box-shadow: 5px 10px 15px gray;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div class="login">
        <pre>
            <input type="text" name="uname" placeholder="your name"> <br>
            <input type="password" name="pass" placeholder="your password"><br>
            <button name="login">login</button>
        </pre>
        </div>
       
    </form>
</body>
</html>