<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
    <title>Gallery Cafe Restaurant - Menu</title>
    <link rel="stylesheet" href="menu.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

    <section class="foodmenu">
        <div class="background"></div>
        <section class="menubg">
            <!-- Search Bar Section -->
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search foods..." class="search-bar">
                <button class="search-btn"><i class='bx bx-search'></i></button>
                <div class="result-box"></div>
              </div> 
            
            <div class="fmenu-contant">
                <h1>Our Menu</h1>
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

        document.addEventListener('DOMContentLoaded', function() {
        const menuItems = document.querySelectorAll('.menu-item');
    
        menuItems.forEach(item => {
        item.addEventListener('click', function() {
            menuItems.forEach(item => item.classList.remove('active'));
            
            this.classList.add('active');
        });
    });
});
</script>


<section class="food-menu">
    <div class="container-f">
        <h2>Food Menu</h2>
        <h1>Most Popular Items</h1>
    </div>

    <div class="menu-container">
        <div class="menu-header">
            <div class="menu-item active">Breakfast <span>Cake & Cookies</span></div>
            <div class="menu-item">Lunch <span>Coffee & Beer</span></div>
            <div class="menu-item">Dinner <span>Entrees & Main Courses</span></div>
            <div class="menu-item">Desserts <span>Cakes & Sweets</span></div>
            <div class="menu-item">Beverages <span>Hot & Cold Drinks</span></div>
        </div>

        <!-- Breakfast Section -->
        <div class="menu-content breakfast">
            <div class="menu-card">
                <img src="Images/Breakfast/Avacado.webp" alt="Avocado Toast with Poached Eggs">
                <div class="menu-card-info">
                    <h3>Avocado Toast with Poached Eggs</h3>
                    <p>Toasted bread with poached eggs</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,200.00</strong>
                    <button onclick="addToCart('Avocado Toast with Poached Eggs', 1200, 'Images/Breakfast/Avacado.webp')">Add to Cart</button>
                </div>
            </div>
            
            <div class="menu-card">
                <img src="Images/Breakfast/Honey.jpg" alt="Pancakes with Maple Syrup and Fresh Berries">
                <div class="menu-card-info">
                    <h3>Pancakes with Fresh Berries</h3>
                    <p>Fluffy pancakes with maple syrup</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,100.00</strong>
                    <button onclick="addToCart('Pancakes with Maple Syrup and Fresh Berries', 1100, 'Images/Breakfast/Honey.jpg')">Add to Cart</button>
                </div>
            </div>

            <div class="menu-card">
                <img src="Images/Breakfast/Egg.jpg" alt="Eggs Benedict with Smoked Salmon">
                <div class="menu-card-info">
                    <h3>Eggs Benedict with Smoked Salmon</h3>
                    <p>Classic eggs benedict with salmon</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,200.00</strong>
                    <button onclick="addToCart('Eggs Benedict with Smoked Salmon', 1200, 'Images/Breakfast/Egg.jpg')">Add to Cart</button>
                </div>
            </div>

            <div class="menu-card">
                <img src="Images/Breakfast/Sanwich banana.jpg" alt="French Toast with Cinnamon and Banana">
                <div class="menu-card-info">
                    <h3>French Toast with Cinnamon and Banana</h3>
                    <p>Cinnamon french toast with banana</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 900.00</strong>
                    <button onclick="addToCart('French Toast with Cinnamon and Banana', 900, 'Images/Breakfast/Sanwich banana.jpg')">Add to Cart</button>
                </div>
            </div>jjj

            <div class="menu-card">
                <img src="Images/Breakfast/Yogurt.jpg" alt="Greek Yogurt with Granola and Honey">
                <div class="menu-card-info">
                    <h3>Greek Yogurt with Granola and Honey</h3>
                    <p>Yogurt with granola and honey</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,000.00</strong>
                    <button onclick="addToCart('Greek Yogurt with Granola and Honey', 1000, 'Images/Breakfast/Yogurt.jpg')">Add to Cart</button>
                </div>
            </div>

            <div class="menu-card">
                <img src="Images/Breakfast/Meal.jpg" alt="Classic English Breakfast">
                <div class="menu-card-info">
                    <h3>Classic English Breakfast</h3>
                    <p>Traditional breakfast with bacon and eggs</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 800.00</strong>
                    <button onclick="addToCart('Classic English Breakfast', 800, 'Images/Breakfast/Meal.jpg')">Add to Cart</button>
                </div>
            </div>

            <div class="menu-card">
                <img src="Images/Breakfast/Egg cheese.jpg" alt="Omelette Spinach, Mushrooms, and Cheese">
                <div class="menu-card-info">
                    <h3>Omelette Spinach, Mushrooms, and Cheese</h3>
                    <p>Spinach, mushroom, and cheese omelette</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,100.00</strong>
                    <button onclick="addToCart('Omelette Spinach, Mushrooms, and Cheese', 1100, 'Images/Breakfast/Egg cheese.jpg')">Add to Cart</button>
                </div>
            </div>

            <div class="menu-card">
                <img src="Images/Breakfast/Mango.jpg" alt="Chia Seed Pudding with Mango and Coconut">
                <div class="menu-card-info">
                    <h3>Chia Seed Pudding with Mango and Coconut</h3>
                    <p>Mango chia seed pudding with coconut</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 900.00</strong>
                    <button onclick="addToCart('Chia Seed Pudding with Mango and Coconut', 900, 'Images/Breakfast/Mango.jpg')">Add to Cart</button>
                </div>
            </div>

            <div class="menu-card">
                <img src="Images/Breakfast/Smashed.jpg" alt="Smashed Potatoes with Herb Butter">
                <div class="menu-card-info">
                    <h3>Smashed Potatoes with Herb Butter</h3>
                    <p>Creamy herb butter smashed potatoes</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,200.00</strong>
                    <button onclick="addToCart('Smashed Potatoes with Herb Butter', 1200, 'Images/Breakfast/Smashed.jpg')">Add to Cart</button>
                </div>
            </div>

            <div class="menu-card">
                <img src="Images/Breakfast/Ring.jpg" alt="Bagels with Cream Cheese and Lox">
                <div class="menu-card-info">
                    <h3>Bagels with Cream Cheese and Lox</h3>
                    <p>Bagels with cream cheese and lox</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 900.00</strong>
                    <button onclick="addToCart('Bagels with Cream Cheese and Lox', 900, 'Images/Breakfast/Ring.jpg')">Add to Cart</button>
                </div>
            </div>

            <div class="menu-card">
                <img src="Images/Breakfast/Apple.jpg" alt="Oatmeal with Apple Compote and Almonds">
                <div class="menu-card-info">
                    <h3>Oatmeal with Apple Compote and Almonds</h3>
                    <p>Oatmeal with apple and almonds</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,200.00</strong>
                    <button onclick="addToCart('Oatmeal with Apple Compote and Almonds', 1200, 'Images/Breakfast/Apple.jpg')">Add to Cart</button>
                </div>
            </div>

            <div class="menu-card">
                <img src="Images/Breakfast/Sandwich.jpg" alt="Croissant Sandwich with Ham and Cheese">
                <div class="menu-card-info">
                    <h3>Croissant Sandwich with Ham and Cheese</h3>
                    <p>Ham and cheese croissant sandwich</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 900.00</strong>
                    <button onclick="addToCart('Croissant Sandwich with Ham and Cheese', 900, 'Images/Breakfast/Sandwich.jpg')">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Lunch Section -->
        <div class="menu-content lunch">
            <div class="menu-card">
                <img src="Images/Lunch/Chicken.jpg" alt="Grilled Chicken Caesar Salad">
                <div class="menu-card-info">
                    <h3>Grilled Chicken Caesar Salad</h3>
                    <p>Caesar salad with grilled chicken</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,500.00</strong>
                    <button onclick="addToCart('Grilled Chicken Caesar Salad', 1500, 'Images/Lunch/Chicken.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Vegetable.jpg" alt="Quinoa Salad">
                <div class="menu-card-info">
                    <h3>Quinoa Salad</h3>
                    <p>Quinoa salad with roasted veggies</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,200.00</strong>
                    <button onclick="addToCart('Quinoa Salad', 1200, 'Images/Lunch/Vegetable.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Pizza.jpg" alt="Margherita Pizza with Fresh Basil">
                <div class="menu-card-info">
                    <h3>Margherita Pizza with Fresh Basil</h3>
                    <p>Classic pizza with fresh basil</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,700.00</strong>
                    <button onclick="addToCart('Margherita Pizza with Fresh Basil', 1700, 'Images/Lunch/Pizza.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Burger.jpg" alt="Beef Burger with Cheddar and Onions">
                <div class="menu-card-info">
                    <h3>Beef Burger with Cheddar and Onions</h3>
                    <p>Beef burger with cheddar cheese</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,600.00</strong>
                    <button onclick="addToCart('Beef Burger with Cheddar and Onions', 1600, 'Images/Lunch/Burger.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Pesto.jpg" alt="Grilled Vegetable Panini with Pesto">
                <div class="menu-card-info">
                    <h3>Grilled Vegetable Panini with Pesto</h3>
                    <p>Panini with grilled veggies and pesto</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,400.00</strong>
                    <button onclick="addToCart('Grilled Vegetable Panini with Pesto', 1400, 'Images/Lunch/Pesto.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Tomato.jpg" alt="Chicken Wrap with Avocado and Tomato">
                <div class="menu-card-info">
                    <h3>Chicken Wrap with Avocado and Tomato</h3>
                    <p>Wrap with chicken, avocado, tomato</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,300.00</strong>
                    <button onclick="addToCart('Chicken Wrap with Avocado and Tomato', 1300, 'Images/Lunch/Tomato.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Spaghetti.jpg" alt="Spaghetti Aglio e Olio with Parmesan">
                <div class="menu-card-info">
                    <h3>Spaghetti Aglio e Olio with Parmesan</h3>
                    <p>Spaghetti with garlic, oil, and Parmesan</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,500.00</strong>
                    <button onclick="addToCart('Spaghetti Aglio e Olio with Parmesan', 1500, 'Images/Lunch/Spaghetti.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Salsa.jpg" alt="Shrimp Tacos with Mango Salsa">
                <div class="menu-card-info">
                    <h3>Shrimp Tacos with Mango Salsa</h3>
                    <p>Tacos with shrimp and mango salsa</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,800.00</strong>
                    <button onclick="addToCart('Shrimp Tacos with Mango Salsa', 1800, 'Images/Lunch/Salsa.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Glaze.jpg" alt="Caprese Salad with Balsamic Glaze">
                <div class="menu-card-info">
                    <h3>Caprese Salad with Balsamic Glaze</h3>
                    <p>Salad with tomatoes, mozzarella, balsamic</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,200.00</strong>
                    <button onclick="addToCart('Caprese Salad with Balsamic Glaze', 1200, 'Images/Lunch/Glaze.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Tuna.jpg" alt="Tuna Melt">
                <div class="menu-card-info">
                    <h3>Tuna Melt</h3>
                    <p>Tuna melt with Swiss cheese</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,700.00</strong>
                    <button onclick="addToCart('Tuna Melt', 1700, 'Images/Lunch/Tuna.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Coleslaw.jpg" alt="Pulled Pork Sandwich">
                <div class="menu-card-info">
                    <h3>Pulled Pork Sandwich</h3>
                    <p>Pulled pork sandwich with coleslaw</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,600.00</strong>
                    <button onclick="addToCart('Pulled Pork Sandwich', 1600, 'Images/Lunch/Coleslaw.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Lunch/Falafel.jpg" alt="Falafel Wrap">
                <div class="menu-card-info">
                    <h3>Falafel Wrap</h3>
                    <p>Falafel wrap with hummus and tzatziki</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,300.00</strong>
                    <button onclick="addToCart('Falafel Wrap', 1300, 'Images/Lunch/Falafel.jpg')">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Dinner Section -->
        <div class="menu-content dinner">
            <div class="menu-card">
                <img src="Images/Dinner/Grilled Salmon.jpg" alt="Grilled Salmon with Lemon Butter Sauce">
                <div class="menu-card-info">
                    <h3>Grilled Salmon with Lemon Butter Sauce</h3>
                    <p>Juicy salmon with a zesty lemon butter.</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,850.00</strong>
                    <button onclick="addToCart('Grilled Salmon with Lemon Butter Sauce', 1850, 'Images/Dinner/Grilled Salmon.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Ribeye Steak.jpg" alt="Ribeye Steak with Garlic Mashed Potatoes">
                <div class="menu-card-info">
                    <h3>Ribeye Steak with Garlic Mashed Potatoes</h3>
                    <p>Tender ribeye steak with garlic mashed potatoes.</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,900.00</strong>
                    <button onclick="addToCart('Ribeye Steak with Garlic Mashed Potatoes', 1900, 'Images/Dinner/Ribeye Steak.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Balsamic.webp" alt="Grilled Portobello Mushrooms with Balsamic">
                <div class="menu-card-info">
                    <h3>Grilled Portobello Mushrooms Balsamic</h3>
                    <p>Grilled Portobello mushrooms with a balsamic glaze</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,300.00</strong>
                    <button onclick="addToCart('Grilled Portobello Mushrooms with Balsamic', 1300, 'Images/Dinner/Balsamic.webp')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Tofu and Rice.jpg" alt="Vegetable Stir-Fry with Tofu and Rice">
                <div class="menu-card-info">
                    <h3>Vegetable Stir-Fry with Tofu and Rice</h3>
                    <p>Stir-fried vegetables with tofu and steamed rice</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,150.00</strong>
                    <button onclick="addToCart('Vegetable Stir-Fry with Tofu and Rice', 1150, 'Images/Dinner/Tofu and Rice.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Red Wine.jpg" alt="Beef Tenderloin with Red Wine Reduction">
                <div class="menu-card-info">
                    <h3>Beef Tenderloin with Red Wine Reduction</h3>
                    <p>Beef tenderloin with a savory red wine reduction</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,950.00</strong>
                    <button onclick="addToCart('Beef Tenderloin with Red Wine Reduction', 1950, 'Images/Dinner/Red Wine.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Linguine.jpg" alt="Shrimp Scampi with Linguine">
                <div class="menu-card-info">
                    <h3>Shrimp Scampi with Linguine</h3>
                    <p>Shrimp scampi in garlic sauce with linguine</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,700.00</strong>
                    <button onclick="addToCart('Shrimp Scampi with Linguine', 1700, 'Images/Dinner/Linguine.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Marinara Sauce.jpg" alt="Chicken Parmesan with Marinara Sauce">
                <div class="menu-card-info">
                    <h3>Chicken Parmesan with Marinara Sauce</h3>
                    <p>Breaded chicken topped with marinara sauce and cheese</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,200.00</strong>
                    <button onclick="addToCart('Chicken Parmesan with Marinara Sauce', 1200, 'Images/Dinner/Marinara Sauce.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Yogurt Sauce.jpg" alt="Lamb Chops with Mint Yogurt Sauce">
                <div class="menu-card-info">
                    <h3>Lamb Chops with Mint Yogurt Sauce</h3>
                    <p>Lamb chops served with a mint yogurt sauce</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,950.00</strong>
                    <button onclick="addToCart('Lamb Chops with Mint Yogurt Sauce', 1950, 'Images/Dinner/Yogurt Sauce.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Italian Sausage.jpg" alt="Baked Ziti with Italian Sausage">
                <div class="menu-card-info">
                    <h3>Baked Ziti with Italian Sausage</h3>
                    <p>Baked ziti pasta with flavorful Italian sausage</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,450.00</strong>
                    <button onclick="addToCart('Baked Ziti with Italian Sausage', 1450, 'Images/Dinner/Italian Sausage.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Orange Glaze.jpg" alt="Roast Duck with Orange Glaze">
                <div class="menu-card-info">
                    <h3>Roast Duck with Orange Glaze</h3>
                    <p>Roast duck served with a tangy orange glaze</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,800.00</strong>
                    <button onclick="addToCart('Roast Duck with Orange Glaze', 1800, 'Images/Dinner/Orange Glaze.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Ratatouille.webp" alt="Ratatouille with Garlic Bread">
                <div class="menu-card-info">
                    <h3>Ratatouille with Garlic Bread</h3>
                    <p>Ratatouille accompanied by crispy garlic bread</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,100.00</strong>
                    <button onclick="addToCart('Ratatouille with Garlic Bread', 1100, 'Images/Dinner/Ratatouille.webp')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Dinner/Drawn Butter.jpg" alt="Lobster Tail with Drawn Butter">
                <div class="menu-card-info">
                    <h3>Lobster Tail with Drawn Butter</h3>
                    <p>Lobster tail served with creamy drawn butter</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 1,750.00</strong>
                    <button onclick="addToCart('Lobster Tail with Drawn Butter', 1750, 'Images/Dinner/Drawn Butter.jpg')">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Desserts Section -->
        <div class="menu-content desserts">
            <div class="menu-card">
                <img src="Images/Desserts/Chocolate Lava.jpg" alt="Chocolate Lava Cake">
                <div class="menu-card-info">
                    <h3>Chocolate Lava Cake with Vanilla Ice Cream</h3>
                    <p>Warm chocolate cake with gooey vanilla ice cream</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 395.00</strong>
                    <button onclick="addToCart('Chocolate Lava Cake with Vanilla Ice Cream', 395.00, 'Images/Desserts/Chocolate Lava.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Creme Brulee.jpg" alt="Creme Brulee">
                <div class="menu-card-info">
                    <h3>Creme Brulee with Caramelized Sugar</h3>
                    <p>Rich creme brulee with crisp caramelized sugar top</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 350.00</strong>
                    <button onclick="addToCart('Creme Brulee with Caramelized Sugar', 350.00, 'Images/Desserts/Creme Brulee.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Apple Pie.jpg" alt="Apple Pie">
                <div class="menu-card-info">
                    <h3>Apple Pie with Cinnamon and Cream</h3>
                    <p>Apple pie spiced with cinnamon and topped</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 320.00</strong>
                    <button onclick="addToCart('Apple Pie with Cinnamon and Cream', 320.00, 'Images/Desserts/Apple Pie.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Lemon Tart.jpg" alt="Lemon Tart">
                <div class="menu-card-info">
                    <h3>Lemon Tart with Raspberry Coulis</h3>
                    <p>Tangy lemon tart with sweet raspberry coulis</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 400.00</strong>
                    <button onclick="addToCart('Lemon Tart with Raspberry Coulis', 400.00, 'Images/Desserts/Lemon Tart.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Carrot Cake.jpg" alt="Carrot Cake">
                <div class="menu-card-info">
                    <h3>Carrot Cake with Cream Cheese Frosting</h3>
                    <p>Moist carrot cake topped with cream cheese frosting</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 375.00</strong>
                    <button onclick="addToCart('Carrot Cake with Cream Cheese Frosting', 375.00, 'Images/Desserts/Carrot Cake.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Chocolate Glaze.jpg" alt="Eclairs">
                <div class="menu-card-info">
                    <h3>Eclairs with Chocolate Glaze</h3>
                    <p>Light eclairs filled with vanilla cream and chocolate glaze</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 325.00</strong>
                    <button onclick="addToCart('Eclairs with Chocolate Glaze', 325.00, 'Images/Desserts/Chocolate Glaze.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Profiteroles.jpg" alt="Profiteroles">
                <div class="menu-card-info">
                    <h3>Profiteroles with Vanilla Cream</h3>
                    <p>Cream-filled profiteroles drizzled with chocolate sauce</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 375.00</strong>
                    <button onclick="addToCart('Profiteroles with Vanilla Cream', 375.00, 'Images/Desserts/Profiteroles.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Ganache.jpg" alt="Flourless Chocolate Cake">
                <div class="menu-card-info">
                    <h3>Flourless Chocolate Cake with Ganache</h3>
                    <p>Dense chocolate cake covered with rich ganache</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 390.00</strong>
                    <button onclick="addToCart('Flourless Chocolate Cake with Ganache', 390.00, 'Images/Desserts/Ganache.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Panna Cotta.jpg" alt="Panna Cotta">
                <div class="menu-card-info">
                    <h3>Panna Cotta with Strawberry Sauce</h3>
                    <p>Creamy panna cotta topped with fresh strawberry sauce</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 365.00</strong>
                    <button onclick="addToCart('Panna Cotta with Strawberry Sauce', 365.00, 'Images/Desserts/Panna Cotta.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Fresh Raspberries.jpg" alt="Chocolate Mousse">
                <div class="menu-card-info">
                    <h3>Chocolate Mousse with Fresh Raspberries</h3>
                    <p>Rich chocolate mousse garnished with fresh raspberries</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 340.00</strong>
                    <button onclick="addToCart('Chocolate Mousse with Fresh Raspberries', 340.00, 'Images/Desserts/Fresh Raspberries.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Macaroons.jpg" alt="Coconut Macaroons">
                <div class="menu-card-info">
                    <h3>Coconut Macaroons with Dark Chocolate</h3>
                    <p>Chewy coconut macaroons dipped in dark chocolate</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 325.00</strong>
                    <button onclick="addToCart('Coconut Macaroons with Dark Chocolate', 325.00, 'Images/Desserts/Macaroons.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Desserts/Cheesecake Berry.jpg" alt="New York Cheesecake">
                <div class="menu-card-info">
                    <h3>New York Cheesecake with Berry Compote</h3>
                    <p>Classic cheesecake topped with a berry compote</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 350.00</strong>
                    <button onclick="addToCart('New York Cheesecake with Berry Compote', 350.00, 'Images/Desserts/Cheesecake Berry.jpg')">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Beverages Section -->
        <div class="menu-content beverages">
            <div class="menu-card">
                <img src="Images/Beverages/Orange Juice.jpg" alt="Orange Juice">
                <div class="menu-card-info">
                    <h3>Freshly Squeezed Orange Juice</h3>
                    <p>Freshly squeezed orange juice with a citrus kick</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 450.00</strong>
                    <button onclick="addToCart('Freshly Squeezed Orange Juice', 450.00, 'Images/Beverages/Orange Juice.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Iced Coffee.jpg" alt="Iced Coffee">
                <div class="menu-card-info">
                    <h3>Iced Coffee with Vanilla Syrup</h3>
                    <p>Refreshing iced coffee flavored with vanilla syrup</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 475.00</strong>
                    <button onclick="addToCart('Iced Coffee with Vanilla Syrup', 475.00, 'Images/Beverages/Iced Coffee.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Classic Mojito.jpg" alt="Classic Mojito">
                <div class="menu-card-info">
                    <h3>Classic Mojito with Fresh Mint</h3>
                    <p>Classic mojito with fresh mint and lime</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 350.00</strong>
                    <button onclick="addToCart('Classic Mojito with Fresh Mint', 350.00, 'Images/Beverages/Classic Mojito.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Fresh Lime Soda.jpg" alt="Fresh Lime Soda">
                <div class="menu-card-info">
                    <h3>Fresh Lime Soda with Mint</h3>
                    <p>Tangy lime soda with minty freshness</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 320.00</strong>
                    <button onclick="addToCart('Fresh Lime Soda with Mint', 320.00, 'Images/Beverages/Fresh Lime Soda.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Mango Smoothie.jpg" alt="Mango Smoothie">
                <div class="menu-card-info">
                    <h3>Mango Smoothie with Yogurt</h3>
                    <p>Creamy mango smoothie blended with yogurt</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 475.00</strong>
                    <button onclick="addToCart('Mango Smoothie with Yogurt', 475.00, 'Images/Beverages/Mango Smoothie.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Hot Chocolate.jpg" alt="Hot Chocolate">
                <div class="menu-card-info">
                    <h3>Hot Chocolate with Marshmallows</h3>
                    <p>Rich hot chocolate topped with fluffy marshmallows</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 400.00</strong>
                    <button onclick="addToCart('Hot Chocolate with Marshmallows', 400.00, 'Images/Beverages/Hot Chocolate.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Cappuccino.jpg" alt="Cappuccino">
                <div class="menu-card-info">
                    <h3>Cappuccino with Cinnamon Dust</h3>
                    <p>Bold cappuccino sprinkled with aromatic cinnamon dust</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 500.00</strong>
                    <button onclick="addToCart('Cappuccino with Cinnamon Dust', 500.00, 'Images/Beverages/Cappuccino.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Green Tea with Jasmine.jpg" alt="Green Tea with Jasmine">
                <div class="menu-card-info">
                    <h3>Green Tea with Jasmine</h3>
                    <p>Fragrant green tea infused with jasmine blossoms</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 300.00</strong>
                    <button onclick="addToCart('Green Tea with Jasmine', 300.00, 'Images/Beverages/Green Tea with Jasmine.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Cold Brew Coffee with Almond Milk.jpg" alt="Cold Brew Coffee with Almond Milk">
                <div class="menu-card-info">
                    <h3>Cold Brew Coffee with Almond Milk</h3>
                    <p>Smooth cold brew coffee with almond milk</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 450.00</strong>
                    <button onclick="addToCart('Cold Brew Coffee with Almond Milk', 450.00, 'Images/Beverages/Cold Brew Coffee with Almond Milk.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Lemonade with Fresh Berries.jpg" alt="Lemonade with Fresh Berries">
                <div class="menu-card-info">
                    <h3>Lemonade with Fresh Berries</h3>
                    <p>Refreshing lemonade with a burst of berries</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 275.00</strong>
                    <button onclick="addToCart('Lemonade with Fresh Berries', 275.00, 'Images/Beverages/Lemonade with Fresh Berries.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Coconut Water with Lime.jpg" alt="Coconut Water with Lime">
                <div class="menu-card-info">
                    <h3>Coconut Water with Lime</h3>
                    <p>Coconut water with a zesty lime twist</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 375.00</strong>
                    <button onclick="addToCart('Coconut Water with Lime', 375.00, 'Images/Beverages/Coconut Water with Lime.jpg')">Add to Cart</button>
                </div>
            </div>
            <div class="menu-card">
                <img src="Images/Beverages/Coffee Liqueur.jpg" alt="Coffee Liqueur">
                <div class="menu-card-info">
                    <h3>Espresso Martini with Coffee Liqueur</h3>
                    <p>Espresso martini enriched with coffee liqueur</p>
                </div>
                <div class="menu-card-price">
                    <span>Price</span>
                    <strong>LKR 490.00</strong>
                    <button onclick="addToCart('Espresso Martini with Coffee Liqueur', 490.00, 'Images/Beverages/Coffee Liqueur.jpg')">Add to Cart</button>
                </div>
            </div>
        </div>


        <div id="cartModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="cart-details">
                    <div class="notification">
                        <span class="checkmark"><i class='bx bx-cart-add'></i></span>
                        <span>Added to your cart!</span>
                    </div>
        
                    <div class="cart-item">
                        <img id="itemImage" src="" alt="Item Image">
                        <div class="cart-info">
                            <p id="itemName"></p>
                            <p id="itemPrice"></p>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <a href="order.php" class="button view-cart" id="viewCartBtn">View Cart</a>
                    <a href="checkout.php" class="button checkout" id="checkoutBtn">Checkout</a>
                </div>                
            </div>
        </div>        
    </div>
    
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item');
    const menuSections = document.querySelectorAll('.menu-content');

    // Hide all sections except the first (Breakfast)
    menuSections.forEach((section, index) => {
        section.style.display = index === 0 ? 'flex' : 'none';
    });

    // Handle menu item clicks
    menuItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            // Remove active class from all items
            menuItems.forEach(i => i.classList.remove('active'));

            // Hide all sections
            menuSections.forEach(section => section.style.display = 'none');

            // Add active class to clicked item and show corresponding section
            this.classList.add('active');
            menuSections[index].style.display = 'flex';
        });
    });
});


