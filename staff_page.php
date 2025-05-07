<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="Images/loadlogo.jpg" type="Image/x-icon">
  <title>Gallery Cafe Restaurant - Staff Dashboard</title>
  <link rel="stylesheet" href="staff_page.css">
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
              <a href="staff_page.php"><i class='bx bxs-home'></i> Home</a>
            </li>
            <li class="menu-item dropdown">
              <a href="javascript:void(0);" class="dropdown-btn"><i class='bx bxs-user'></i></i> Reservation
                <i class="fas fa-chevron-down dropdown-icon"></i>
              </a>
              <ul class="dropdown-list">
                <li><a href="staff-reservation.php">Reservation</a></li>
                <li><a href="staff-tablebook.php">Table Bookings</a></li>
              </ul>
            </li>
            <li class="menu-item dropdown">
              <a href="javascript:void(0);" class="dropdown-btn"><i class='bx bxs-cart-alt'></i></i> Orders
                <i class="fas fa-chevron-down dropdown-icon"></i>
              </a>
              <ul class="dropdown-list">
                <li><a href="staff-order.php">All Orders</a></li>
              </ul>
            </li>
          </ul>
        </nav>
    
        <!-- Main Content (Admin Dashboard) -->
        <div class="main-content">
          <!-- Admin Dashboard Content -->
          <div id="dashboardContent" class="content-section">
              <h1>Welcome to the Staff Dashboard</h1>

              <!-- Admin Profile Dropdown -->
              <div class="admin-profile">
                <button class="profile-btn">
                  Staff <i class="arrow-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#"><i class='bx bx-cool'></i>Profile</a>
                  <a href="login.php" id="logout"><i class='bx bx-exit'></i>Logout</a>
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
    <script src="staff_page.js"></script>
  </body>
</html>
