<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Register Your Account</h1>
            <div class="input-box">
                <input type="text" placeholder="Full Name" name="fname" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email" name="email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="tel" placeholder="Mobile Number" name="mobile" required>
                <i class='bx bx-phone'></i>
            </div>
            <input type="submit" class="btn" value="Register" name="register_btn">
        </form>
    </div>

    <!-- Database connection -->
    <?php
    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn) {
        //echo "successfull";
    } else {
        echo "failed";
    }

    ?>


    <!-- Send data to Database -->
    <?php


    if ($_POST['register_btn']) {

        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];


        $query = "insert into admin values('$fname','$email','$password','$mobile')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            //echo "successssssss";
        } else {
            echo "failed";
        }
    }

    ?>


</body>

</html>