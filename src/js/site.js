import * as TW from './tailwindhelpers';

import Alpine from 'alpinejs';
// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

import { speed } from 'jquery';
// import Swup from 'swup';
// const swup = new Swup();

window.Alpine = Alpine;
Alpine.start();

var swiper_desktop = new Swiper('.desktop-gallery', {
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
	// autoplay: {
	// 	delay: 2000,
	// 	disableOnInteraction: true,
	// },
	speed: 250,
});

var swiper_mobile = new Swiper('.mobile-gallery', {
	slidesPerView: 'auto',
	spaceBetween: 16,
	pagination: {
		el: '.mobile-gallery .swiper-pagination',
		type: 'progressbar',
	},
	// keyboard: {
	// 	enabled: true,
	// 	onlyInViewport: true,
	// },
	grabCursor: true,
	freeMode: false,
	// autoplay: {
	// 	delay: 1000,
	// 	disableOnInteraction: true,
	// },
	navigation: {
		nextEl: '.mobile-gallery .swiper-button-next',
		prevEl: '.mobile-gallery .swiper-button-prev',
	},
	speed: 250,
});

var swiper_related_projects = new Swiper('.related-projects-swiper', {
	effect: 'cards',
	keyboard: {
		enabled: true,
		onlyInViewport: true,
	},
	grabCursor: true,
});

document.addEventListener('DOMContentLoaded', function() {
        // Project title rotation
        const titleElement = document.querySelector('.title');
        const containerElement = document.querySelector('.title-container');

        if (titleElement && containerElement) {
            // Get the height of the container
            const containerHeight = containerElement.getBoundingClientRect().height;
            // Set the title width to match the container height (since it's rotated)
            titleElement.style.width = containerHeight + 'px';
            // Get the width of the container for the transform
            const containerWidth = containerElement.getBoundingClientRect().width;
            // Set the title height to match the container width
            titleElement.style.height = containerWidth + 'px';
            // Rotate and translate on y-axis by negative container width
            titleElement.style.transform = `rotate(90deg) translateY(-${containerWidth}px)`;
        }
});
