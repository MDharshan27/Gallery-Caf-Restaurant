<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery_cafe";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch orders
$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
  <title>Gallery Cafe Restaurant - Staff Dashboard</title>
  <link rel="stylesheet" href="staff_page.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Times New Roman', Times, serif;
      background-color: #f4f4f4;
    }
    
    .dashboard {
      display: flex;
    }
    
    .sidebar {
      width: 250px;
      background-color: #0f2b46;
      color: #fff;
      height: 100vh;
      position: fixed;
    }
    
    .sidebar-header h1 {
      padding: 20px;
      font-family: 'Times New Roman', Times, serif;
      font-size: 25px;
      margin-bottom: 30px;
      color: #ffb100;
      text-align: center;
    }

    .sidebar-header .red {
      font-size: 15px;
      color: white;
    }

    .sidebar-header .gray {
      color: #a1a1a1;
    }
    
    .menu-list {
      list-style: none;
      padding: 0;
    }
    
    .menu-item {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .menu-item a {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      color: #fff;
      text-decoration: none;
    }
    
    .menu-item a i {
      margin-right: 10px;
    }
    
    .menu-item .dropdown-btn {
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }
    
    .menu-item:first-child a {
      justify-content: flex-start;
    }
    
    .dropdown-icon {
      margin-left: auto;
      transition: transform 0.3s ease;
    }
    
    .dropdown-btn.active .dropdown-icon {
      transform: rotate(180deg);
    }
    
    .dropdown-list {
      display: none;
      list-style: none;
      padding: 0;
      background-color: #0f2b46;
      padding-left: 50px;
    }

    .dropdown-list li:hover {
      background-color: #a1a1a1;
    }
    
    .dropdown-list.show {
      display: block;
    }
    
    .main-content {
      margin-left: 250px;
      width: 100%;
    }

    .content-section h1 {
      font-size: 28px;
      padding: 20px;
      color: #ffffff;
    }

    .content-section {
      display: flex;
      justify-content: space-between;
      align-items: center; 
      padding: 10px;
      background-color: #0f2b46;
    }
  
    .admin-profile {
      position: relative;
    }
  
    .profile-btn {
      background-color: #bb8402;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 5px;
      display: flex;
      align-items: center;
    }
  
    .profile-btn .arrow-down {
      margin-left: 8px;
      border: solid white;
      border-width: 0 2px 2px 0;
      padding: 4px;
      display: inline-block;
      transform: rotate(45deg);
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: white;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      min-width: 160px;
      border-radius: 5px;
    }
    .dropdown-content i {
      margin-right: 5px;
      font-size: 15px;
    }
    .dropdown-content a {
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      color: black;
      border-bottom: 1px solid #ddd;
    }
    
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    
    .show {
      display: block; /* Shows the dropdown when clicked */
    }

    /* Add New User header styling */
    .header {
      color: #000000;
      padding: 10px;
      text-align: left;
      margin-left: 20px;
    }

    .header h2 {
      font-size: 24px;
      margin: 0;
    }

    /* Form styling */
    .form-container {
      margin: 0; /* Remove default margin */
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 30%;
      position: fixed;
      top: 23%;
      right: 1%;
      z-index: 1000;
      height: 74.5vh; 
      /* Make the form scrollable */
      max-height: 74.5vh; /* Adjust based on the available screen space */
      overflow-y: auto; /* Enable vertical scrolling */
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: vertical;
    }

    .form-group input[type="file"] {
      display: none;
    }

    .upload-area {
      border: 2px dashed #ccc;
      border-radius: 5px;
      padding: 20px;
      text-align: center;
      cursor: pointer;
    }

    .thumbnail {
      position: relative;
      width: 100px; /* Adjust size if needed */
      height: 100px; /* Adjust size if needed */
    }

    #thumbnailImage {
      width: 100%;
      height: 100%;
      margin-top: 20px;
      object-fit: cover; /* Ensures the image is properly contained */
    }

    .close-btn {
      position: absolute;
      top: 12px;
      right: -7px;
      background-color: rgba(0, 0, 0, 0.6);
      color: white;
      border: none;
      border-radius: 50%;
      width: 20px;
      height: 20px;
      font-size: 14px;
      line-height: 20px;
      text-align: center;
      cursor: pointer;
      z-index: 1;
    }

    .btn {
      background-color: #0f2b46;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
    }

    .btn:hover {
      background-color: #ffb100;
    }

    .breakfast-container {
      width: 48%;
      overflow-y: auto;
      position: fixed;
      top: 23%;
      left: 20%;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      height: 74.5vh;
    }

    .menu-card {
      background-color: gainsboro;
      border: 1px solid #ddd;
      border-radius: 5px;
      display: flex;
      align-items: center;
      padding: 10px;
      width: 60%%;
      margin-bottom: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .menu-card img {
      width: 100px;
      height: 100px;
      border-radius: 5px;
      margin-right: 15px;
    }

    .menu-card-info {
      flex-grow: 1;
    }

    .menu-card-info h3 {
      font-size: 18px;
      color: #333;
      margin-bottom: 5px;
      font-family: 'Times New Roman', Times, serif;
    }

    .menu-card-info p {
      font-size: 0.9em;
      color: #777;
    }

    .menu-card-price {
      text-align: right;
      font-family: 'Times New Roman', Times, serif;
    }

    .menu-card-price span {
      display: block;
      font-size: 15px;
      color: #999;
    }

    .menu-card-price strong {
      font-size: 18px;
      color: #333;
      margin-bottom: 5px;
      display: block;
    }

    .menu-card-price button {
      padding: 5px 10px;
      background-color: green;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 0.9em;
      color: #fff;
      transition: background-color 0.3s ease;
    }

    .menu-card-price button:hover {
      background-color: rgb(6, 185, 6);
    }

    .menu-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
    }

    .main-content {
        overflow-x: hidden;
    }

    .orders-table-container {
        max-width: 100%;
        height: 400px;
        overflow-y: auto;
        margin: 30px ;
    }

    .orders-table {
        width: max-content;
        border-collapse: collapse;
    }

    .orders-table th,
    .orders-table td {
        padding: 20px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .orders-table th {
        background-color: #0f2b46;
        font-weight: bold;
        color: white;
    }

    /* Responsive Styles */
        @media (max-width: 768px) {
        .orders-table th,
        .orders-table td {
            padding: 8px;
            font-size: 12px;
        }
    }

    /* Styling the Confirm and Delete buttons */
.confirm-btn {
  background-color: #28a745; /* Green color */
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.delete-btn {
  background-color: #dc3545; /* Red color */
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.confirm-btn:hover, .delete-btn:hover {
  opacity: 0.8;
}

/* Message box styling */
.message-box {
    position: fixed;
    top: 60px;
    right: 20px;
    padding: 15px;
    width: 350px;
    min-height: 50px;
    border-radius: 10px;
    display: none;
    z-index: 999;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    animation-duration: 1s;
    animation-fill-mode: forwards;
}

/* Close icon */
.close-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
}


/* Keyframes for move-in and move-out animations */
@keyframes moveleft {
    0% {
        transform: translateX(100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes moveback {
    0% {
        transform: translateX(0);
        opacity: 1;
    }
    100% {
        transform: translateX(100%);
        opacity: 0;
    }
}

/* Animation classes */
.move-in {
    animation: moveleft 1s ease-in-out forwards;
}

.move-out {
    animation: moveback 1s ease-in-out forwards;
}

/* Responsive design */
@media (max-width: 768px) {
    .message-box {
        width: 90%; /* More responsive on smaller screens */
        right: 5%; /* Center it horizontally */
        left: 5%;
        top: 10px; /* Closer to the top on small screens */
    }
}

/* Success message */
.message-box.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

/* Error message */
.message-box.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

/* Flexbox container to align icon and message title */
.message-container {
    display: flex;
    align-items: flex-start;
    gap: 10px; /* Reduced gap for a compact look */
}

.icon-circle {
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #f1f1f1; /* Customize circle background color */
}

.icon-circle i {
    font-size: 25px; /* Adjust icon size */
    color: #28a745; /* Success icon color */
}

.error .icon-circle i {
    color: #dc3545; /* Error icon color */
}

/* Message text container */
.message-text {
    display: flex;
    flex-direction: column; /* Stack h3 and p vertically */
    justify-content: flex-start;
}

.message-text h3 {
    font-size: 16px;
    margin: 0;
}

.message-text p {
    font-size: 14px;
    margin: 5px 0 0 0; /* Align text properly under h3 with no indent */
}

/* Circle container for the icon */
.icon-container {
    width: 30px; /* Smaller icon container */
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #f1f1f1; /* Customize circle background color */
}

/* Additional container for message content */
#message-box {
    display: none;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    box-sizing: border-box; /* Ensure padding does not affect overall width */
}

#message-box.success {
    background-color: #d4edda;
    color: #155724;
}

#message-box.error {
    background-color: #f8d7da;
    color: #721c24;
}
  </style>
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

        <!-- Main Content (Admin Dashboard) -->
        <div class="main-content">
            <!-- Admin Dashboard Content -->
            <div id="dashboardContent" class="content-section">
                <h1>Welcome to the Admin Dashboard</h1>

                <!-- Admin Profile Dropdown -->
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
                <h2>Reservation List</h2>
            </div>

            <div id="message-box" class="message-box">
                <div class="message-container">
                    <div class="icon-circle" id="icon-circle"><i class='bx bx-check-circle'></i></div>
                    <div class="message-text">
                        <h3 id="message-title"></h3>
                        <p id="message-text"></p>
                    </div>
                    <div class="close-icon" onclick="closeMessageBox()">×</div>
                </div>
            </div>

            <div class="orders-table-container">
    <table class="orders-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Reservation Date</th>
                <th>Reservation Time</th>
                <th>Number of Persons</th>
                <th>Note</th>
                <th>Action</th> <!-- New Action Column -->
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                        <td><?php echo htmlspecialchars($row['reservation_date']); ?></td>
                        <td><?php echo htmlspecialchars($row['reservation_time']); ?></td>
                        <td><?php echo htmlspecialchars($row['persons']); ?></td>
                        <td><?php echo htmlspecialchars($row['note'] ?? ''); ?></td> <!-- Fixed Note Field -->

                        <!-- New Action Column with Confirm and Delete buttons -->
                        <td>
                            <button id="confirm-btn" class="confirm-btn">Confirm</button>
                            <button id="delete-btn" class="delete-btn">Delete</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9">No reservations found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
// Close the database connection
$conn->close();
?>


<script>
        document.addEventListener("DOMContentLoaded", function() {
    var dropdownButtons = document.querySelectorAll(".dropdown-btn");
  
    dropdownButtons.forEach(function(btn) {
      btn.addEventListener("click", function() {
        // Toggle dropdown list visibility
        var dropdown = btn.nextElementSibling;
        dropdown.classList.toggle("show");
  
        // Toggle the active class for the button to rotate the icon
        btn.classList.toggle("active");
      });
    });
  });

  // Toggle dropdown visibility
  document.querySelector('.profile-btn').addEventListener('click', function () {
    document.querySelector('.dropdown-content').classList.toggle('show');
  });

  // Logout functionality
  document.getElementById('logout').addEventListener('click', function () {
    // Redirect to login.php
    window.location.href = 'login.php';
  });

  document.getElementById('confirm-btn').onclick = function() {
      displayMessage('Reservation Confirmed!', 'Reservation has been confirmed.', 'success');
    }

    document.getElementById('delete-btn').onclick = function() {
      displayMessage('Reservation Deleted!', 'Reservation has been deleted.', 'error');
    }

    function displayMessage(title, text, type) {
      const messageBox = document.getElementById('message-box');
      const messageTitle = document.getElementById('message-title');
      const messageText = document.getElementById('message-text');
      const iconCircle = document.getElementById('icon-circle');

      messageTitle.innerText = title;
      messageText.innerText = text;
      messageBox.className = `message-box ${type}`;
      messageBox.style.display = 'block';
      messageBox.classList.add('move-in');

      // Change icon color based on message type
      iconCircle.style.color = (type === 'success') ? '#28a745' : '#dc3545'; // Green for success, red for error

      // Auto-hide after 5 seconds
      setTimeout(function() {
        messageBox.classList.add('move-out');
        setTimeout(function() {
          messageBox.style.display = 'none';
          messageBox.classList.remove('move-out');
        }, 1000);
      }, 5000);
    }

    function closeMessageBox() {
      const messageBox = document.getElementById('message-box');
      messageBox.style.display = 'none';
    }
  </script>
</body>
</html>