<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
  <title>Gallery Cafe Restaurant - Admin Dashboard</title>
  <link rel="stylesheet" href="add-user.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <nav class="sidebar">
      <div class="sidebar-header">
        <h1><span class="red">The</span> Gallery <span class="gray">Café</span></h1>
      </div>
      <ul class="menu-list">
        <li class="menu-item">
          <a href="admin_page.php"><i class='bx bxs-home'></i> Home</a>
        </li>
        <li class="menu-item dropdown">
            <a href="javascript:void(0);" class="dropdown-btn"><i class='bx bxs-user'></i> Reservation
                <i class="fas fa-chevron-down dropdown-icon"></i>
            </a>
            <ul class="dropdown-list">
                <li><a href="admin-reservation.php">Reservation</a></li>
                <li><a href="admin-tablebook.php">Table Bookings</a></li>
            </ul>
        </li>
        <li class="menu-item dropdown">
          <a href="javascript:void(0);" class="dropdown-btn"><i class='bx bxs-user'></i></i> Users
            <i class="fas fa-chevron-down dropdown-icon"></i>
          </a>
          <ul class="dropdown-list">
            <li><a href="all-users.php">All Users</a></li>
            <li><a href="add-user.php">Add User</a></li>
          </ul>
        </li>
        <li class="menu-item dropdown">
          <a href="javascript:void(0);" class="dropdown-btn"><i class='bx bxs-food-menu'></i></i> Menu
            <i class="fas fa-chevron-down dropdown-icon"></i>
          </a>
          <ul class="dropdown-list">
            <li><a href="add-breakfast.php">Breakfast</a></li>
            <li><a href="add-lunch.php">Lunch</a></li>
            <li><a href="add-dinner.php">Dinner</a></li>
            <li><a href="add-desserts.php">Desserts</a></li>
            <li><a href="add-beverages.php">Beverages</a></li>
          </ul>
        </li>
        <li class="menu-item dropdown">
          <a href="javascript:void(0);" class="dropdown-btn"><i class='bx bxs-cart-alt'></i></i> Orders
            <i class="fas fa-chevron-down dropdown-icon"></i>
          </a>
          <ul class="dropdown-list">
            <li><a href="all-order.php">All Orders</a></li>
          </ul>
        </li>
      </ul>
    </nav>
        
        <!-- Main Content -->
        <div class="main-content">
          <div id="dashboardContent" class="content-section">
            <h1>Welcome to the Admin Dashboard</h1>

            <div class="admin-profile">
                <button class="profile-btn">
                  Admin <i class="arrow-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#"><i class='bx bx-cool'></i>Profile</a>
                  <a href="login.php" id="logout"><i class='bx bx-exit'></i>Logout</a>
                </div>
            </div>
          </div>

          <div class="header">
              <h2>Add New User</h2>
          </div>

          <div id="addUserContent">
              <form id="addUserForm" method="POST">
                  <label for="username">Username</label>
                  <input type="text" id="username" name="username" required>

                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required>

                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" required>

                  <label for="role">Select Role:</label>
                  <select name="role_id" class="role-select" id="role-select" required>
                      <option value="3">Customer</option>
                      <option value="1">Admin</option>
                      <option value="2">Operational Staff</option>
                  </select>

                  <button type="submit">Add User</button>
              </form>
          </div>

          <!-- Message Box for displaying success/error messages -->
          <div id="message-box" class="message-box"></div>
          
          <?php
          // Handle form submission
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $servername = "localhost";
              $dbUsername = "root";
              $dbPassword = "";
              $database = "gallery_cafe";

              // Create connection
              $conn = new mysqli($servername, $dbUsername, $dbPassword, $database);

              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }

              // Function to display messages
              function displayMessage($message, $isSuccess = false) {
                  $class = $isSuccess ? "success" : "error";
                  $icon = $isSuccess ? "<i class='bx bx-check icon'></i>" : "<i class='bx bx-x icon'></i>";
                  
                  echo "<script>
                  document.addEventListener('DOMContentLoaded', function() {
                      var messageBox = document.getElementById('message-box');
                      messageBox.innerHTML = `
                          <div class='message-container'>
                              <div class='icon-circle'>$icon</div>
                              <div class='message-text'>
                                  <h3>" . ($isSuccess ? 'Success!' : 'Error!') . "</h3>
                                  <p>$message</p>
                              </div>
                              <div class='close-icon' onclick='closeMessageBox()'>×</div>
                          </div>`;
                          
                      messageBox.classList.add('$class');
                      messageBox.style.display = 'block';
                      messageBox.classList.add('move-in');

                      setTimeout(function() {
                          messageBox.classList.add('move-out');
                          setTimeout(function() {
                              messageBox.style.display = 'none';
                              messageBox.classList.remove('move-in', 'move-out', '$class');
                          }, 1000);
                      }, 5000);
                  });
                  </script>";
              }

              // Prepare and bind
              $stmt = $conn->prepare("INSERT INTO users (username, email, password, role_id) VALUES (?, ?, ?, ?)");
              $stmt->bind_param("sssi", $username, $email, $password, $role_id);

              // Set parameters and execute
              $username = $_POST['username'];
              $email = $_POST['email'];
              $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
              $role_id = $_POST['role_id'];

              if ($stmt->execute()) {
                  displayMessage("User added successfully!", true);
              } else {
                  displayMessage("Error: " . $stmt->error, false);
              }

              $stmt->close();
              $conn->close();
          }
          ?>


    </div>

    <script>
      // Toggle dropdown visibility
      document.querySelector('.profile-btn').addEventListener('click', function () {
        document.querySelector('.dropdown-content').classList.toggle('show');
      });

      // Logout functionality
      document.getElementById('logout').addEventListener('click', function () {
        window.location.href = 'login.php';
      });

      function hideMessageBox() {
      document.getElementById('message-box').style.display = 'none';
      document.getElementById('message-box').className = 'message-box';  // Reset the class
      }

      function closeMessageBox() {
          document.getElementById('message-box').style.display = 'none';
      }
    </script>
    
    <script src="add-user.js"></script>
</body>
</html>
