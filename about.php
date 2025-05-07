<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
    <title>Gallery Cafe Restaurant - About</title>
    <link rel="stylesheet" href="about.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Loader Overlay -->
    <div class="loader">
        <div class="loader-content">
            <div class="logo">
                <img src="Images/loadlogo.jpg" alt="Gallery Cafe Logo" class="logo-image">
            </div>
            <div class="logo-load">
                <h1><span class="red">The</span> Gallery <span class="gray">Café</span></h1>
            </div>
            <div class="spinner"></div>
        </div>
    </div>
    
    <header>
    <nav>
        <div class="logo">
            <img src="Images/logo.png" alt="Logo">
        </div>

        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            
            <!-- Menu Dropdown -->
            <li class="dropdown">
                <a href="menu.php">Menu <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-content">
                    <li><a href="breakfast.php">Breakfast</a></li>
                    <li><a href="lunch.php">Lunch</a></li>
                    <li><a href="dinner.php">Dinner</a></li>
                    <li><a href="desserts.php">Desserts</a></li>
                    <li><a href="beverages.php">Beverages</a></li>
                </ul>
            </li>
            
            <!-- Reservation Dropdown -->
            <li class="dropdown">
                <a href="#">Reservation <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-content">
                    <li><a href="opentable.php">Open Table</a></li>
                    <li><a href="reservation.php">Reservation Form</a></li>
                </ul>
            </li>

            <li><a href="order.php">Order Online</a></li>
            
            <!-- Events Dropdown -->
            <li class="dropdown">
                <a href="#">Events <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-content">
                    <li><a href="happening.php">Happening Event</a></li>
                    <li><a href="upcoming.php">Upcoming Events</a></li>
                </ul>
            </li>

            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <div class="social-icons-nav">
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class='bx bxl-facebook'></i></a>
            <a href="https://web.whatsapp.com/"><i class='bx bxl-whatsapp'></i></a>
            <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
            <a href="login.php"><i class='bx bxs-user'></i></a>
        </div>

        <!-- Menu icon for small devices -->
        <div class="menu-icon" id="menu-icon">
            <i class='bx bx-menu'></i>
            <i class='bx bx-x'></i>
        </div>

    </nav>
