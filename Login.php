<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN PAGE</title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="userid" placeholder="Email / Mobile" required>
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox">Remember me
                </label>
                <a href="a">Forgot Password</a>
            </div>
            <input type="submit" name="login" class="btn" value="Login">
            <div class="register-link">
               
            <p>Don't have an account?<a href="Register.php">Register</a></p>
            </div>
        </form>
    </div>

    <?php
    include("login_db_connection.php");

    if(isset($_POST['login']))
    {
        $userid =  $_POST['userid'];
        $password =  $_POST['password'];
        $login_query = "SELECT * FROM admin where email = '$userid' || mobile = '$userid' && password = '$password'";
        $login_data = mysqli_query($login_conn, $login_query);
        $login_total_row = mysqli_num_rows($login_data);

        //echo ( $login_total_row);

        if($login_total_row == 1)
        {
            // $_SESSION['user_id']=$userid;
            header('location:upload.php');
        }
        else
        {
            echo "Login Failed";
        }
    }

    ?>


</body>

</html>

