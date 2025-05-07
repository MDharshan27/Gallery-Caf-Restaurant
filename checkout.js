// Functionality to handle payment method switching
document.querySelectorAll('input[name="payment-method"]').forEach((radio) => {
    radio.addEventListener('change', (event) => {
        // Hide all payment fields
        document.querySelectorAll('.payment-fields').forEach((field) => {
            field.style.display = 'none';
        });

        // Show the payment fields related to the selected method
        const selectedField = document.querySelector(`.${event.target.value}-fields`);
        if (selectedField) {
            selectedField.style.display = 'block';
        }
    });
});

// Trigger change event to set the initial state based on default checked radio button
document.querySelector('input[name="payment-method"]:checked').dispatchEvent(new Event('change'));

// Delivery fee in LKR
const deliveryFee = 1000;

// Function to render cart items in the order summary section
function renderCartItems() {
    // Get references to HTML elements
    const cartItemsContainer = document.getElementById('cart-items');
    const itemCount = document.getElementById('item-count');
    const subtotal = document.getElementById('subtotal');
    const total = document.getElementById('total');
    const deliveryFeeElement = document.getElementById('delivery-fee');

    // Fetch cart data from localStorage (assumed to be stored in 'cart')
    let cartData = JSON.parse(localStorage.getItem('cart')) || [];
    let totalAmount = 0;
    let count = 0;

    // Clear existing content in the cart items container
    cartItemsContainer.innerHTML = '';

    // Loop through cart items and display them
    cartData.forEach(item => {
        // Create the structure for each cart item
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');

        // Add item content (image, name, description, price)
        cartItem.innerHTML = `
            <div class="item-image">
                <img src="${item.image}" alt="${item.name}">
                <span class="item-quantity-badge">${item.quantity}</span>
            </div>
            <div class="item-details">
                <h4>${item.name}</h4>
                <p>Rs ${item.price.toFixed(2)}</p>
                <p>Quantity: ${item.quantity}</p>
            </div>
        `;

        // Append the cart item to the container
        cartItemsContainer.appendChild(cartItem);

        // Update totals
        totalAmount += item.price * item.quantity;
        count += item.quantity;
    });

    // Update the item count, subtotal, and total values in the UI
    itemCount.textContent = count;
    subtotal.textContent = `Rs ${totalAmount.toFixed(2)}`;
    const totalWithDelivery = (totalAmount + deliveryFee).toFixed(2);
    total.textContent = `Rs ${totalWithDelivery}`;
    deliveryFeeElement.textContent = `LKR ${deliveryFee.toFixed(2)}`;
}

// On page load, render the cart items
document.addEventListener('DOMContentLoaded', renderCartItems);


// Update button text based on selected payment method
document.querySelectorAll('input[name="payment-method"]').forEach(input => {
    input.addEventListener('change', function() {
        const button = document.querySelector('button[type="submit"]');
        if (this.value === 'credit-card') {
            button.textContent = 'Pay Now';
        } else {
            button.textContent = 'Complete Now';
        }
    });
});

// Check if form is submitting
document.getElementById('checkout-form').addEventListener('submit', function(e) {
    console.log('Form is submitting');
});


  