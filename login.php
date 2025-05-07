<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
    <title>Gallary Cafe Restaurant - Login and Signup</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
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

    <div class="container">

        <!-- Search Bar Section -->
        <div class="search-container">
            <input type="text" id="search-bar" placeholder="Search foods..." class="search-bar">
            <button class="search-btn"><i class='bx bx-search'></i></button>
            <div class="result-box"></div>
          </div>
          
          <div class="content-right">
            <div class="form-container">
                <form id="login-form" class="form active" method="post">
                    <h2>Login</h2>
                    <div class="input-container">
                        <input type="text" name="username" placeholder="Username" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class='bx bxs-lock'></i>
                    </div>
                    <div class="options">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                    <button type="submit" name="login">Login</button>
                    <p>Don't have an account? <button type="button" id="show-signup">Register</button></p>
                </form>
                
                <form id="signup-form" class="form hidden" method="post">
                    <h2>Sign Up</h2>
                    <div class="input-container">
                        <input type="text" name="username" placeholder="Username" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" placeholder="Email" required>
                        <i class='bx bxs-envelope'></i>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class='bx bxs-lock'></i>
                    </div>
                    <div class="input-container" id="confirm-password-container">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                        <i class='bx bxs-lock'></i>
                    </div>
                    <div class="input-container" id="serial-key-container" style="display: none;">
                        <input type="text" name="serial_key" id="serial_key" placeholder="Enter Serial Key">
                        <i class='bx bxs-key'></i>
                    </div>
                    <div class="input-container">
                        <label for="role">Select Role:</label>
                        <select name="role_id" class="role-select" id="role-select" required>
                            <option value="3">Customer</option>
                            <option value="1">Admin</option>
                            <option value="2">Operational Staff</option>
                        </select>
                    </div>

                    <button type="submit" name="signup">Sign Up</button>
                    <p>Already have an account? <button type="button" id="show-login">Login</button></p>
                </form>
            </div>
        </div>

<!-- Message Box for displaying success/error messages -->
<div id="message-box" class="message-box"></div>

<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$database = "gallery_cafe";

