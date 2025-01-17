<?php
// Start session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - LUXUS</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" type="image/favicon" href="/asset/LUXUS_logo.png"> 
    <style>
        /* CSS styles */
        .navbar {
            height: 75px;
            display: flex;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            background-color: #363636;
            transition: top 0.3s ease-in-out;
            will-change: transform;
        }

        .navbar a,
        .navbar-logo {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            flex: 1;
            text-align: center;
        }

        .navbar-logo img {
            height: 95px;
            width: auto;
            margin: 0 auto;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            flex: 1;
        }

        .dropbtn {
            background-color: #363636;
            color: white;
            padding: 14px 20px;
            width: 70px;
            height: 70px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .menu-icon {
            height: 50px;
            width: auto;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #363636;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            transition: transform 0.3s ease-in-out;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .form-section {
            padding: 50px 20px;
            background-color: #412920;
            color: white;
            text-align: center;
            margin: 20px;
            border-radius: 10px;
        }

        .form-section h1 {
            color: #f0c14b;
        }

        .form-section form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-section input,
        .form-section textarea,
        .form-section button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
        }

        .form-section button {
            background-color: #f0c14b;
            color: black;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
   <!-- NAVIGATION BAR -->
   
<div class="navbar" id="navbar">
    <div class="dropdown">
        <button class="dropbtn">
            <img src="asset/menu_icon.png" alt="Menu Icon" class="menu-icon">
        </button>
        <div class="dropdown-content">
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="FAQ.php">FAQs</a>
        </div>
    </div>
    <a href="homepage.php">HOME</a>
    <a href="products_page.php">PRODUCTS</a>
    <div class="navbar-logo">
        <img src="asset/LUXUS_logo.png" alt="LUXUS_logo" id="luxusLogo">
    </div>
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="profile.php">PROFILE</a>
        <a href="logout.php">LOGOUT</a>
    <?php else: ?>
        <a href="login.php">LOGIN</a>
    <?php endif; ?>
    <a href="checkout.php">BASKET</a>
    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
        <a href="admin_page.php">ADMIN</a>
    <?php endif; ?>
</div>
    <!-- NAVIGATION BAR END! -->
    
</div>

    <script>
        let prevScrollpos = window.pageYOffset;
        let debounce;
    
        window.onscroll = function() {
            clearTimeout(debounce);
    
            debounce = setTimeout(function() {
                let currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("navbar").style.top = "0";
                } else {
                    document.getElementById("navbar").style.top = "-50px";
                }
                prevScrollpos = currentScrollPos;
            }, 100); 
        }
    </script>
    
    
</body>
</html>

<!-- Updated CSS -->
<style>
.navbar {
    height: 75px; 
    display: flex;
    align-items: center;
    position: fixed;
    width: 100%;
    top: 0;
    background-color: #363636;
    transition: top 0.3s ease-in-out;
    will-change: transform;
}

.navbar a, 
.navbar-logo {
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    flex: 1;
    text-align: center;
    transform: translateX(-100px);
}

.navbar-logo {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    max-width: 200px;
}

.navbar-logo img {
    height: 95px;
    width: auto;
    margin: 0 auto;
}

.dropdown {
    position: relative;
    display: inline-block;
    flex: 1;
}

.dropbtn {
    background-color: #363636;
    color: white;
    padding: 14px 20px;
    width: 70px;
    height: 70px;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

.menu-icon {
    height: 50px;
    width: auto;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #363636;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    transition: transform 0.3s ease-in-out;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    transform: translateX(0);
    transition: transform 0.3s ease-in-out;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.image-container {
    display: flex;
    justify-content: center;
    position: absolute;
}

.image-container img {
    width: 400px;
    height: auto;
    position: absolute;
    left: 1000px;
    top: 200px;
}
</style>

   <!-- Contact Section -->
   <section class="form-section">
    <h1>Contact Us</h1>
    <p>We’d love to hear from you! If you have questions, feedback, or need assistance, please use the form below to get in touch with us. Our team will respond within 1-2 business days.</p>
    <form action="action_page.php" method="post" style="display: flex; flex-direction: column; align-items: center; width: 100%; max-width: 400px;">
        <!-- Email Address -->
        <label for="email" style="color: gold; align-self: flex-start;">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="e.g., example@example.com" required style="width: 100%; padding: 10px; margin-bottom: 15px;">

        <!-- Subject -->
        <label for="subject" style="color: gold; align-self: flex-start;">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="What can we help you with?" required style="width: 100%; padding: 10px; margin-bottom: 15px;">

        <!-- Message -->
        <label for="message" style="color: gold; align-self: flex-start;">Message:</label>
        <textarea id="message" name="message" placeholder="Write your message here..." rows="6" required style="width: 100%; padding: 10px; margin-bottom: 15px;"></textarea>

        <!-- Submit Button -->
        <button type="submit" style="padding: 10px 20px; background-color: #363636; color: white; border: none; cursor: pointer;">Send Message</button>
    </form>
</section>

    <!-- JavaScript for Navbar Scroll Effect -->
    <script>
        let prevScrollpos = window.pageYOffset;
        let debounce;

        window.onscroll = function() {
            clearTimeout(debounce);

            debounce = setTimeout(function() {
                let currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("navbar").style.top = "0";
                } else {
                    document.getElementById("navbar").style.top = "-75px";
                }
                prevScrollpos = currentScrollPos;
            }, 100);
        };
    </script>
</body>
</html>
