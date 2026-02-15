/**
 * Coverflow 3D slider for Weapons section – infinite loop (no visible start/end)
 */
(function () {
	'use strict';

	function initCoverflow() {
		var el = document.getElementById('bb-coverflow');
		if (!el) return;

		var track = el.querySelector('.bb-coverflow__track');
		var cards = el && track ? track.querySelectorAll('.bb-coverflow__card') : [];
		var prevBtn = el.querySelector('.bb-coverflow__nav--prev');
		var nextBtn = el.querySelector('.bb-coverflow__nav--next');

		if (!cards.length) return;

		var total = cards.length;
		var half = total / 2; /* number of unique weapons; we have 2 copies */
		/* Start in the middle of the first set so both sides show cards immediately */
		var centerIndex = Math.floor(half / 2);
		var spreadPx = 135;
		var rotateDeg = 25;
		var translateZ = 65;
		var scaleStep = 0.1;

		function updateCards(noTransition) {
			if (noTransition) {
				el.classList.add('bb-coverflow--no-transition');
			}
			for (var i = 0; i < cards.length; i++) {
				var offset = i - centerIndex;
				var tx = offset * spreadPx;
				var ry = offset * -rotateDeg;
				var tz = Math.abs(offset) * -translateZ;
				var scale = 1 - Math.abs(offset) * scaleStep;
				cards[i].style.transform = 'translateX(' + tx + 'px) rotateY(' + ry + 'deg) translateZ(' + tz + 'px) scale(' + scale + ')';
				cards[i].style.zIndex = 10 - Math.abs(offset);
				cards[i].style.opacity = Math.abs(offset) > 2 ? 0.2 : 1;
			}
			if (noTransition) {
				requestAnimationFrame(function () {
					requestAnimationFrame(function () {
						el.classList.remove('bb-coverflow--no-transition');
					});
				});
			}
		}

		if (prevBtn) {
			prevBtn.addEventListener('click', function () {
				var prevIndex = centerIndex;
				centerIndex = (centerIndex - 1 + total) % total;
				var wrapped = prevIndex === 0 && centerIndex === total - 1;
				updateCards(wrapped);
			});
		}
		if (nextBtn) {
			nextBtn.addEventListener('click', function () {
				var prevIndex = centerIndex;
				centerIndex = (centerIndex + 1) % total;
				var wrapped = prevIndex === total - 1 && centerIndex === 0;
				updateCards(wrapped);
			});
		}

		updateCards(false);
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initCoverflow);
	} else {
		initCoverflow();
	}
})();