</script>

<section class="chef">
    <div class="chef-container">
        <h2>Our</h2>
        <h1>Chefs</h1>
    </div>
<div class="container">
    <div class="card__container">
       <article class="card__article">
          <img src="Images/chef-1.jpg" alt="image" class="card__img">

          <div class="card__data">
             <span class="card__description">Vancouver Mountains, Canada</span>
             <h2 class="card__title">The Great Path</h2>
             <a href="#" class="card__button">Read More</a>
          </div>
       </article>

       <article class="card__article">
          <img src="Images/chef-2.jpg" alt="image" class="card__img">

          <div class="card__data">
             <span class="card__description">Poon Hill, Nepal</span>
             <h2 class="card__title">Starry Night</h2>
             <a href="#" class="card__button">Read More</a>
          </div>
       </article>

       <article class="card__article">
          <img src="Images/chef-3.jpg" alt="image" class="card__img">

          <div class="card__data">
             <span class="card__description">Bojcin Forest, Serbia</span>
             <h2 class="card__title">Path Of Peace</h2>
             <a href="#" class="card__button">Read More</a>
          </div>
       </article>

       <article class="card__article">
        <img src="Images/chef-4.jpg" alt="image" class="card__img">

        <div class="card__data">
           <span class="card__description">Bojcin Forest, Serbia</span>
           <h2 class="card__title">Path Of Peace</h2>
           <a href="#" class="card__button">Read More</a>
        </div>
     </article>
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
    // Hide loader after animation completes
    window.onload = function() {
        const loader = document.querySelector('.loader');
        setTimeout(() => {
            loader.classList.add('hide-loader');
        }, 2000);
    };
</script>

    <script src="menu.js"></script>
</body>
</html>