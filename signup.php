<?php 
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);
    if ($stmt->execute()) {
        echo "Signup successful! <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " .$stmt->error;
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Signup</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="signup-container">
        <div class="signup-form">
            <h2>Sign Up for Sweet Treats!</h2>
            <form action="db.php" method="POST">
                <label for="name">Full Name</label>
                <input type="text" name="name" placeholder="Your Name" required><br>

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Your Email" required><br>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required><br>

                <button type="submit" class="btn">Sign Up</button>
            </form>
            <p>Already have an account? <a href="login.php">Log In</a></p>
        </div>
    </div>
</body>

</html>