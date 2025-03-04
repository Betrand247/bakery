<?php
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Bites Bakery</title>
    <link rel="stylesheet" href="log_in.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">


</head>

<body> <!-- Navigation Bar -->
    <div class="transparent-bg">
        <div class="login-container">
            <h2>Welcome to sweet bites bakery</h2>
            <p>
                please log in to continue
            </p>
     
                <div class=" input-group">
                    <label for="email">Email</label>
                        <form action="index.php" method="POST">
                    <input type="email"  id="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="" id="password" name="password" placeholder="Enter password" required>
                </div>
                <button type="submit" >Log in</button>
            </form>
                <p>Dont have an account?<a href="registration.html">Register here</a></p>
                <script>
                    document.getElementById("login-form").addEv
                    entListener("submit",async function(event){event.preventDefault();

                        const email =
                        document.getElementById("email").value;
                        const password=
                         document.getElementById("password").value;
                         const respone=await
                         fetch("http//localhost:3306/login",{
                            method:"POST",
                            headers:{"content-Type":"applicaton/json"},
                            body:JSON.stringify({email,password})
                         });
                         const data=await respone.json();

                         if(data.success){
                            alert("login successful!");
                            window.location.href="index.html"
                         }else{
                            alert("invalid login. try again.");
                         }
                         });
                </script>
                </div>
        </div>
 
    <?php
    $sql = "Select name FROM users";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row['name'] . "</li>";
    }
    ?>
       </body>
</html>