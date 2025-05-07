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


// Initially populate the users table
populateUsersTable();

