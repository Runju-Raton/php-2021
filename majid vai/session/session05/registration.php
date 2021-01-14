<?php 

    if(isset($_POST['save'])){
        $fname=$_POST['fname'];
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        $status="0";

        if($pass==$cpass){
            $con= new mysqli("localhost","root","","theme");
            if($con->connect_error){
                echo "Database Conncetion Error: ".$con->connect_error;
            }
            $mysql="INSERT INTO `tbl_users`(`t_fname`, `t_uname`, `t_email`, `t_pass`, `status`) VALUES ('$fname','$uname','$email','$pass','$status')";
            if($con->query($mysql)){
                echo "Your data insert is successful!";
            }
            else{
                echo "Data Submit Problem: ".$con->error;
            }
        }
        else{
            echo "Your Password isn't match";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    
    <form action="" method="POST">
    
        <label for="">Full name: </label>
        <input type="text" name="fname"><br>
        <label for="">User name: </label>
        <input type="text" name="uname"><br>
        <label for="">Email: </label>
        <input type="email" name="email"><br>
        <label for="">Password: </label>
        <input type="password" name="pass"><br>
        <label for="">Confirm Password: </label>
        <input type="password" name="cpass"><br>
        <button name="save">Submit</button>
    </form>
    <a href="login.php">Already Member</a>
</body>
</html>