</header>

    <section class="about">
        <div class="background"></div>
        <section class="aboutbg">
            <!-- Search Bar Section -->
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search foods..." class="search-bar">
                <button class="search-btn"><i class='bx bx-search'></i></button>
                <div class="result-box"></div>
              </div> 
            
            <div class="about-contant">
                <h1>About Us</h1>
            </div>
        </section>
    </section>

    <section class="about-us">
        <div class="container">
            <div class="about-left">
                <div class="image-grid">
                    <img src="Images/about-1.jpg" alt="Restaurant Interior">
                    <img src="Images/about-2.jpg" alt="Dining Area">
                    <img src="Images/about-3.jpg" alt="Dish">
                    <img src="Images/about-4.jpg" alt="Platter">
                </div>
            </div>
            <div class="about-right">
                <h1>Who we are?</h1>
                <p>The Gallery Café Restaurant is a vibrant culinary destination in Colombo, known for its fusion of local and international flavors. We are passionate about delivering exceptional dining experiences, where each dish is thoughtfully prepared using the finest ingredients.</p>
                <p>Our team is dedicated to creating a warm, artistic atmosphere where food lovers can gather to enjoy both cuisine and culture.</p>
                
                <a href="#" class="read-more">READ MORE</a>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container-n">
            <div class="stat-item">
                <h2 class="number" data-target="18" data-speed="150">0</h2>
                <p>YEARS OF EXPERIENCED</p>
            </div>
            <div class="stat-item">
                <h2 class="number" data-target="60" data-speed="200">0</h2>
                <p>MENUS/DISH</p>
            </div>
            <div class="stat-item">
                <h2 class="number" data-target="50" data-speed="150">0</h2>
                <p>STAFFS</p>
            </div>
            <div class="stat-item">
                <h2 class="number" data-target="15000" data-speed="300">0</h2>
                <p>HAPPY CUSTOMERS</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container-t">
            <div class="testimonial-slider">
                <div class="slider active">
                    <img src="Images/person_1.jpg" alt="Person 1">
                    <p>The flavors and presentation were amazing. <br> Can’t wait to come back!</p>
                    <h3>Jason Perera</h3>
                    <span>CUSTOMER</span>
                </div>
                <div class="slider">
                    <img src="Images/person_2.jpg" alt="Person 2">
                    <p>Gallery Café offers both great food and a cozy <br> atmosphere. Highly recommended!</p>
                    <h3>Arun Silva</h3>
                    <span>CUSTOMER</span>
                </div>
                <div class="slider">
                    <img src="Images/person_3.jpg" alt="Person 3">
                    <p>Amazing variety and excellent quality. <br> A perfect spot for any meal!</p>
                    <h3>Nimal Fernando</h3>
                    <span>CUSTOMER</span>
                </div>
                <div class="slider">
                    <img src="Images/person_4.jpg" alt="Person 4">
                    <p>The food at Gallery Café is simply outstanding! <br> A great place with a relaxing vibe.</p>
                    <h3>Ravi Jayasinghe</h3>
                    <span>CUSTOMER</span>
                </div>
                <div class="slider">
                    <img src="Images/person_1.jpg" alt="Person 5">
                    <p>Wonderful service and delicious meals. <br> Definitely a must-visit in Colombo!</p>
                    <h3>Kavindu</h3>
                    <span>CUSTOMER</span>
                </div>
            </div>
            <div class="dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
            </div>
        </div>
    </section>

    <footer>
        <div class="logo-title">
            <h1><span class="red">The</span> Gallery <span class="gray">Café</span></h1>
        </div>
        <p class="description">
            The Gallery Café stands out for its perfect blend of creativity, flavor, and a one-of-a-kind dining atmosphere.
        </p>

        <div class="contact-info">
            <p>123 Main Street, Colombo 00700, Sri Lanka</p>
            <p>077 859 7438 &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; 071 681 9945</p>
        </div>

        <div class="social-icons">
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="Images/facebook.png" alt="Facebook"></a>
            <a href="https://web.whatsapp.com/"><img src="Images/Whatsapp.png" alt="Whatsapp"></a>
            <a href="https://www.instagram.com/"><img src="Images/instagram.png" alt="Instagram"></a>
        </div>

        <div class="subscribe">
            <form method="POST" action="">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required>
                <button type="submit" name="submit_subscription">Subscribe</button>
            </form>
        </div>
    
        <div class="scrolling-images">
            <div class="scrolling-container">
                <div class="slide">
                <img src="Images/Breakfast/Apple.jpg" alt="Image 1">
            </div>
                <div class="slide">
                <img src="Images/Breakfast/Avacado.webp" alt="Image 2">
            </div>
                <div class="slide">
                <img src="Images/Breakfast/Banana.jpg" alt="Image 3">
            </div>
                <div class="slide">
                <img src="Images/Breakfast/Egg cheese.jpg" alt="Image 4">
            </div>
                <div class="slide">
                <img src="Images/Lunch/Burger.jpg" alt="Image 1">
            </div>
                <div class="slide">
                <img src="Images/Lunch/Chicken.jpg" alt="Image 2">
            </div>
                <div class="slide">
                <img src="Images/Lunch/Coleslow.jpg" alt="Image 3">
            </div>
                <div class="slide">
                <img src="Images/Lunch/Falafel.jpg" alt="Image 4">
            </div>
                <div class="slide">
                <img src="Images/Dinner/Balsamic.webp" alt="Image 1">
            </div>
                <div class="slide">
                <img src="Images/Dinner/Drawn Butter.jpg" alt="Image 2">
            </div>
                <div class="slide">
                <img src="Images/Dinner/Grilled Salmon.jpg" alt="Image 3">
            </div>
                <div class="slide">
                <img src="Images/Dinner/Italian Sausage.jpg" alt="Image 4">
            </div>
                <div class="slide">
                <img src="Images/Desserts/Apple Pie.jpg" alt="Image 1">
            </div>
                <div class="slide">
                <img src="Images/Desserts/Carrot Cake.jpg" alt="Image 2">
            </div>
                <div class="slide">
                <img src="Images/Desserts/Cheesecake Berry.jpg" alt="Image 3">
            </div>
                <div class="slide">
                <img src="Images/Desserts/Chocolate Glaze.jpg" alt="Image 4">
            </div>
                <div class="slide">
                <img src="Images/Beverages/Cappuccino.jpg" alt="Image 1">
            </div>
                <div class="slide">
                <img src="Images/Beverages/Classic Mojito.jpg" alt="Image 2">
            </div>
                <div class="slide">
                <img src="Images/Beverages/Coconut Water with Lime.jpg" alt="Image 3">
            </div>
                <div class="slide">
                <img src="Images/Beverages/Coffee Liqueur.jpg" alt="Image 4">
            </div>
    
            <!-- Duplicate set of images -->
        <div class="slide">
            <img src="Images/Breakfast/Apple.jpg" alt="Image 1">
        </div>
        <div class="slide">
            <img src="Images/Breakfast/Avacado.webp" alt="Image 2">
        </div>
        <div class="slide">
            <img src="Images/Breakfast/Banana.jpg" alt="Image 3">
        </div>
        <div class="slide">
            <img src="Images/Breakfast/Egg cheese.jpg" alt="Image 4">
        </div>
        <div class="slide">
            <img src="Images/Lunch/Burger.jpg" alt="Image 5">
        </div>
        <div class="slide">
            <img src="Images/Lunch/Chicken.jpg" alt="Image 6">
        </div>
        <div class="slide">
            <img src="Images/Lunch/Coleslow.jpg" alt="Image 7">
        </div>
        <div class="slide">
            <img src="Images/Lunch/Falafel.jpg" alt="Image 8">
        </div>
        <div class="slide">
            <img src="Images/Dinner/Balsamic.webp" alt="Image 9">
        </div>
        <div class="slide">
            <img src="Images/Dinner/Drawn Butter.jpg" alt="Image 10">
        </div>
        <div class="slide">
            <img src="Images/Dinner/Grilled Salmon.jpg" alt="Image 11">
        </div>
        <div class="slide">
            <img src="Images/Dinner/Italian Sausage.jpg" alt="Image 12">
        </div>
        <div class="slide">
            <img src="Images/Desserts/Apple Pie.jpg" alt="Image 13">
        </div>
        <div class="slide">
            <img src="Images/Desserts/Carrot Cake.jpg" alt="Image 14">
        </div>
        <div class="slide">
            <img src="Images/Desserts/Cheesecake Berry.jpg" alt="Image 15">
        </div>
        <div class="slide">
            <img src="Images/Desserts/Chocolate Glaze.jpg" alt="Image 16">
        </div>
        <div class="slide">
            <img src="Images/Beverages/Cappuccino.jpg" alt="Image 17">
        </div>
        <div class="slide">
            <img src="Images/Beverages/Classic Mojito.jpg" alt="Image 18">
        </div>
        <div class="slide">
            <img src="Images/Beverages/Coconut Water with Lime.jpg" alt="Image 19">
        </div>
        <div class="slide">
            <img src="Images/Beverages/Coffee Liqueur.jpg" alt="Image 20">
        </div>
            </div>
        </div>
    
        <div class="copyright">
            <p>Copyright © 2019 <span class="red">ak</span>. All Rights Reserved.</p>
        </div>
    </footer>
    
    <?php
        $isSuccess = false;
        $message = "";
    
        // Database connection parameters
        $servername = "localhost";
        $username = "root"; // default WAMP username
        $password = ""; // default WAMP password
        $gallery_cafe = "gallery_cafe";
    
    
        
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
            // Get email data
            $email = $_POST['email'];
    
            
            $conn = new mysqli($servername, $username, $password, $gallery_cafe);
    
            // Check connection
            if ($conn->connect_error) {
                $isSuccess = false;
                $message = "Connection to gallery_cafe failed: " . $conn->connect_error;
            } else {
                // Check if the email is already subscribed
                $checkEmail = "SELECT * FROM subscriptions WHERE email='$email'";
                $result = $conn->query($checkEmail);
    
                if ($result->num_rows > 0) {
                    $isSuccess = false;
                    $message = "This email is already subscribed!";
                } else {
                    // Insert email into subscriptions table
                    $sql = "INSERT INTO subscriptions (email) VALUES ('$email')";
                    if ($conn->query($sql) === TRUE) {
                        $isSuccess = true;
                        $message = "Subscribed successfully!";
                    } else {
                        $isSuccess = false;
                        $message = "Error: " . $conn->error;
                    }
                }
                // Close the connection
                $conn->close();
            }
        }
    
        // Display the message box
        echo "<div id='message-box' class='message-box " . ($isSuccess ? 'success' : 'error') . "'>";
        echo "<div class='message-container'>";
        echo "<div class='icon-circle'><i class='" . ($isSuccess ? 'bx bx-check-circle' : 'bx bx-error-circle') . "'></i></div>";
        echo "<div class='message-text'>";
        echo "<h3>" . ($isSuccess ? 'Success!' : 'Error!') . "</h3>";
        echo "<p>$message</p>";
        echo "</div>";
        echo "<div class='close-icon' onclick='closeMessageBox()'>×</div>";
        echo "</div>";
        echo "</div>";
    
        // JavaScript to show the message box and handle auto-hide
        echo "<script>
                document.getElementById('message-box').style.display = 'block';
                setTimeout(function() {
                    document.getElementById('message-box').classList.add('move-out');
                    setTimeout(function() {
                        document.getElementById('message-box').style.display = 'none';
                        document.getElementById('message-box').classList.remove('move-out');
                    }, 1000);
                }, 5000); // Auto-hide after 5 seconds
    
                function closeMessageBox() {
                    document.getElementById('message-box').style.display = 'none';
                }
            </script>";
    ?>

    <script src="about.js"></script>
</body>
</html>