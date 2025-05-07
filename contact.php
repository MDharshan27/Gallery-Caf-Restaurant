<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
    <title>Gallery Cafe Restaurant - Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    /* Parking Availability Section */
.parking-availability {
    padding: 50px 0;
    background-color: beige;
    font-family: 'Times New Roman', Times, serif;
}

.parking-availability h2 {
    font-size: 2.5rem;
    text-align: center;
    color: #333;
}

.parking-availability h4 {
    font-size: 1.2rem;
    text-align: center;
    margin-bottom: 20px;
    color: #555;
}

.parking-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: flex-start;
    margin-top: 40px;
}

.parking-item {
    flex: 1 1 250px;
    margin: 15px;
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.parking-item i {
    font-size: 2.5rem;
    color: #007bff;
    margin-bottom: 15px;
}

.parking-item h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #333;
}

.parking-item p {
    font-size: 1rem;
    color: #666;
}

.parking-map {
    margin-top: 30px;
    text-align: center;
}

.parking-map iframe {
    width: 100%;
    max-width: 800px;
    height: 400px;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
    </style>
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

    <section class="contact">
        <div class="background"></div>
        <section class="contactbg">
            <!-- Search Bar Section -->
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search foods..." class="search-bar">
                <button class="search-btn"><i class='bx bx-search'></i></button>
                <div class="result-box"></div>
              </div> 
            
            <div class="contact-contant">
                <h1>Contact</h1>
            </div>
        </section>
    </section>
    
    <script>
        window.addEventListener('scroll', function() {
            const offset = window.scrollY;
            const background = document.querySelector('.background');
            const text = document.querySelector('.fmenu-contant h1');
            
            background.style.transform = `translateY(${offset * 0.5}px)`;
            text.style.transform = `translateZ(${offset * 0.7}px)`;
        });
    </script>

    <section class="contact-touch">
        <div class="container">
            <div class="contact-info">
                <h2>Get in</h2>
                <h1>Touch</h1>
                <div class="underline"></div>
                <h4>We are also active in social media. You can find us on below addresses.</h4>
                <h4><span class="address-icon"></span>123 Main Street, Colombo 00700,<br>  Sri Lanka.</h4>
                <h4>Opening Hour 8:00 AM - 10:00 PM <br>
                    Monday - Sunday</h4>   
                <h4>Call. <a class="number" href="#">077 859 7438</a> <br>    
                    Email. <a class="mail" href="#">gallerycafe@gmail.com</a></h4>
                <div class="icon">                 
                <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class='bx bxl-facebook'></i></a>
                <a href="https://web.whatsapp.com/"><i class='bx bxl-whatsapp' ></i></a>
                <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
                <a href="https://x.com/home"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
    
            <div class="contact-form">
                <h2>Send a</h2>
                <h1>Message</h1>
                <div class="underline"></div>
                <form action="contact.php" method="POST">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Your Message" rows="10" required></textarea>
                    <input type="submit" value="Send">
                </form>                
            </div>
        </div>
    </section>

    <section class="parking-availability">
        <div class="container">
            <div class="parking-info">
                <h2>Parking</h2>
                <h1>Availability</h1>
                <div class="underline"></div>
                <h4>We’ve got you covered with ample parking space for all our guests.</h4>
                <h4><span class="parking-icon"></span>Free parking available at our premises. <br> 20+ car slots available.</h4>
                <h4>Valet parking available from <strong>8:00 AM to 10:00 PM</strong>.<br> Drop off at our main entrance.</h4>
                <h4>Parking zones:<br>
                    <span class="zone">Zone A</span> - General Parking (15 slots)<br>
                    <span class="zone">Zone B</span> - VIP/Valet Parking (5 slots)</h4>
                <h4>Need assistance? <br> Call our Parking Services: <a href="tel:0778597438">077 859 7438</a></h4>
                <div class="parking-icons">
                    <i class='bx bx-car'></i>
                    <i class='bx bxs-parking'></i>
                    <i class='bx bx-car-garage'></i>
                </div>
            </div>
            <div class="parking-map">
                <h2>Find your Spot</h2>
                <div class="underline"></div>
                <img src="Images/park" alt="Parking Map" class="parking-map-image">
                <p>Refer to the map to easily locate our parking zones and entrance points.</p>
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
$username = "root"; // WAMP default username
$password = ""; // WAMP default password
$dbname = "gallery_cafe";

// Initialize variables for messages
$contactMessage = "";
$subscriptionMessage = "";

// Check if the form is submitted for contact form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    // Get contact form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create connection to contact_db
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        $contactMessage = "Connection to gallery_cafe failed: " . $conn->connect_error;
    } else {
        // Insert form data into the contact_form_submissions table
        $sql = "INSERT INTO contact_form_submissions (full_name, email, subject, message) 
                VALUES ('$full_name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            $isSuccess = true;
            $contactMessage = "Message sent successfully!";
        } else {
            $contactMessage = "Error: " . $sql . "<br>" . $conn->error;
        }
        // Close the connection
        $conn->close();
    }
}

