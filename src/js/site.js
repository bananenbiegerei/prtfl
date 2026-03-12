import * as TW from './tailwindhelpers';

import Alpine from 'alpinejs';
// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

import Swup from 'swup';
import SwupFadeTheme from '@swup/fade-theme';

window.Alpine = Alpine;

// Register Alpine components before starting
document.addEventListener('alpine:init', () => {
	// Projects page component - reads data fresh on each init()
	Alpine.data('projectsData', () => ({
		sortOrder: 'desc',
		selectedSector: '',
		showTitle: false,
		sectors: [],
		projects: [],
		init() {
			// Read data fresh when component initializes
			const data = window.projectsPageData || { sectors: [], projects: [] };
			this.sectors = data.sectors;
			this.projects = data.projects;

			window.addEventListener('scroll', () => {
				this.showTitle = window.scrollY > 10;
			});
		},
		get selectedLabel() {
			if (!this.selectedSector) return 'All Sectors';
			const found = this.sectors.find(s => s.id == this.selectedSector);
			return found ? found.name : 'All Sectors';
		},
		get sortLabel() {
			return this.sortOrder === 'desc' ? 'Newest First' : 'Oldest First';
		},
		get filteredAndSortedProjects() {
			let filtered = this.projects;
			if (this.selectedSector && this.selectedSector !== '') {
				filtered = this.projects.filter(project =>
					project.sectors.includes(parseInt(this.selectedSector))
				);
			}
			return [...filtered].sort((a, b) => {
				if (this.sortOrder === 'desc') {
					return b.timestamp - a.timestamp;
				}
				return a.timestamp - b.timestamp;
			});
		}
	}));

	// Dropdown component
	Alpine.data('dropdown', () => ({
		open: false,
		toggle() {
			if (this.open) return this.close();
			this.$refs.button.focus();
			this.open = true;
		},
		close(focusAfter) {
			if (!this.open) return;
			this.open = false;
			focusAfter && focusAfter.focus();
		}
	}));
});

Alpine.start();

// Initialize Swup with fade transition
const swup = new Swup({
	containers: ['#swup'],
	plugins: [new SwupFadeTheme()]
});

// Function to initialize Swipers
function initSwipers() {
	if (document.querySelector('.desktop-gallery')) {
		new Swiper('.desktop-gallery', {
			slidesPerView: 'auto',
			spaceBetween: 16,
			pagination: {
				el: '.desktop-gallery .swiper-pagination',
				type: 'progressbar',
			},
			navigation: {
				nextEl: '.desktop-gallery .swiper-button-next',
				prevEl: '.desktop-gallery .swiper-button-prev',
			},
			keyboard: {
				enabled: true,
				onlyInViewport: true,
			},
			grabCursor: true,
			freeMode: false,
			autoplay: {
				delay: 2000,
				disableOnInteraction: true,
			},
			speed: 2000,
		});
	}

	if (document.querySelector('.mobile-gallery')) {
		new Swiper('.mobile-gallery', {
			slidesPerView: 'auto',
			spaceBetween: 16,
			pagination: {
				el: '.mobile-gallery .swiper-pagination',
				type: 'progressbar',
			},
			grabCursor: true,
			freeMode: false,
			autoplay: {
				delay: 3000,
				disableOnInteraction: true,
			},
			navigation: {
				nextEl: '.mobile-gallery .swiper-button-next',
				prevEl: '.mobile-gallery .swiper-button-prev',
			},
			speed: 2000,
		});
	}

	if (document.querySelector('.featured-projects-swiper')) {
		new Swiper('.featured-projects-swiper', {
			slidesPerView: 1.2,
			spaceBetween: 16,
			freeMode: true,
			grabCursor: true,
			autoHeight: true
		});
	}
}

// Function to initialize project title rotation
function initTitleRotation() {
	// Use requestAnimationFrame to ensure layout is calculated
	requestAnimationFrame(() => {
		const titleElement = document.querySelector('.title');
		const containerElement = document.querySelector('.title-container');

		if (titleElement && containerElement) {
			const containerHeight = containerElement.getBoundingClientRect().height;
			const containerWidth = containerElement.getBoundingClientRect().width;

			titleElement.style.width = containerHeight + 'px';
			titleElement.style.height = containerWidth + 'px';
			titleElement.style.transform = `rotate(90deg) translateY(-${containerWidth}px)`;
		}
	});
}

// Initialize on first page load
document.addEventListener('DOMContentLoaded', function() {
	initSwipers();
	initTitleRotation();
});
