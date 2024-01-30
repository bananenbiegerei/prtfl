import * as TW from './tailwindhelpers';

import Alpine from 'alpinejs';
import Swiper, { Navigation, Pagination, Keyboard, Autoplay, EffectFade, Thumbs } from 'swiper';
import ScrollMirror from 'scrollmirror';
/** Mirror all divs that match the class `.scroller` */
if (window.location.pathname === '/') {
	new ScrollMirror(document.querySelectorAll('.scroller'));
}

window.Alpine = Alpine;
Alpine.start();

var swiper = new Swiper('.swiper-container', {
	slidesPerView: 1,
	spaceBetween: 10,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});
