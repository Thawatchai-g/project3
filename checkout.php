<?php 
    include "connect.php";
  
    session_start();
    if(isset($_SESSION["username"]) and isset($_SESSION["cart"])) {
        $username = $_SESSION["username"];
        $total = $_SESSION["sumprice"];

        $sql = "INSERT INTO orders(username, total) VALUES('$username','$total')";
        mysqli_query($conn,$sql);

        session_destroy();
        mysqli_close($conn);
        header("location: home.php");
    } else {
        header("location: signin.php");
    }
?>