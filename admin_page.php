<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
  <title>Gallery Cafe Restaurant - Admin Dashboard</title>
  <link rel="stylesheet" href="admin_page.css">
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

          <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Daily Views</div>
                </div>
            </div>
  
            <div class="card">
                <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Sales</div>
                </div>
            </div>
  
            <div class="card">
                <div>
                    <div class="numbers">284</div>
                    <div class="cardName">Comments</div>
                </div>
            </div>
  
            <div class="card">
                <div>
                    <div class="numbers">5</div>
                    <div class="cardName">New Orders</div>
                </div>
            </div>
        </div>
    </div>

    <script>
      // Toggle dropdown visibility
      document.querySelector('.profile-btn').addEventListener('click', function () {
        document.querySelector('.dropdown-content').classList.toggle('show');
      });

      // Logout functionality
      document.getElementById('logout').addEventListener('click', function () {
        // Redirect to login.php
        window.location.href = 'login.php';
      });
    </script>
    <script src="admin_page.js"></script>
  </body>
</html>
