document.addEventListener('DOMContentLoaded', () => {
    const productMenuButton = document.getElementById('collapseButton');
    const productMenu = document.getElementById('productMenu');
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMobileMenuButton = document.getElementById('closeMobileMenuButton');
    const mobileProductMenuButton = document.querySelector('[aria-controls="disclosure-1"]');
    const mobileProductMenu = document.getElementById('disclosure-1');

    // Toggle the product menu dropdown on desktop
    productMenuButton.addEventListener('click', () => {
        const isExpanded = productMenuButton.getAttribute('aria-expanded') === 'true';
        productMenuButton.setAttribute('aria-expanded', !isExpanded);
        productMenu.classList.toggle('hidden');
    });

    // Toggle the mobile menu
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    // Close the mobile menu
    closeMobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });

    // Toggle the mobile product submenu
    mobileProductMenuButton.addEventListener('click', () => {
        const isExpanded = mobileProductMenuButton.getAttribute('aria-expanded') === 'true';
        mobileProductMenuButton.setAttribute('aria-expanded', !isExpanded);
        mobileProductMenu.classList.toggle('hidden');
    });
});