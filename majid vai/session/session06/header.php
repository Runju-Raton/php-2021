<?php
    session_start();
    //echo $_SESSION['runju'];
    if(!isset($_SESSION['runju'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    body{
        margin:0;
        padding:0;
    }
    .menu{
        background-color: #0984e3;
        overflow:hidden;
        color:white;
        height:100vh;
        display:inline-block;
        float:left;
        width:100%;
    }
    h2{
        font-size:48px;
    }
    ul,h2{
        padding:0;
        list-style-type:none;
        text-align:center;
    }
    li{
        font-size:28px;
        padding:10px 0;
        transition:.5s;
    }
    a{
        color:white;
        text-decoration:none;
    }
    li:hover{
        background-color:#2c3e50;
        
    }
    </style>
</head>
<body>

    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-md-3">

            <!-- dashboard menu -->
            <div class="menu">
                <h2>Dashboard</h2>
                
                    <ul>
                        <li>Home</li>
                        <li>About</li>
                        <li>Contact</li>

                            <?php 
                                if("admin"==$_SESSION['type']){
                                    echo "<li><a href='product_insert.php'>Insert Product</li>
                                        <li><a href='registration.php'>Registration</li>
                                        <li><a href='userview.php'>User View</li>";
                                }
                            ?>
                        
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                    <h4><?php echo ucfirst($_SESSION['type']).", ".$_SESSION['runju'];?> is logged in</h4>
                </div>
            </div>
</body>
</html>