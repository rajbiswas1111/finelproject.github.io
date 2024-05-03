<?php
error_reporting(0);
include("display.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="index.css">
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

    <form action="">
            <div class="search">
                <p style="font-size: 20px;" ><b>Find Your Car</b></p>
        <i class="location_icon"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="location_icon" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411"/>
</svg>
<input type="text" placeholder="Enter source"><br>

<i class="location_icon"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="location_icon" viewBox="0 0 16 16">
  <path d="M8.5.5a.5.5 0 0 0-1 0v.518A7 7 0 0 0 1.018 7.5H.5a.5.5 0 0 0 0 1h.518A7 7 0 0 0 7.5 14.982v.518a.5.5 0 0 0 1 0v-.518A7 7 0 0 0 14.982 8.5h.518a.5.5 0 0 0 0-1h-.518A7 7 0 0 0 8.5 1.018zm-6.48 7A6 6 0 0 1 7.5 2.02v.48a.5.5 0 0 0 1 0v-.48a6 6 0 0 1 5.48 5.48h-.48a.5.5 0 0 0 0 1h.48a6 6 0 0 1-5.48 5.48v-.48a.5.5 0 0 0-1 0v.48A6 6 0 0 1 2.02 8.5h.48a.5.5 0 0 0 0-1zM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
</svg>
<input type="text" placeholder="Enter Destination">

            <i class="icon"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="icon" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5m-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5" />
            </svg><br>
        </div>
    </form>
    <!-- <div class="ads"></div> -->

    <?php
    if ($total_row != 0) {
        while ($result = mysqli_fetch_assoc($data)) {
    ?>
            <div class="container">
                <div class="photo">
                    <img src="<?php echo "" . $result['Driver_img'] . ""; ?>" alt="">

                </div>

                <div class="details">

                    <div class="details_input1" id="name">
                        <label for="">Name</label>
                        <div class='details_input'><?php echo "" . $result['name'] . ""; ?></div>

                    </div>

                    <div class="details_input1" id="capacity">
                        <label for="">Capacity</label>
                        <div class='details_input'><?php echo "" . $result['Capacity'] . ""; ?></div>

                    </div>

                    <div class="details_input1" id="vehical_number">
                        <label for="">Vehical Number</label>
                        <div class='details_input'><?php echo "" . $result['Vehicle_number'] . ""; ?></div>
                    </div>

                    <div class="details_input1" id="ph_number">
                        <label for="">Mobile Number</label>
                        <div class='details_input'><?php echo "" . $result['Mobile Number'] . ""; ?></div>
                    </div>

                    <div class="details_input1" id="source">
                        <label for="">From</label>
                        <div class='details_input'><?php echo "" . $result['Source'] . ""; ?></div>
                    </div>

                    <div class="details_input1" id="destination">
                        <label for="">TO</label>
                        <div class='details_input'><?php echo "" . $result['Destination'] . ""; ?></div>
                    </div>

                    <div class="details_input1" style="border: none;">
                        <a href="tel:+91<?php echo "" . $result['Mobile Number']; ?>" id="call" >Call Now</a>
                    </div>
                </div>

            </div>
    <?php
        }
    } else {
        echo "no record found";
    }
    ?>

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