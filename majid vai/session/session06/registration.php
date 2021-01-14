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
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="col-md-9 bg-success w-50 p-5">
        <div class="mb-3">
            <form action="" method="POST">
            <label for="">Full name:</label>
            <input type="text" name="fname"  placeholder="Enter your full name" class="form-control"><br>
            <label for="">User name:</label>
            <input type="text" name="uname" class="form-control" placeholder="Enter user name" class="form-control"><br>
            <label for="">Email: </label>
            <input type="email" name="email" class="form-control" placeholder="Your email" required><br>
            <label for="">Your Password: </label>
            <input type="password" name="pass" class="form-control" placeholder="Your Password" required><br>
            <label for="">Confirm Password: </label>
            <input type="password" name="cpass" class="form-control" placeholder="Confirm Your Password"><br>
            <button name="save" class="btn btn-primary">Submit</button>
            <a href="login.php">Already a member?</a>
            </form>
           
        </div>
    </div>
</body>
</html>
   
    
