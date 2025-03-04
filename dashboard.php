<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: index2.html");
    exit();
    }
    echo"Welcome,".$_SESSION["user"]."!";
    ?>
    <a href="logout.php">Logout</a>
