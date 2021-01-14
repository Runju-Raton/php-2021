<?php
    session_start();
    if(isset($_SESSION['runju'])){
        header('location: dashboard.php');
    }
    if(isset($_POST["login"])){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $type=$_POST['type'];

        $con=new mysqli("localhost","root","","theme");
        if($con->connect_error){
            echo "Connection Error: ".$con->connect_error;
        }
        $alldata=$con->query("SELECT * FROM `tbl_users` WHERE t_uname='$uname' AND t_pass='$pass' AND status='1' ");
        if($alldata->num_rows>0){
            $_SESSION['runju']=$uname;
            $_SESSION['type']=$type;
            header('location: dashboard.php');
        }
        else{
            echo "User not found";
        }

      /*   if("Runju Raton"==$uname &&  "1234"==$pass){
            $_SESSION['runju']=$uname;
            $_SESSION['type']=$type;
            header('location: dashboard.php');
        }
        else{
            echo "invalid password";
        } */
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .login{
            background-color:lime;
            padding:20px 150px;
            width:50%;
            margin: 100px auto;
            border-radius:20px;
            box-shadow: 10px 10px 5px gray;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div class="login">
                    <select name="type" class="form-control" required>
                        <option value="">--select user type--</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select><br>
           User name: <input type="text" name="uname" placeholder="your name" class="form-control"> <br>
            Password: <input type="password" name="pass" placeholder="your password" class="form-control"><br>
                      <button name="login" class="btn btn-primary">login</button>  
                   <button class="btn btn-primary ml-5">
                     <a href="registration.php" class="text-white text-decoration-none">Registration here</a>
                   </button>  
      
        </div>
       
    </form>
</body>
</html>