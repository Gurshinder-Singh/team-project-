<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LUXUS</title>
    <link rel="icon" type="image/favicon" href="/asset/LUXUS_logo.png"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css"> 
</head>
<body>
<<div class="navbar" id="navbar">
    <a href="homepage.php">HOME</a>
    <a href="loyalty_manager.html">Loyalty Manager</a>
    <a href="feedback_manager.html">Feedback Manager</a>
    <a href="inventorymanagement.php">Inventory Management</a>
    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
            <a href="admin_page.php">ADMIN</a>
            <a href="logout.php">LOGOUT</a>
        <?php endif; ?>
</div>

<!-- CSS -->
<style>
    .navbar {
        height: 50px; 
        display: flex;
        align-items: center;
    }

    .navbar img {
        height: 170%; 
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