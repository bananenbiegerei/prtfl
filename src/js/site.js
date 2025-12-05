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
		el: '.swiper-pagination',
		type: 'progressbar',
	},
	grabCursor: true,
	freeMode: true,
	autoplay: {
		delay: 3000,
		disableOnInteraction: true,
	},
	speed: 4000,
});

var swiper_mobile = new Swiper('.mobile-gallery', {
	slidesPerView: 'auto',
	spaceBetween: 16,
	pagination: {
		el: '.swiper-pagination',
		type: 'progressbar',
	},
	grabCursor: true,
	freeMode: true,
	// autoplay: {
	// 	delay: 1000,
	// 	disableOnInteraction: true,
	// },
	speed: 2000,
});

var swiper_related_projects = new Swiper('.related-projects-swiper', {
	effect: 'cards',
	grabCursor: true,
});

document.addEventListener('DOMContentLoaded', function() {
        const titleElement = document.querySelector('.project-title');
        const containerElement = document.querySelector('.title-container');

        if (titleElement && containerElement) {
            // Get the offsetHeight of the rotated h1 (which is the visual width we want)
            const titleHeight = titleElement.offsetHeight;
            // Set the container width to match
            containerElement.style.width = titleHeight + 'px';
        }
    });

document.addEventListener('DOMContentLoaded', function () {
	document.querySelectorAll('[data-phone]').forEach(function (el) {
		const phoneSpan = el.querySelector('.phone-number');
		if (phoneSpan) {
			phoneSpan.textContent = atob(el.dataset.phone);
		}
	});
});
