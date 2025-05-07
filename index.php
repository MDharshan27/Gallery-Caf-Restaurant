<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
    <title>Gallery Cafe Restaurant - Home</title>
    <link rel="stylesheet" href="styles.css">
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
    
    <section class="hero">
        <section class="hero1">

            <!-- Search Bar Section -->
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search foods..." class="search-bar">
                <button class="search-btn"><i class='bx bx-search'></i></button>
                <div class="result-box"></div>
              </div>

            <video autoplay muted loop id="hero-video">
                <source src="Images/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-content">
                <h2>Welcome</h2>
                <h1>The Gallery Café</h1>
                <p>--- Taste The Difference ---</p>
                <a href="order.php" class="btn">Order Now</a>
            </div>
        </section>
    </section>

    <section class="hien-bowl-section">
        <div class="bowl-image-container">
            <img src="Images/plate1.png" alt="Hien Bowl" class="bowl-image">
            <div class="semi-circle"></div>
        </div>
        <div class="rotate">
            <h1>About Us</h1>
            <p>At Gallery Café Restaurant, we offer a blend of delicious local and international dishes in a cozy, welcoming atmosphere. Located in Colombo, we're the perfect spot for breakfast, lunch, or dinner, where every meal is crafted with care and creativity. Come enjoy good food, great company, and a unique dining experience.</p>
            <a href="menu.html" class="btn">View Our Menu</a>
        </div>
    </section>

    <section class="table">
        <section class="tablebg">
            <section class="table1">
            <div class="table-content">
                <h2>Book a</h2>
                <h1>Table</h1>
            </div>
            <p class="table-description">
                Opening Hour
                <b>8:00</b>
                AM - 
                <b>10:00</b>
                PM, every day on week
            </p>
            <form class="booking-form" action="index.php" method="POST">
                <div class="form-group">
                    <label for="time"></label>
                    <select id="time" name="time" required>
                        <option value="">Time</option>
                        <option value="08:00 AM">08:00 AM</option>
                        <option value="09:00 AM">09:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="01:00 PM">01:00 PM</option>
                        <option value="02:00 PM">02:00 PM</option>
                        <option value="03:00 PM">03:00 PM</option>
                        <option value="04:00 PM">04:00 PM</option>
                        <option value="05:00 PM">05:00 PM</option>
                        <option value="06:00 PM">06:00 PM</option>
                        <option value="07:00 PM">07:00 PM</option>
                        <option value="08:00 PM">08:00 PM</option>
                        <option value="09:00 PM">09:00 PM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date"></label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="people"></label>
                    <select id="people" name="people" required>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                        <option value="5">5 People</option>
                        <option value="6">6 People</option>
                    </select>
                </div>
                <button type="submit" class="btn">BOOK A TABLE</button>
            </form>
            </section>
        </section>
    </section>
    <section class="menu">
        <section class="menu1">
            <div class="menu-content">
                <h2>Find Our</h2>
                <h1>Signature Items</h1>
            </div>
            <button class="prev-btn">&#10094;</button>
        <div class="item">
            <div class="menu-slider">
                <!-- Original menu cards -->
                <div class="menu-card"><img src="Images/breakfast/Avacado.webp" alt="Bakso">
                    <h3>Avocado Toast With Eggs</h3>
                    <p>Toasted bread with and poached eggs</p>
                    <div class="price">LKR 1,200.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Lunch/Chicken.jpg" alt="Soto Ayam">
                    <h3>Chicken Caesar Salad</h3>
                    <p>Caesar salad with spicy grilled chicken</p>
                    <div class="price">LKR 1,500.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Dinner/Italian Sausage.jpg" alt="Seblak">
                    <h3>Baked Ziti Pasta Sausage</h3>
                    <p>Baked ziti pasta with Italian sausage</p>
                    <div class="price">LKR 1,450.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Desserts/Chocolate Lava.jpg" alt="Mie Ayam">
                    <h3>Chocolate Lava Cake Ice Cream</h3>
                    <p>Warm chocolate cake with vanilla ice cream</p>
                    <div class="price">LKR 395.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Beverages/Coconut Water with Lime.jpg" alt="Nasi Goreng">
                    <h3>Coconut Water Lime Twist</h3>
                    <p>Coconut water with a zesty lime twist</p>
                    <div class="price">LKR 375.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Beverages/Classic Mojito.jpg" alt="Nasi Goreng">
                    <h3>Classic Mojito Mint Lime</h3>
                    <p>Classic mojito with fresh mint and lime</p>
                    <div class="price">LKR 350.00</div>
                    </div>
    
                <!-- Duplicate menu cards for seamless infinite scroll -->
                <div class="menu-card"><img src="Images/breakfast/Avacado.webp" alt="Bakso">
                    <h3>Avocado Toast With Eggs</h3>
                    <p>Toasted bread with and poached eggs</p>
                    <div class="price">LKR 1,200.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Lunch/Chicken.jpg" alt="Soto Ayam">
                    <h3>Chicken Caesar Salad</h3>
                    <p>Caesar salad with spicy grilled chicken</p>
                    <div class="price">LKR 1,500.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Dinner/Italian Sausage.jpg" alt="Seblak">
                    <h3>Baked Ziti Pasta Sausage</h3>
                    <p>Baked ziti pasta with Italian sausage</p>
                    <div class="price">LKR 1,450.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Desserts/Chocolate Lava.jpg" alt="Mie Ayam">
                    <h3>Chocolate Lava Cake Ice Cream</h3>
                    <p>Warm chocolate cake with vanilla ice cream</p>
                    <div class="price">LKR 395.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Beverages/Coconut Water with Lime.jpg" alt="Nasi Goreng">
                    <h3>Coconut Water Lime Twist</h3>
                    <p>Coconut water with a zesty lime twist</p>
                    <div class="price">LKR 375.00</div>
                    </div>
                <div class="menu-card"><img src="Images/Beverages/Classic Mojito.jpg" alt="Nasi Goreng">
                    <h3>Classic Mojito Mint Lime</h3>
                    <p>Classic mojito with fresh mint and lime</p>
                    <div class="price">LKR 350.00</div>
                    </div>
            </div>
        </div>
        <button class="next-btn">&#10095;</button>
        </section>
    </section>

    <section class="event">
        <section class="event1">
            <div class="event-content">
                <h2>Upcoming</h2>
                <h1>Event</h1>
            </div>
    
            <div class="event-table">
                <img src="Images/music.jpg" alt="Events">
    
                <div class="content-section">
                    <h1>Live Music Night!</h1>
                    <p>Enjoy an evening of great food and live performances by talented musicians. Relax, unwind, and let the music set the perfect mood!</p>
                    <p class="date-time">01:30 AM Saturday - 05 october 2024</p>
                    <a href="event-2.html" class="view-detail">VIEW DETAIL</a>
                    
                    <div class="countdown">
                        <div class="countdown-box">
                            <span id="days" class="number">0</span>
                            <span class="label">Days</span>
                        </div>
                        <div class="countdown-box">
                            <span id="hours" class="number">0</span>
                            <span class="label">Hours</span>
                        </div>
                        <div class="countdown-box">
                            <span id="minutes" class="number">0</span>
                            <span class="label">Minutes</span>
                        </div>
                        <div class="countdown-box">
                            <span id="seconds" class="number">0</span>
                            <span class="label">Seconds</span>
                        </div>
                    </div>
                    
                </div>
            </div>    
        </section>
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
$dbname = "gallery_cafe";

