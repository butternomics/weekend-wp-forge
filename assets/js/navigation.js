/**
 * Navigation JavaScript for 404 Day Weekend Theme
 * Handles mobile menu toggle
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const mobileNavigation = document.getElementById('mobile-navigation');
        const menuIcon = document.getElementById('menu-icon');

        if (!mobileMenuToggle || !mobileNavigation) {
            return;
        }

        // Toggle mobile menu
        mobileMenuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            // Toggle aria-expanded
            this.setAttribute('aria-expanded', !isExpanded);

            // Toggle visibility of mobile menu
            if (isExpanded) {
                mobileNavigation.classList.add('hidden');
                if (menuIcon) {
                    menuIcon.textContent = '☰';
                }
            } else {
                mobileNavigation.classList.remove('hidden');
                if (menuIcon) {
                    menuIcon.textContent = '✕';
                }
            }
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileNavigation.querySelectorAll('a');
        mobileLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                mobileNavigation.classList.add('hidden');
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
                if (menuIcon) {
                    menuIcon.textContent = '☰';
                }
            });
        });

        // Close mobile menu when window is resized to desktop size
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth >= 768) {
                    mobileNavigation.classList.add('hidden');
                    mobileMenuToggle.setAttribute('aria-expanded', 'false');
                    if (menuIcon) {
                        menuIcon.textContent = '☰';
                    }
                }
            }, 250);
        });
    });
})();
