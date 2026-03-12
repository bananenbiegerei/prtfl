import * as TW from './tailwindhelpers';
import Alpine from 'alpinejs';
import Swiper from 'swiper/bundle';

// Make Alpine available globally for inline component definitions
window.Alpine = Alpine;

// Function to init Swipers
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

// Function to init title rotation
function initTitleRotation() {
	const titleElement = document.querySelector('.title');
	const containerElement = document.querySelector('.title-container');

	if (titleElement && containerElement) {
		const containerHeight = containerElement.getBoundingClientRect().height;
		const containerWidth = containerElement.getBoundingClientRect().width;

		titleElement.style.width = containerHeight + 'px';
		titleElement.style.height = containerWidth + 'px';
		titleElement.style.transform = `rotate(90deg) translateY(-${containerWidth}px)`;
	}
}

// Init on page load
document.addEventListener('DOMContentLoaded', function () {
	initSwipers();
	initTitleRotation();
});
