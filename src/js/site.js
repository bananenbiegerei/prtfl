import * as TW from './tailwindhelpers';

import Alpine from 'alpinejs';
// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
import ScrollMirror from 'scrollmirror';
// import Swup from 'swup';
// const swup = new Swup();

/** Mirror all divs that match the class `.scroller` */
if (window.location.pathname === '/') {
	new ScrollMirror(document.querySelectorAll('.scroller'));
}

window.Alpine = Alpine;
Alpine.start();

var swiper = new Swiper('.desktop-gallery', {
	slidesPerView: 1,
	spaceBetween: 0,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});
