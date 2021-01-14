<?php
    session_start();
    if (isset($_POST["login"])){
        $uname=$_POST["uname"];
        $password=$_POST["password"];
        if($uname=="runju" && $password=="1234"){
            $_sesSION["runju"]=$uname;
            header('location: dashboard.php');
        }
        else{
            echo "Your password is incorrect";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    
    
</head>
<body>
    <form method="POST">
        <div class="login-form">
            <pre>
                <select>
                    <option value="---select user---">---select user---</option> 
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>

                User name: <input type="text" name="uname">

                Password:  <input type="password" name="password">

                <button name="login">submit</button>
            </pre>
        </div>
        <h2>My name is Khan</h2>
  
    
    </form>
</body>
</html>