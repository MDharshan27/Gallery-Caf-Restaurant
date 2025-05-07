<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Gallary Cafe - Order Online</title>
  <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
  <link rel="stylesheet" href="order.css">
  <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Loader Overlay -->
    <div class="loader">
        <div class="loader-content">
            <div class="logo">
                <img src="Images/loadlogo.jpg" alt="Gallary Cafe Logo" class="logo-image">
            </div>
            <div class="logo-load">
                <h1><span class="red">The</span> Gallary <span class="gray">Café</span></h1>
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

  <!-- Search Bar Section -->
  <div class="search-container">
    <input type="text" id="search-bar" placeholder="Search foods..." class="search-bar">
    <button class="search-btn"><i class='bx bx-search'></i></button>
    <div class="result-box"></div>
  </div> 

  <div class="container">
    <!-- Left 3/4 part: Cart Items with Product Image -->
    <div class="cart-container">
      <h1>My Orders</h1>
      
      <!-- Table structure for displaying order items -->
      <table class="order-table">
        <thead>
          <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody id="order-items">
          <!-- Dynamic order items with images will be shown here -->
        </tbody>
      </table>
    </div>
  
    <!-- Right 1/4 part: Cart summary -->
    <div class="cart-summary">
      <div class="summary-container">
        <h4>Subtotal: <span id="sub-total">LKR 0</span></h4>
        <h2>Total: LKR <span id="total-price">0</span></h2>
        <p>Taxes and delivery fee calculated at checkout</p>
        <textarea placeholder="Order note"></textarea>
        <a href="checkout.php" class="checkout-link">
            <button class="checkout-btn">Checkout</button>
        </a>
      </div>
    </div>
    
  </div>


  <script>
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function updateOrderSummary() {
    let orderItemsContainer = document.getElementById('order-items');
    let subTotal = 0;
    orderItemsContainer.innerHTML = ''; // Clear previous order items

    cart.forEach(item => {
        subTotal += item.price * item.quantity;
        orderItemsContainer.innerHTML += `
        <tr class="order-item">
        <td class="item-details">
            <img src="${item.image}" alt="${item.name}">
            <p>${item.name}</p>
        </td>
        <td>
            <div class="quantity-control">
            <button onclick="changeQuantity('${item.name}', -1)" ${item.quantity <= 1 ? 'style="display:none;"' : ''}>-</button>
            <span>${item.quantity}</span>
            <button onclick="changeQuantity('${item.name}', 1)">+</button>
            </div>
        </td>
        <td>LKR ${(item.price * item.quantity).toLocaleString('en-US')}</td>
        <td>
            <button onclick="removeItem('${item.name}')" class="remove-btn"><i class='bx bxs-trash'></i></button>
        </td>
        </tr>`;
    });

    // Format the subtotal and total with commas for thousands
    document.getElementById('sub-total').textContent = 'LKR ' + subTotal.toLocaleString('en-US');
    const totalPrice = subTotal;
    document.getElementById('total-price').textContent = totalPrice.toLocaleString('en-US');
    }

    function changeQuantity(itemName, change) {
    let itemIndex = cart.findIndex(item => item.name === itemName);
    if (itemIndex !== -1) {
        cart[itemIndex].quantity += change;
        if (cart[itemIndex].quantity === 0) {
        cart.splice(itemIndex, 1); // Remove item if quantity is 0
        }
        localStorage.setItem('cart', JSON.stringify(cart));
        updateOrderSummary();
    }
    }

    function removeItem(itemName) {
    cart = cart.filter(item => item.name !== itemName);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateOrderSummary();
    }

    // Initialize order summary on page load
    window.onload = updateOrderSummary;


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
            window.location.href = 'index.html';
            break;
        case 'Menu':
            window.location.href = 'menu.html';
            break;
        case 'Contact':
            window.location.href = 'contact.html';
            break;
        case 'About Us':
            window.location.href = 'about.html';
            break;
        case 'Order Online':
            window.location.href = 'order.html';
            break;
        case 'Reservation':
            window.location.href = 'reservation.html';
            break;
        case 'Upcoming Events':
            window.location.href = 'upcoming.html';
            break;
        case 'Happening Now':
            window.location.href = 'happening.html';
            break;
        case 'Open Table':
            window.location.href = 'opentable.html';
            break;
        case 'Lunch':
            window.location.href = 'lunch.html';
            break;
        case 'Dinner':
            window.location.href = 'dinner.html';
            break;
        case 'Desserts':
            window.location.href = 'desserts.html';
            break;
        case 'Beverages':
            window.location.href = 'beverages.html';
            break;
        case 'Breakfast':
            window.location.href = 'breakfast.html';
            break;
        case 'Login':
            window.location.href = 'login.html';
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
                targetPage = 'breakfast.html';
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
                targetPage = 'lunch.html';
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
                targetPage = 'dinner.html';
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
                targetPage = 'desserts.html';
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
                targetPage = 'beverages.html';
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
window.addEventListener('load', function() {
    const loader = document.querySelector('.loader');
    setTimeout(() => {
        loader.classList.add('hide-loader');
    }, 2000);

    // Call order summary update function for cart functionality
    updateOrderSummary();
});


</script>

</body>
</html>
