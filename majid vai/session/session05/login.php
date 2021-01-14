<?php
    session_start();
    if(isset($_SESSION['runju'])){
        header('location: dashboard.php');
    }
    if(isset($_POST["login"])){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $type=$_POST['type'];
        if("Runju Raton"==$uname &&  "1234"==$pass){
            $_SESSION['runju']=$uname;
            $_SESSION['type']=$type;
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
                    <select name="type">
                        <option value="">--select user type--</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select><br>
           User name: <input type="text" name="uname" placeholder="your name"> <br>
            Password: <input type="password" name="pass" placeholder="your password"><br>
                      <button name="login">login</button>   <a href="registration.php">Registration here</a>
        </pre>
        </div>
       
    </form>
</body>
</html>