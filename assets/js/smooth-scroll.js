/**
 * Smooth scrolling enhancements
 */
(function() {
	'use strict';

	// Add fade-in animation to elements as they come into view
	const observerOptions = {
		threshold: 0.1,
		rootMargin: '0px 0px -50px 0px'
	};

	const observer = new IntersectionObserver(function(entries) {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('fade-in-visible');
			}
		});
	}, observerOptions);

	// Observe all cards and sections
	document.querySelectorAll('.be-card, .be-section-header').forEach(el => {
		el.classList.add('fade-in');
		observer.observe(el);
	});

	// Add parallax effect to hero (subtle)
	const hero = document.querySelector('.be-hero');
	if (hero) {
		window.addEventListener('scroll', function() {
			const scrolled = window.pageYOffset;
			const heroHeight = hero.offsetHeight;
			
			if (scrolled <= heroHeight) {
				hero.style.backgroundPositionY = scrolled * 0.5 + 'px';
			}
		});
	}

})();

// Add CSS for fade-in animation
const style = document.createElement('style');
style.textContent = `
	.fade-in {
		opacity: 0;
		transform: translateY(30px);
		transition: opacity 0.6s ease, transform 0.6s ease;
	}
	
	.fade-in-visible {
		opacity: 1;
		transform: translateY(0);
	}
`;
document.head.appendChild(style);