// Check if form is submitted for table booking
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['time']) && isset($_POST['date']) && isset($_POST['people'])) {
    // Get form data for table booking
    $time = $_POST['time'];
    $date = $_POST['date'];
    $people = $_POST['people'];

    // Create connection for table booking
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        $isSuccess = false;
        $message = "Connection to gallery_cafe failed: " . $conn->connect_error;
    } else {
        // Check if the time slot is already booked for the given date
        $checkBooking = "SELECT * FROM table_bookings WHERE time='$time' AND date='$date'";
        $result = $conn->query($checkBooking);

        if ($result->num_rows > 0) {
            // Time slot is already booked
            $isSuccess = false;
            $message = "This time slot is already reserved. Please choose a different time.";
        } else {
            // Insert form data into the table_bookings database
            $sql = "INSERT INTO table_bookings (time, date, people) VALUES ('$time', '$date', '$people')";
            if ($conn->query($sql) === TRUE) {
                $isSuccess = true;
                $message = "Table booked successfully!";
            } else {
                $isSuccess = false;
                $message = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        // Close the restaurant database connection
        $conn->close();
    }
}

// Check if form is submitted for newsletter subscription
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    // Get email data
    $email = $_POST['email'];

    // Create connection for newsletter subscription
    $conn = new mysqli($servername, $username, $password, $dbname);

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
        // Close the newsletter database connection
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


    <script>
        // Set the date we're counting down to (Example: 2nd March 2025)
        const countdownDate = new Date("oct 05, 2024 01:30:00").getTime();
    
        // Update the countdown every 1 second
        const countdownFunction = setInterval(function() {
    
            // Get today's date and time
            const now = new Date().getTime();
    
            // Find the difference between now and the countdown date
            const timeDifference = countdownDate - now;
    
            // Calculate time left for days, hours, minutes, and seconds
            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
    
            // Display the result in the respective elements
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
    
            // If the countdown is over, display a message and stop the countdown
            if (timeDifference < 0) {
                clearInterval(countdownFunction);
                document.querySelector(".countdown").innerHTML = "The event has started!";
            }
    
        }, 1000);

        // Hide loader after animation completes
        window.onload = function() {
            const loader = document.querySelector('.loader');
            setTimeout(() => {
                loader.classList.add('hide-loader');
            }, 2000);
        };

</script>
    

    <script src="script.js"></script>
</body>
</html>
