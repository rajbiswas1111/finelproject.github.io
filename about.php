<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all/css">
    <link rel="stylesheet" type="text/css" href="About_style.css">
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

    <div class="heading">
        <h1>About Us</h1>
        ` <p>
            Explore offers hassle-free rental car solutions since 2021, with a commitment to customer satisfaction.
        </p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="/9-4.jpg">
            </div>
            <div class="about-content">
                <h2>Welcome to Rental Cars, your trusted partner for all your car rental needs. We understand that convenience, affordability, and reliability are paramount when it comes to choosing a rental car company. That's why we're dedicated to providing a seamless experience from the moment you book your vehicle to the moment you return it.</h2>
                <p>With Rental Cars, you'll find a diverse fleet of vehicles to suit every occasion. Whether you need a compact car for zipping around the city, a spacious SUV for a family road trip, or a luxury sedan for a special event, we've got you covered. Our vehicles are meticulously maintained to ensure your safety and comfort on the road.
                    At Rental Cars, customer satisfaction is our top priority. We go above and beyond to provide exceptional service that exceeds your expectations. From the moment you arrive to pick up your vehicle to the moment you return it, our team is here to ensure a smooth and stress-free rental experience.

                    With years of experience in the industry, you can trust Rental Cars to deliver the reliability and professionalism you deserve. Whether you're traveling for business or pleasure, we're committed to making your journey a success. Choose Rental Cars for your next adventure and experience the difference for yourself.
                </p>
                <a href="" class="read-more">Read More</a>
            </div>
        </section>
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