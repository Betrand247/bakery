<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>My Bakery</title>
</head>

<body>
    <h1>Welcome to My Bakery</h1>
    <p>Delicious treats for everyone!</p>
    <h2>Our Customers:</h2>
    <ul> <?php $sql = "SELECT name, email FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['name'] . " - " . $row['email'] . "</li>";
        }
    } else {
        echo "<li>No customers yet!</li>";
    } ?>
    </ul> <a href="login.html">Login</a> | <a href="signup.html">Sign Up</a>
</body>

</html>