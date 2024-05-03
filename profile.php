<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="profile.css">
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


    <div class="main">
        <img src="graphic-designer-digital-avatar-generative-ai_934475-9292.avif" alt="photo">
        <div class="pf">
            <div class="name">Sajib Biswas</div>
            <div class="mobile">78945612301</div>
        </div>

    </div>
    <a href="" id="edit" >Edit Profile</a>

    <div class="preferences">
        <a href="" class="element">Favourite Car</a><a href="" class="element">Current City</a><a href="" class="element">Settings</a><a href="" class="element">Policies</a>
    </div>

    <div id="logout">Logout</div>


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