// Check if form is submitted for newsletter subscription
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && !isset($_POST['full_name'])) {
    // Get email data
    $email = $_POST['email'];

    // Create connection for newsletter subscription
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        $subscriptionMessage = "Connection to gallery_cafe failed: " . $conn->connect_error;
    } else {
        // Check if the email is already subscribed
        $checkEmail = "SELECT * FROM subscriptions WHERE email='$email'";
        $result = $conn->query($checkEmail);

        if ($result->num_rows > 0) {
            $subscriptionMessage = "This email is already subscribed!";
        } else {
            // Insert email into subscriptions table
            $sql = "INSERT INTO subscriptions (email) VALUES ('$email')";
            if ($conn->query($sql) === TRUE) {
                $isSuccess = true;
                $subscriptionMessage = "Subscribed successfully!";
            } else {
                $subscriptionMessage = "Error: " . $conn->error;
            }
        }
        // Close the connection
        $conn->close();
    }
}

// Determine the final message to display
$message = $contactMessage ?: $subscriptionMessage;

// Display the message box for both contact and subscription
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
        // Toggle Search Bar visibility
        const searchIcon = document.querySelector('.bx-search');
        const searchContainer = document.querySelector('.search-container');

        searchIcon.addEventListener('click', () => {
            searchContainer.classList.toggle('show');
        });

    // Available keywords for navigation and available food items for search
    let availableKeywords = [
    'Home',
    'Menu',
    'Breakfast',
    'Lunch',
    'Dinner',
    'Desserts',
    'Beverages',
    'Contact',
    'About Us',
    'Events',
    'Happening Events',
    'Upcoming Events',
    'Order Online',
    'Login & SignUp',
    'Reservation'
];

let availableFoods = [
    // Breakfast Items
    'Avocado Toast with Poached Eggs',
    'Pancakes with Maple Syrup and Fresh Berries',
    'Eggs Benedict with Smoked Salmon',
    'French Toast with Cinnamon and Banana',
    'Greek Yogurt with Granola and Honey',
    'Classic English Breakfast',
    'Omelette Spinach, Mushrooms, and Cheese',
    'Chia Seed Pudding with Mango and Coconut',
    'Smashed Potatoes with Herb Butter',
    'Bagels with Cream Cheese and Lox',
    'Oatmeal with Apple Compote and Almonds',
    'Croissant Sandwich with Ham and Cheese',

    // Lunch Items
    'Grilled Chicken Caesar Salad',
    'Quinoa Salad',
    'Margherita Pizza with Fresh Basil',
    'Beef Burger with Cheddar and Onions',
    'Grilled Vegetable Panini with Pesto',
    'Chicken Wrap with Avocado and Tomato',
    'Spaghetti Aglio e Olio with Parmesan',
    'Shrimp Tacos with Mango Salsa',
    'Caprese Salad with Balsamic Glaze',
    'Tuna Melt',
    'Pulled Pork Sandwich',
    'Falafel Wrap',

    // Dinner Items
    'Grilled Salmon with Lemon Butter Sauce',
    'Ribeye Steak with Garlic Mashed Potatoes',
    'Grilled Portobello Mushrooms with Balsamic',
    'Vegetable Stir-Fry with Tofu and Rice',
    'Beef Tenderloin with Red Wine Reduction',
    'Shrimp Scampi with Linguine',
    'Chicken Parmesan with Marinara Sauce',
    'Lamb Chops with Mint Yogurt Sauce',
    'Baked Ziti with Italian Sausage',
    'Roast Duck with Orange Glaze',
    'Ratatouille with Garlic Bread',
    'Lobster Tail with Drawn Butter',

    // Desserts
    'Chocolate Lava Cake with Vanilla Ice Cream',
    'Creme Brulee with Caramelized Sugar',
    'Apple Pie with Cinnamon and Cream',
    'Lemon Tart with Raspberry Coulis',
    'Carrot Cake with Cream Cheese Frosting',
    'Eclairs with Chocolate Glaze',
    'Profiteroles with Vanilla Cream',
    'Flourless Chocolate Cake with Ganache',
    'Panna Cotta with Strawberry Sauce',
    'Chocolate Mousse with Fresh Raspberries',
    'Coconut Macaroons with Dark Chocolate',
    'New York Cheesecake with Berry Compote',

    // Beverages
    'Freshly Squeezed Orange Juice',
    'Iced Coffee with Vanilla Syrup',
    'Classic Mojito with Fresh Mint',
    'Fresh Lime Soda with Mint',
    'Mango Smoothie with Yogurt',
    'Hot Chocolate with Marshmallows',
    'Cappuccino with Cinnamon Dust',
    'Green Tea with Jasmine',
    'Cold Brew Coffee with Almond Milk',
    'Lemonade with Fresh Berries',
    'Coconut Water with Lime',
    'Espresso Martini with Coffee Liqueur'
];

