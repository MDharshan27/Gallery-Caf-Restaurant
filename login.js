// Toggle password visibility
const passwordToggles = document.querySelectorAll('.input-container i');
passwordToggles.forEach(icon => {
  icon.addEventListener('click', function() {
      const input = this.previousElementSibling;
      if (input.type === 'password') {
          input.type = 'text';
          this.classList.replace('bxs-lock', 'bxs-lock-open');
      } else {
          input.type = 'password';
          this.classList.replace('bxs-lock-open', 'bxs-lock');
      }
  });
});

document.getElementById("show-signup").addEventListener("click", function() {
  document.getElementById("login-form").classList.add("hidden");
  document.getElementById("signup-form").classList.remove("hidden");
});

document.getElementById("show-login").addEventListener("click", function() {
  document.getElementById("signup-form").classList.add("hidden");
  document.getElementById("login-form").classList.remove("hidden");
});


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


