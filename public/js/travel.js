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
