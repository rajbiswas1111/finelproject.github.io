<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us page</title>
    <link rel="stylesheet" href="Contact_us.css">
    <link rel="stylesheet" href="nav_style.css">
</head>
<body>

<header>
        <nav>
            <div class="logo">
                <h1>Rental Car</h1>
            </div>
            <ul id="menuList">
                <li><a href="index.php">Home</a></li>
                <li><a href="upload.php">Host Car</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact_us.php">Contact</a></li>

                <li><a href="profile.php"><img src="profile.jpeg" alt="photo"></a>

                 
                </li>
            </ul>
            <div class="menu-icon">
                <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="contact">
            <h1>Contact Us</h1>
            <form>
                <label for="name">Your name</label>
                <input type="text" name="name"required>
                <label for="email">Your Email</label>
                <input type="email"name=email required>
                <label for="message">Message</label>
                <textarea name="message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <div class="content">
            <h1>Rental Car</h1>
            <p>If you have any questions or need assistance, please don't hesitate to contact us using the infromation provided. We're here to help you!</p>
            <h2>Contact Information</h2>
            <p><strong>Email:</strong>contact@example.com</p>
            <p><strong>Phone:</strong>(123)456-7890</p>
            <p><strong>Address:</strong>700126,Berunanpukuria,Barasat,West Bengal</p>
        </div>
    </div>

    <script>
        let menuList = document.getElementById("menuList")
        menuList.style.maxHeight = "0px";

        function toggleMenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "300px";
            } else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>

</body>
</html>