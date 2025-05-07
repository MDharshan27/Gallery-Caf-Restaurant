<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
    <title>Event Details - Gallery Cafe Restaurant</title>
    <link rel="stylesheet" href="event-2.css">
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

    <!-- Header (reused from your existing template) -->
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

    <!-- Event Details Section -->
    <section class="event-details">
        <div class="event-hero">
            <!-- Search Bar Section -->
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search foods..." class="search-bar">
                <button class="search-btn"><i class='bx bx-search'></i></button>
                <div class="result-box"></div>
              </div>

            <img src="Images/music.jpg" alt="Event Image" class="event-image">
            <div class="event-info">
                <h1>Live Music Night!</h1>
                <h2 class="event-description">
                    Step into an evening of entertainment and relaxation with our Live Music Night. Savor your favorite dishes while listening to live performances by talented local musicians, creating the perfect ambiance for an unforgettable night. From soothing acoustic sets to lively bands, there’s something for everyone. Whether you're catching up with friends or enjoying a romantic dinner, let the music enhance your experience as you dine and unwind. Don’t miss this chance to enjoy a great meal accompanied by live tunes that set the perfect mood.</h2>
                <!-- Countdown Timer -->
                <div class="countdown">
                    <div>
                        <span id="days">0</span>Days
                    </div>
                    <div>
                        <span id="hours">0</span>Hours
                    </div>
                    <div>
                        <span id="minutes">0</span>Minutes
                    </div>
                    <div>
                        <span id="seconds">0</span>Seconds
                    </div>
                </div>

                <div class="event-detail">
                    <div class="slot-info">
                        <div class="slot-item">
                            <h2 class="label">Total Slot:</h2>
                            <h2 class="value">10</h2>
                        </div>
                        <div class="slot-item">
                            <h2 class="label">Booked Slot:</h2>
                            <h2 class="value">0</h2>
                        </div>
                        <div class="slot-item">
                            <h2 class="label">Cost:</h2>
                            <h2 class="value">$50</h2>
                        </div>
                    </div>
                    <p>You must <a href="login.php">Login</a> to our site to register for this event!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (reused from your existing template) -->
    <footer>
        <!-- Footer content here -->
        <div class="logo-title">
            <h1><span class="red">The</span> Gallery <span class="gray">Café</span></h1>
        </div>
        <p class="description">
            Gallery Cafe stands out for its perfect blend of creativity, flavor, and a one-of-a-kind dining atmosphere.
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
    
    
        // Check if form is submitted for newsletter subscription
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
            // Get email data
            $email = $_POST['email'];
    
            // Create connection for newsletter subscription
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

    <script>

        // Toggle Search Bar visibility
        const searchIcon = document.querySelector('.bx-search');
        const searchContainer = document.querySelector('.search-container');

        searchIcon.addEventListener('click', () => {
            searchContainer.classList.toggle('show');
        });
        
        // Countdown Timer Script
        const countdown = () => {
            const eventDate = new Date('March 5, 2024 18:00:00').getTime();
            const now = new Date().getTime();
            const gap = eventDate - now;

            const second = 1000;
            const minute = second * 60;
            const hour = minute * 60;
            const day = hour * 24;

            const days = Math.floor(gap / day);
            const hours = Math.floor((gap % day) / hour);
            const minutes = Math.floor((gap % hour) / minute);
            const seconds = Math.floor((gap % minute) / second);

            document.getElementById('days').innerText = days;
            document.getElementById('hours').innerText = hours;
            document.getElementById('minutes').innerText = minutes;
            document.getElementById('seconds').innerText = seconds;
        };

        setInterval(countdown, 1000);

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


    <script src="happening.js"></script>
</body>
</html>
