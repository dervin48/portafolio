function initResponsiveMenu() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

// Llama automáticamente a la función al cargar el script
document.addEventListener('DOMContentLoaded', initResponsiveMenu);