// Search functionality
const resultsBox = document.querySelector(".result-box");
const inputBox = document.getElementById("search-bar");

inputBox.onkeyup = function() {
    let result = [];
    let input = inputBox.value;

    // Combine keywords and food items for search
    if (input.length) {
        result = availableKeywords.concat(availableFoods).filter((item) => {
            return item.toLowerCase().includes(input.toLowerCase());
        });
    }
    
    display(result);

    if (!result.length) {
        resultsBox.innerHTML = '';
    }
};

// Display search results
function display(result) {
    const content = result.map((list) => {
        return "<li onclick='selectInput(this)'>" + list + "</li>";
    });

    resultsBox.innerHTML = "<ul>" + content.join('') + "</ul>";
}

// Function to handle page redirects and food selection
function selectInput(list) {
    const selectedItem = list.innerHTML;

    // Handle page redirects for keywords
    switch (selectedItem) {
        case 'Home':
            window.location.href = 'index.php';
            break;
        case 'Menu':
            window.location.href = 'menu.php';
            break;
        case 'Contact':
            window.location.href = 'contact.php';
            break;
        case 'About Us':
            window.location.href = 'about.php';
            break;
        case 'Order Online':
            window.location.href = 'order.php';
            break;
        case 'Reservation':
            window.location.href = 'reservation.php';
            break;
        case 'Upcoming Events':
            window.location.href = 'upcoming.php';
            break;
        case 'Happening Now':
            window.location.href = 'happening.php';
            break;
        case 'Open Table':
            window.location.href = 'opentable.php';
            break;
        case 'Lunch':
            window.location.href = 'lunch.php';
            break;
        case 'Dinner':
            window.location.href = 'dinner.php';
            break;
        case 'Desserts':
            window.location.href = 'desserts.php';
            break;
        case 'Beverages':
            window.location.href = 'beverages.php';
            break;
        case 'Breakfast':
            window.location.href = 'breakfast.php';
            break;
        case 'Login':
            window.location.href = 'login.php';
            break;
        default:
            // Handle food items and redirect to respective category page
            let targetPage;

            // Breakfast foods
            if ([
                'Avocado Toast with Poached Eggs', 
                'Pancakes with Maple Syrup and Fresh Berries', 
                'Eggs Benedict with Smoked Salmon', 
                'French Toast with Cinnamon and Banana',
                'Greek Yogurt with Granola and Honey',
                'Classic English Breakfast',
                'Omelette Spinach, Mushrooms, and Cheese',
                'Chia Seed Pudding with Mango and Coconut',
                'Smashed Potatoes with Herb Butter',
                'Bagels with Cream Cheese and Lox',
                'Oatmeal with Apple Compote and Almonds',
                'Croissant Sandwich with Ham and Cheese'
            ].includes(selectedItem)) {
                targetPage = 'breakfast.php';
            }

            // Lunch foods
            else if ([
                'Grilled Chicken Caesar Salad', 
                'Quinoa Salad', 
                'Margherita Pizza with Fresh Basil', 
                'Beef Burger with Cheddar and Onions',
                'Grilled Vegetable Panini with Pesto',
                'Chicken Wrap with Avocado and Tomato',
                'Spaghetti Aglio e Olio with Parmesan',
                'Shrimp Tacos with Mango Salsa',
                'Caprese Salad with Balsamic Glaze',
                'Tuna Melt',
                'Pulled Pork Sandwich',
                'Falafel Wrap'
            ].includes(selectedItem)) {
                targetPage = 'lunch.php';
            }

            // Dinner foods
            else if ([
                'Grilled Salmon with Lemon Butter Sauce',
                'Ribeye Steak with Garlic Mashed Potatoes',
                'Grilled Portobello Mushrooms with Balsamic',
                'Vegetable Stir-Fry with Tofu and Rice',
                'Beef Tenderloin with Red Wine Reduction',
                'Shrimp Scampi with Linguine',
                'Chicken Parmesan with Marinara Sauce',
                'Lamb Chops with Mint Yogurt Sauce',
                'Baked Ziti with Italian Sausage',
                'Roast Duck with Orange Glaze',
                'Ratatouille with Garlic Bread',
                'Lobster Tail with Drawn Butter'
            ].includes(selectedItem)) {
                targetPage = 'dinner.php';
            }

            // Dessert foods
            else if ([
                'Chocolate Lava Cake with Vanilla Ice Cream',
                'Creme Brulee with Caramelized Sugar',
                'Apple Pie with Cinnamon and Cream',
                'Lemon Tart with Raspberry Coulis',
                'Carrot Cake with Cream Cheese Frosting',
                'Eclairs with Chocolate Glaze',
                'Profiteroles with Vanilla Cream',
                'Flourless Chocolate Cake with Ganache',
                'Panna Cotta with Strawberry Sauce',
                'Chocolate Mousse with Fresh Raspberries',
                'Coconut Macaroons with Dark Chocolate',
                'New York Cheesecake with Berry Compote'
            ].includes(selectedItem)) {
                targetPage = 'desserts.php';
            }

            // Beverages
            else if ([
                'Freshly Squeezed Orange Juice',
                'Iced Coffee with Vanilla Syrup',
                'Classic Mojito with Fresh Mint',
                'Fresh Lime Soda with Mint',
                'Mango Smoothie with Yogurt',
                'Hot Chocolate with Marshmallows',
                'Cappuccino with Cinnamon Dust',
                'Green Tea with Jasmine',
                'Cold Brew Coffee with Almond Milk',
                'Lemonade with Fresh Berries',
                'Coconut Water with Lime',
                'Espresso Martini with Coffee Liqueur'
            ].includes(selectedItem)) {
                targetPage = 'beverages.php';
            }

            // Redirect to the specific category page with the food highlighted
            if (targetPage) {
                window.location.href = `${targetPage}?food=${encodeURIComponent(selectedItem)}`;
            } else {
                console.log('Invalid selection');
            }
    }
}

