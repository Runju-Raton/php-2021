<?php
session_start();
    if(!isset($_SESSION["runju"])){
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="menu">
   <h2><?php echo $_SESSION["runju"];?> is logged in</h2>
    <h5>Dashboard</h5>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
            <li>Insert</li>
            <li>View</li>
            <li><a href="logout.php">logout</a></li>
        </ul>

   </div>
    
</body>
</html>