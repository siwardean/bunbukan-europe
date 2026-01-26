/**
 * Bunbukan Europe Locations Map
 * Interactive map showing affiliated clubs across Europe
 */

(function() {
	'use strict';

	// Wait for DOM and Leaflet to be ready
	document.addEventListener('DOMContentLoaded', function() {
		const mapContainer = document.getElementById('bb-locations-map');
		if (!mapContainer) {
			return;
		}

		// Check if Leaflet is loaded
		if (typeof L === 'undefined') {
			console.error('Leaflet library not loaded');
			return;
		}

		// Initialize map centered on Western and Central Europe - fixed view
		// Center adjusted to show all of Spain while keeping Western/Central Europe visible
		const map = L.map('bb-locations-map', {
			center: [45.5, 8.0], // Center moved even further south to show all of Spain
			zoom: 5, // Same zoom level
			scrollWheelZoom: false, // Disable zoom with scroll
			zoomControl: false, // Disable zoom controls
			dragging: false, // Disable pan/drag
			touchZoom: false, // Disable touch zoom
			doubleClickZoom: false, // Disable double-click zoom
			boxZoom: false, // Disable box zoom
			keyboard: false, // Disable keyboard navigation
			maxBounds: [
				[35, -12], // Southwest corner (south of Spain, west of Portugal)
				[65, 30]   // Northeast corner (north of Scandinavia, east of Central Europe)
			],
			maxBoundsViscosity: 1.0, // Strict bounds
			minZoom: 5, // Lock minimum zoom
			maxZoom: 5, // Lock maximum zoom
		});

		// Add CartoDB Dark Matter tile layer without labels (darker theme, no country names)
		L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_nolabels/{z}/{x}/{y}{r}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
			subdomains: 'abcd',
			maxZoom: 5, // Limit max zoom
			minZoom: 5, // Lock zoom at 5
		}).addTo(map);

		// Define club locations
		const clubs = [
			{
				name: 'Bunbukan Brussels',
				lat: 50.8503,
				lng: 4.3517,
				url: 'https://bunbukan.eu',
				country: 'Belgium'
			},
			{
				name: 'Club Deportivo Kabuki',
				lat: 40.4168, // Madrid, Spain (adjust if needed)
				lng: -3.7038,
				url: 'https://kabuki.es',
				country: 'Spain'
			}
		];

		// Create custom icon for markers (red pin style like the example)
		const createCustomIcon = function(clubName) {
			return L.divIcon({
				className: 'bb-locations__marker',
				html: `
					<div class="bb-locations__marker-wrapper">
						<div class="bb-locations__marker-circle">
							<div class="bb-locations__marker-dot"></div>
						</div>
						<div class="bb-locations__marker-pin"></div>
						<div class="bb-locations__marker-label">${clubName}</div>
					</div>
				`,
				iconSize: [120, 60],
				iconAnchor: [60, 50],
				popupAnchor: [0, -50]
			});
		};

		// Add markers for each club
		clubs.forEach(function(club, index) {
			
			const marker = L.marker([club.lat, club.lng], {
				icon: createCustomIcon(club.name)
			}).addTo(map);

			// Create popup content
			const popupContent = `
				<div class="bb-locations__popup">
					<h3 class="bb-locations__popup-title">${club.name}</h3>
					<p class="bb-locations__popup-country">${club.country}</p>
					<a href="${club.url}" target="_blank" rel="noopener noreferrer" class="bb-locations__popup-link">
						Visit Website →
					</a>
				</div>
			`;

			// Bind popup
			marker.bindPopup(popupContent, {
				className: 'bb-locations__popup-wrapper',
				closeButton: true,
				maxWidth: 250
			});

			// Open popup on click
			marker.on('click', function() {
				// Open link in new tab
				window.open(club.url, '_blank', 'noopener,noreferrer');
			});
		});

		// Keep map fixed on Europe - no auto-fit to markers
		// Map is already centered and zoomed to show Europe
	});
})();
