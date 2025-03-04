<?php
session_start();
include'db_connect.php';
if($_SERVER["REQUEST_METHED"]=="POST"){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql= "SELECT*FROM users WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    $row=mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"])){
        $_SESSION['user']=$row['name'];
header("Location:dashboard.php");
}else{
    echo"Invalid password!";
    }
}else{
    echo "User not found";
}
}
mysqli_close($conn);
?>