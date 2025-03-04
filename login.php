<?php include 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "SELECT*FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_array($result);
    if(password_verify($password, $row["password"])){
        echo"Login successful!";
   }else{
    echo "Invalid password!";
   }
}else{
    echo"User not found!";
}
} ?>