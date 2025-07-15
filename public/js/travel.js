// Hamburger menu functionality
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger-menu'); // Correct class name
    const navMenu = document.querySelector('.nav-links'); // Correct class name
    const navLinks = document.querySelectorAll('.nav-links a'); // Correct class name

    // Check if elements exist before adding event listeners
    if (hamburger && navMenu && navLinks.length > 0) {
        // Toggle menu visibility
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when a link is clicked
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    } else {
        console.error('Hamburger menu or navigation elements not found in the DOM.');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const decreaseBtn = document.getElementById('decreasePassenger');
    const increaseBtn = document.getElementById('increasePassenger');
    const input = document.getElementById('passengerNumber');

    if (decreaseBtn && increaseBtn && input) {
        decreaseBtn.addEventListener('click', function() {
            if (parseInt(input.value) > 1) input.value = parseInt(input.value) - 1;
        });
        increaseBtn.addEventListener('click', function() {
            if (parseInt(input.value) < 10) input.value = parseInt(input.value) + 1;
        });
    } else {
        console.error('Passenger controls or input not found in the DOM.');
    }
});
