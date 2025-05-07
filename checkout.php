<!DOCTYPE html> 
<html lang="en">
<head>
    <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
    <title>Gallery Cafe Restaurant - Checkout</title>
    <link rel="stylesheet" href="checkout.css">
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
    
    <div class="container">
        <!-- Left side: Form without scroll -->
        <div class="left-side">
            <h2>Checkout</h2>

            <!-- Contact Form -->
            <form method="POST" action="checkout.php">
                <!-- Contact Information -->
                <section class="contact">
                    <h3>Contact</h3>
                    <input type="email" name="email" placeholder="Email" class="email" required>

                    <label class="contact-checkbox">
                        <input type="checkbox" name="text_news_offers" checked>
                        <span>Email me with news and offers</span>
                    </label>
                </section>

                <!-- Delivery Information -->
                <section class="delivery">
                    <h3>Delivery</h3>
                    <select id="country" name="country">
                        <option value="Sri Lanka">Sri Lanka</option>
                    </select>
                    <div class="input-group">
                        <input type="text" name="first_name" placeholder="First name" required>
                        <input type="text" name="last_name" placeholder="Last name" required>
                    </div>
                    <input type="text" name="address" placeholder="Address" required>
                    <input type="text" name="apartment" placeholder="Apartment, suite, etc. (optional)">
                    <input type="text" name="city" placeholder="City" required>
                    <input type="text" name="postal_code" placeholder="Postal code (optional)">
                    <input type="tel" name="phone" placeholder="Phone" required>

                    <label>
                        <input type="checkbox" name="save_info"> 
                        <span>Save this information for next time</span>
                    </label>

                    <label>
                        <input type="checkbox" name="text-offers">
                        <span>Text me with news and offers</span>
                    </label>
                </section>

                <!-- Payment Information -->
                <section class="payment">
                    <h3>Payment</h3>

                    <!-- Payment Methods -->
                    <div class="payment-options">
                        <label for="credit-card">
                            <input type="radio" id="credit-card" name="payment-method" value="credit-card" checked onclick="updateButtonName()"/>
                            <p>Credit Card</p>
                        </label>
                        <div class="credit-card-fields payment-fields">
                            <input type="text" name="card_number" placeholder="Card number" required>
                            <input type="text" name="expiration_date" placeholder="Expiration date (MM / YY)" required>
                            <input type="text" name="security_code" placeholder="Security code" required>
                            <input type="text" name="name_on_card" placeholder="Name on card" required>
                            <div class="billing">
                                <input type="checkbox" checked> Use delivery address as billing address
                            </div>
                        </div>

                        <label for="bank-deposit">
                            <input type="radio" id="bank-deposit" name="payment-method" value="bank-deposit" onclick="updateButtonName()"/>
                            <p>Bank Deposit</p>
                        </label>
                        <div class="bank-deposit-fields payment-fields">
                            <p>Pay via bank deposit. Instructions will be sent to your email.</p>
                        </div>

                        <label for="cod">
                            <input type="radio" id="cod" name="payment-method" value="cod" onclick="updateButtonName()"/>
                            <p>Cash on Delivery (COD)</p>
                        </label>
                        <div class="cod-fields payment-fields">
                            <p>Pay with cash upon delivery.</p>
                        </div>
                    </div>

                    <button type="submit" id="pay-button">Pay now</button>
                </section>
            </form>
        </div>

        <!-- Right side: Sticky order summary -->
        <div class="right-side">
            <h2>Order Summary</h2>
            <div id="cart-items">
                <!-- Cart items will be dynamically added here -->
            </div>
        
            <div class="summary">
                <div class="discount-section">
                    <input type="text" placeholder="Discount code">
                    <button>Apply</button>
                </div>
                <div class="totals">
                    <p>Subtotal (<span id="item-count">0</span> items): <span id="subtotal">Rs 0.00</span></p>
                    <p>Delivery: <span id="delivery-fee">LKR 1000.00</span></p>
                    <h3>Total: LKR <span id="total">Rs 0.00</span></h3>
                </div>
            </div>
        </div>        
    </div>

    <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery_cafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $apartment_suite = $_POST['apartment'] ?? ''; 
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'] ?? ''; 
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $cart_items = $_POST['cart_items'] ?? ''; 
    $subtotal = $_POST['subtotal'] ?? 0; 
    $delivery_fee = $_POST['delivery_fee'] ?? 1000; 
    $final_price = $_POST['final_price'] ?? 0; 
    $payment_method = $_POST['payment-method']; 

    $offers_email = isset($_POST['text_news_offers']) ? 1 : 0;
    $offers_text = isset($_POST['text-offers']) ? 1 : 0;

    if ($payment_method == 'credit-card') {
        $card_number = $_POST['card_number'];
        $expiration_date = $_POST['expiration_date'];
        $security_code = $_POST['security_code'];
        $name_on_card = $_POST['name_on_card'];
        $billing_address_same = isset($_POST['billing_address_same']) ? 1 : 0;
    } else {
        $card_number = null;
        $expiration_date = null;
        $security_code = null;
        $name_on_card = null;
        $billing_address_same = null;
    }

    // Prepare the SQL statement using placeholders
    $sql = "INSERT INTO orders (email, first_name, last_name, address, apartment_suite, city, postal_code, phone, country, cart_items, subtotal, delivery_fee, final_price, payment_method, card_number, expiration_date, security_code, name_on_card, billing_address_same, offers_email, offers_text) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters to the statement
    $stmt->bind_param("sssssssssdidssssssiii", $email, $first_name, $last_name, $address, $apartment_suite, $city, $postal_code, $phone, $country, $cart_items, $subtotal, $delivery_fee, $final_price, $payment_method, $card_number, $expiration_date, $security_code, $name_on_card, $billing_address_same, $offers_email, $offers_text);

    // Execute and check if successful
    if ($stmt->execute()) {
        $message = "Order placed successfully!";
        $isSuccess = true;
    } else {
        $message = "Error: " . $stmt->error;
        $isSuccess = false;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

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

    // JavaScript to show and auto-hide the message box
    echo "<script>
            document.getElementById('message-box').style.display = 'block';
            setTimeout(function() {
                document.getElementById('message-box').classList.add('move-out');
                setTimeout(function() {
                    document.getElementById('message-box').style.display = 'none';
                    document.getElementById('message-box').classList.remove('move-out');
                }, 1000);
            }, 5000);

            function closeMessageBox() {
                document.getElementById('message-box').style.display = 'none';
            }
        </script>";
}
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


    <script src="checkout.js"></script>
</body>
</html>