// Function to get query parameters
function getQueryParams() {
    const urlParams = new URLSearchParams(window.location.search);
    const food = urlParams.get('food');
    return { food };
}

// Function to highlight the specific food item on page load
function highlightFood() {
    const { food } = getQueryParams();

    if (food) {
        const foodItem = document.querySelector(`[alt="${food}"]`).closest('.menu-card');

        if (foodItem) {
            // Scroll to and highlight the food item
            foodItem.scrollIntoView({ behavior: 'smooth' });
            foodItem.classList.add('highlight');
        }
    }
}

// Call the highlightFood function on page load
document.addEventListener('DOMContentLoaded', highlightFood);

document.getElementById('menu-icon').addEventListener('click', function() {
    this.classList.toggle('open');
    document.querySelector('.nav-links').classList.toggle('active');
});

// Dropdown click behavior
document.querySelectorAll('.dropdown').forEach(dropdown => {
    dropdown.addEventListener('click', function() {
        this.classList.toggle('active');
        // Close other dropdowns
        document.querySelectorAll('.dropdown').forEach(otherDropdown => {
            if (otherDropdown !== this) {
                otherDropdown.classList.remove('active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-links li a');

    // Set active class based on current URL
    navLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
        }
    });

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            // Remove 'active' class from all links
            navLinks.forEach(nav => nav.classList.remove('active'));

            // Add 'active' class to the clicked link
            link.classList.add('active');

            // Allow navigation to proceed
            setTimeout(() => {
                window.location.href = link.href;
            }, 100); // Delay to ensure class is added
        });
    });
});

// Hide loader after animation completes
window.onload = function() {
    const loader = document.querySelector('.loader');
    setTimeout(() => {
        loader.classList.add('hide-loader');
    }, 2000); 
};

</script>
</body>
</html>