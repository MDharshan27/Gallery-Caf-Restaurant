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
  
// Get navigation elements
var allUsersTab = document.getElementById('allUsers');
var dashboardTab = document.getElementById('dashboard');
var addUserTab = document.getElementById('addUser');

// Get content sections
var dashboardContent = document.getElementById('dashboardContent');
var allUsersContent = document.getElementById('allUsersContent');
var addUserContent = document.getElementById('addUserContent');

// Handle tab navigation
allUsersTab.onclick = function() {
  showContent('allUsers');
};

dashboardTab.onclick = function() {
  showContent('dashboard');
};

addUserTab.onclick = function() {
  showContent('addUser');
};

// Function to show the correct content based on the clicked tab
function showContent(tab) {
  dashboardContent.style.display = 'none';
  allUsersContent.style.display = 'none';
  addUserContent.style.display = 'none';

  if (tab === 'dashboard') {
    dashboardContent.style.display = 'block';
  } else if (tab === 'allUsers') {
    allUsersContent.style.display = 'block';
  } else if (tab === 'addUser') {
    addUserContent.style.display = 'block';
  }
}

