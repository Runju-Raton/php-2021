<?php
    $con=new mysqli("localhost","root","","theme");
    if($con->connect_error){
        echo "Connection Error: ".$con->connect_error;
    }
    $updateid=$_GET["thisId"];
    $command="UPDATE tbl_users SET status='1' WHERE id='$updateid'";
    if($con->query($command)===TRUE){
        header('location: userview.php');
    }
?>