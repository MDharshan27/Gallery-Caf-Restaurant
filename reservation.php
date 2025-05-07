<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
    <title>Gallery Cafe Restaurant - Reservation</title>
    <link rel="stylesheet" href="reservation.css">
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

    <section class="reservation">
        <div class="background"></div>
        <section class="reservationbg">
            <!-- Search Bar Section -->
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search foods..." class="search-bar">
                <button class="search-btn"><i class='bx bx-search'></i></button>
                <div class="result-box"></div>
              </div> 
            
            <div class="reservation-contant">
                <h1>Reservation</h1>
            </div>
        </section>
    </section>


    <section class="full-reservation">
        <form action="#" method="post" class="reservation-form">
            <div class="reservation-content">
                <h2>Table</h2>
                <h1>Reservation Form</h1>
            </div>
            <label for="first_name">Name</label>
            <div class="name-fields">
              <input type="text" id="first_name" name="first_name" placeholder="First" required class="input-field">
              <input type="text" id="last_name" name="last_name" placeholder="Last" required class="input-field">
            </div>
        
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required class="input-field">
        
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Phone Number" required class="input-field">
        
            <label for="reservation_date">Reservation Date</label>
            <input type="date" id="reservation_date" name="reservation_date" required class="input-field">
        
            <label for="reservation_time">Reservation Time</label>
            <input type="time" id="reservation_time" name="reservation_time" required class="input-field">
        
            <label for="persons">How many people will you be with?</label>
            <input type="number" id="persons" name="persons" required class="input-field">
        
            <label for="notes">Notes</label>
            <textarea id="notes" name="notes" rows="6" placeholder="Any specific requests or notes?" class="input-field"></textarea>
        
            <button type="submit" class="submit-btn">SEND</button>
          </form>
      </section>
      

    <!-- Reservation Support -->
    <div class="reservation-support">
            <div class="support-text">
                <h3>How do I make Reservations</h3>
                <p>In order to make a reservation on behalf of someone else, you must register your OpenTable account as an Administrative Professional. This feature allows executive assistants, travel planners, recruiters, and other administrative professionals to easily make reservations on behalf of others and earn valuable OpenTable Dining Points.</p>
                <h1><strong>The Gallery Café Restaurant</strong></h1>
            </div>
            <div class="support-details">
                <h3>Rerservation Support</h3>
                <p>123 Main Street, Colombo 00700, Sri Lanka.</p>
                <p>Telephone: 077 859 7438</p>
                <p>Toll Free: 071 681 9945</p>
                <p>Email: gallerycafe@gmail.com</p>
            </div>
    </div>

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

// Create connection for restaurant_db
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables to track messages for both actions
$reservationMessage = "";
$subscriptionMessage = "";

// Function to check if time is a valid 30-minute interval
function isValidTime($time) {
    // Convert the time into a timestamp
    $timestamp = strtotime($time);

    // Get the minutes part of the time
    $minutes = date("i", $timestamp);

    // Check if minutes are divisible by 30 (valid times are :00 and :30)
    return ($minutes == "00" || $minutes == "30");
}

// Check if form is submitted for reservation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['first_name']) && isset($_POST['last_name'])) {
    // Capture form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $reservation_date = $_POST['reservation_date'] ?? '';
    $reservation_time = $_POST['reservation_time'] ?? '';
    $persons = $_POST['persons'] ?? '';
    $notes = $_POST['notes'] ?? '';

    // Validate if the reservation time is in a 30-minute interval
    if (!isValidTime($reservation_time)) {
        $isSuccess = false;
        $reservationMessage = "Invalid reservation time. You can only book on the hour or half-hour (e.g., 3:00, 3:30).";
    } else {
        // Check if the time slot is already booked
        $checkBooking = "SELECT * FROM reservations WHERE reservation_date='$reservation_date' AND reservation_time='$reservation_time'";
        $result = $conn->query($checkBooking);

        if ($result->num_rows > 0) {
            // Time slot is already booked
            $isSuccess = false;
            $reservationMessage = "This time slot is already reserved. Please choose a different time.";
        } else {
            // Insert data into the reservations table
            $sql = "INSERT INTO reservations (first_name, last_name, email, phone, reservation_date, reservation_time, persons, notes)
                    VALUES ('$first_name', '$last_name', '$email', '$phone', '$reservation_date', '$reservation_time', '$persons', '$notes')";

            if ($conn->query($sql) === TRUE) {
                $isSuccess = true;
                $reservationMessage = "Your reservation has been successfully submitted!";
            } else {
                $isSuccess = false;
                $reservationMessage = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

// Check if form is submitted for newsletter subscription
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && !isset($_POST['first_name'])) {
    // Get email data
    $email = $_POST['email'];

    // Create connection for newsletter subscription
    $newsletter_conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($newsletter_conn->connect_error) {
        $isSuccess = false;
        $subscriptionMessage = "Connection to gallery_cafe failed: " . $newsletter_conn->connect_error;
    } else {
        // Check if the email is already subscribed
        $checkEmail = "SELECT * FROM subscriptions WHERE email='$email'";
        $result = $newsletter_conn->query($checkEmail);

        if ($result->num_rows > 0) {
            $isSuccess = false;
            $subscriptionMessage = "This email is already subscribed!";
        } else {
            // Insert email into subscriptions table
            $sql = "INSERT INTO subscriptions (email) VALUES ('$email')";
            if ($newsletter_conn->query($sql) === TRUE) {
                $isSuccess = true;
                $subscriptionMessage = "Subscribed successfully!";
            } else {
                $isSuccess = false;
                $subscriptionMessage = "Error: " . $newsletter_conn->error;
            }
        }
        // Close the newsletter database connection
        $newsletter_conn->close();
    }
}

// Close the restaurant database connection
$conn->close();

// Consolidate messages for display
$message = $reservationMessage ?: $subscriptionMessage;

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
        // Hide loader after animation completes
        window.onload = function() {
            const loader = document.querySelector('.loader');
            setTimeout(() => {
                loader.classList.add('hide-loader');
            }, 2000);
        };
    </script>
    
    <script src="reservation.js"></script>
</body>
</html>
