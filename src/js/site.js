import * as TW from './tailwindhelpers';

import Alpine from 'alpinejs';
// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

import ScrollMirror from 'scrollmirror';
import { speed } from 'jquery';
// import Swup from 'swup';
// const swup = new Swup();

/** Mirror all divs that match the class `.scroller` */
if (window.location.pathname === '/') {
	new ScrollMirror(document.querySelectorAll('.scroller'));
}

window.Alpine = Alpine;
Alpine.start();

var swiper_desktop = new Swiper('.desktop-gallery', {
    direction: 'vertical',
    slidesPerView: 'auto',
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
    grabCursor: true,
    freeMode: true,
    // autoplay: {
    //     delay: 1000,
    //     disableOnInteraction: true,
    // },
    speed: 2000,
});

var swiper_tablet = new Swiper('.tablet-gallery', {
    direction: 'vertical',
    slidesPerView: 'auto',
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
    grabCursor: true,
    freeMode: true,
    // autoplay: {
    //     delay: 1000,
    //     disableOnInteraction: true,
    // },
    speed: 2000,
});

var swiper_mobile = new Swiper('.mobile-gallery', {
    direction: 'vertical',
    slidesPerView: 'auto',
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
    grabCursor: true,
    freeMode: true,
    // autoplay: {
    //     delay: 1000,
    //     disableOnInteraction: true,
    // },
    speed: 2000,
});

function setContainerHeight() {
    const container = document.getElementById('pile-container');
    // Check if container exists
    if (container) {
        const pileCard = container.getElementsByClassName('pile-card');
        let maxHeight = 0;

        for (let i = 0; i < pileCard.length; i++) {
            const imgHeight = pileCard[i].offsetHeight;
            if (imgHeight > maxHeight) {
                maxHeight = imgHeight;
            }
        }

        container.style.minHeight = maxHeight + 'px';
    } else {
        console.error('Container not found');
    }
}

// Ensure the DOM is fully loaded before running the function
document.addEventListener('DOMContentLoaded', function() {
    setContainerHeight();
    window.onresize = setContainerHeight;
});