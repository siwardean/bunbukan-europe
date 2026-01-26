/**
 * Navigation functionality
 */
(function() {
	'use strict';

	// Mobile menu toggle
	const menuToggle = document.querySelector('.menu-toggle');
	const navigation = document.querySelector('.main-navigation');

	if (menuToggle && navigation) {
		menuToggle.addEventListener('click', function() {
			navigation.classList.toggle('menu-open');
			this.setAttribute('aria-expanded', navigation.classList.contains('menu-open'));
		});
	}

	// Smooth scroll for anchor links
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			const href = this.getAttribute('href');
			
			// Don't prevent default for # links or hash links with no target
			if (href === '#' || href === '') {
				return;
			}

			const target = document.querySelector(href);
			if (target) {
				e.preventDefault();
				target.scrollIntoView({
					behavior: 'smooth',
					block: 'start'
				});
			}
		});
	});

	// Add active class to current menu item on scroll
	const sections = document.querySelectorAll('section[id]');
	const navLinks = document.querySelectorAll('.main-navigation a[href^="#"]');

	function highlightNavigation() {
		let scrollY = window.pageYOffset;

		sections.forEach(section => {
			const sectionHeight = section.offsetHeight;
			const sectionTop = section.offsetTop - 100;
			const sectionId = section.getAttribute('id');
			
			if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
				navLinks.forEach(link => {
					link.classList.remove('active');
					if (link.getAttribute('href') === '#' + sectionId) {
						link.classList.add('active');
					}
				});
			}
		});
	}

	window.addEventListener('scroll', highlightNavigation);

})();