// Admin and Staff serial keys
$adminSerialKey = "ADMIN123456";
$staffSerialKey = "STAFF123456";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to display messages
function displayMessage($message, $isSuccess = false) {
    $class = $isSuccess ? "success" : "error";
    $icon = $isSuccess ? "<i class='bx bx-check icon'></i>" : "<i class='bx bx-x icon'></i>";
    $buttonText = $isSuccess ? "Continue" : "Try Again";

    echo "<script>
    document.getElementById('message-box').innerHTML = `"
    . "<div class='message-container'>"
    . "<div class='icon-circle'>$icon</div>"
    . "<div class='message-text'>" 
    . "<h3>" . ($isSuccess ? 'Success!' : 'Error!') . "</h3>"
    . "<p>$message</p>"
    . "</div>"
    . "<div class='close-icon' onclick='closeMessageBox()'>×</div>"
    . "</div>`; 
    document.getElementById('message-box').classList.add('$class');
    document.getElementById('message-box').style.display = 'block';

    document.getElementById('message-box').classList.add('move-in');
    
    setTimeout(function() {
        document.getElementById('message-box').classList.add('move-out');
        setTimeout(function() {
            document.getElementById('message-box').style.display = 'none';
            document.getElementById('message-box').classList.remove('move-in', 'move-out');
        }, 1000);
    }, 5000);
</script>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role_id = isset($_POST['role_id']) ? mysqli_real_escape_string($conn, $_POST['role_id']) : null;
    $serial_key = isset($_POST['serial_key']) ? mysqli_real_escape_string($conn, $_POST['serial_key']) : null;

    // Sign-up functionality
    if (isset($_POST['signup'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $confirm_password = isset($_POST['confirm_password']) ? mysqli_real_escape_string($conn, $_POST['confirm_password']) : null;

        // Check if passwords match for customers
        if ($role_id == 3 && $password !== $confirm_password) {
            displayMessage("Passwords do not match! Please try again.");
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Serial Key validation for Admin and Staff
            if ($role_id == 1 && $serial_key !== $adminSerialKey) {
                displayMessage("Invalid serial key for Admin. Please try again.");
            } elseif ($role_id == 2 && $serial_key !== $staffSerialKey) {
                displayMessage("Invalid serial key for Staff. Please try again.");
            } else {
                // Insert user into the database
                $sql = "INSERT INTO users (username, email, password, role_id, serial_key) 
                        VALUES ('$username', '$email', '$hashed_password', '$role_id', '$serial_key')";

                if ($conn->query($sql) === TRUE) {
                    displayMessage(($role_id == 1 ? "Admin" : ($role_id == 2 ? "Staff" : "Customer")) . " account created successfully! Please log in.", true);

                    // Check if the user is on the 'all-user.php' page and reload users
                    echo "<script>
                        if (window.location.pathname.includes('all-user.php')) {
                            loadUsers(); // Ensure this function is defined in 'all-user.php'
                        }
                    </script>";

                    // Hide the signup form and show the login form
                    echo "<script>
                        document.getElementById('signup-form').classList.add('hidden');
                        document.getElementById('login-form').classList.remove('hidden');
                    </script>";
                } else {
                    displayMessage("Error: " . $sql . "<br>" . $conn->error);
                }
            }
        }
    }

    // Login functionality
    if (isset($_POST['login'])) {
        // Fetch user from the database
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Password is correct, proceed with login

                // Store the user's information in session
                $_SESSION['username'] = $row['username'];
                $_SESSION['role_id'] = $row['role_id'];

                // Redirect and display messages based on the role
                if ($row['role_id'] == 1) { // Admin
                    displayMessage("Welcome back Admin, login successful!", true);
                    echo "<script>
                        setTimeout(function() {
                            window.location.href = 'admin_page.php';
                        }, 4000);
                    </script>";
                } elseif ($row['role_id'] == 2) { // Staff
                    displayMessage("Welcome back Staff, login successful!", true);
                    echo "<script>
                        setTimeout(function() {
                            window.location.href = 'staff_page.php';
                        }, 4000);
                    </script>";
                } else { // Customer
                    displayMessage("Login successful!", true);
                    echo "<script>
                        setTimeout(function() {
                            window.location.href = 'index.php';
                        }, 4000);
                    </script>";
                }
            } else {
                displayMessage("Incorrect password. Try again!");
            }
        } else {
            displayMessage("No account found with that username. Try again!");
        }
    }

    // Fetch all users ordered by their IDs for admin/staff panels
    if (isset($_POST['fetch_users'])) {
        $sql = "SELECT * FROM users ORDER BY id ASC"; // Ensure the ordering by 'id' in ascending order
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display users
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";  // Display the user ID
                echo "<td>" . $row['username'] . "</td>";  // Display the username
                echo "<td>" . $row['email'] . "</td>";  // Display the email
                echo "</tr>";
            }
        } else {
            echo "No users found.";
        }
    }
}

$conn->close();
?>



    
<script>
    function hideMessageBox() {
    document.getElementById('message-box').style.display = 'none';
    document.getElementById('message-box').className = 'message-box';  // Reset the class
    }

    function closeMessageBox() {
        document.getElementById('message-box').style.display = 'none';
    }

    // Hide loader after animation completes
    window.onload = function() {
        const loader = document.querySelector('.loader');
        setTimeout(() => {
            loader.classList.add('hide-loader');
        }, 2000);
    };

    // Show/Hide Serial Key input and Confirm Password input based on role selection
    document.getElementById("role-select").addEventListener("change", function() {
        const role = this.value;
        const serialKeyContainer = document.getElementById("serial-key-container");
        const confirmPasswordContainer = document.getElementById("confirm-password-container");
        const confirmPasswordInput = document.getElementById("confirm_password");
        const serialKeyInput = document.getElementById("serial_key");

        if (role == 1 || role == 2) { // Admin or Staff
            // Show Serial Key input
            serialKeyContainer.style.display = "block";
            // Hide Confirm Password input
            confirmPasswordContainer.style.display = "none";
            confirmPasswordInput.removeAttribute("required"); // Remove required for confirm_password
            serialKeyInput.setAttribute("required", "true"); // Make serial_key required
        } else {
            // Hide Serial Key input
            serialKeyContainer.style.display = "none";
            serialKeyInput.removeAttribute("required"); // Remove required for serial_key
            // Show Confirm Password input
            confirmPasswordContainer.style.display = "block";
            confirmPasswordInput.setAttribute("required", "true"); // Make confirm_password required
        }
    });

</script>
    
<script src="login.js"></script>
</body>
</html>