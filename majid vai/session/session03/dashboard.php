<?php
    session_start();
    //echo $_SESSION['runju'];
    if(!isset($_SESSION['runju'])){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard page</title>
</head>
<body>
    
    <h2>Dashboard</h2>
    <a href="logout.php">Logout</a>
</body>
</html>