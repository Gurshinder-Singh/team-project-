<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LUXUS</title>
    <link rel="icon" type="image/favicon" href="/asset/LUXUS_logo.png"> <!-- FAVICON ICON-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css"> <!-- Link to external stylesheet -->
</head>
<body>
    <!-- Gold shape background -->
    <div class="gold-shape"></div>

    <!-- Fixed luxus text -->
    <div class="luxus-text">LUXUS</div>
    
    <!-- Fixed catchphrase text -->
    <div class="catchphrase-text">OF THE ESSENCE</div>

    <!-- Fixed catchphrase2 text -->
    <div class="catchphrase2-text">TIME WAITS FOR NO ONE</div>

    <!-- Fixed catchphrase3 text -->
    <div class="catchphrase3-text">LET OUR EXPERTS FIND YOUR FIT</div>

   <!-- Navigation bar -->
<div class="navbar" id="navbar">
    <a href="#menu">HOME</a>
    <a href="#search">SEARCH</a>
    <img src="asset/LUXUS_logo.png" alt="LUXUS_logo" id="luxusLogo">
    <a href="#wishlist">PROFILE</a>
    <a href="#cart">BASKET</a>
    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
            <a href="admin_page.php">ADMIN</a>
        <?php endif; ?>
</div>

<!-- CSS -->
<style>
    .navbar {
        height: 50px; /* Set your desired navbar height */
        display: flex;
        align-items: center;
    }

    .navbar img {
        height: 170%; /* Adjust this percentage to make the image bigger */
        max-height: 170%;
    }
</style>


    <script>
        let prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-50px";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
</body>
</html>
