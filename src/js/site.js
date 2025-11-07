import * as TW from './tailwindhelpers';

import Alpine from 'alpinejs';
// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

import { speed } from 'jquery';
// import Swup from 'swup';
// const swup = new Swup();

window.Alpine = Alpine;
Alpine.start();

var swiper_desktop = new Swiper('.desktop-gallery-vertical', {
    direction: 'vertical',
    slidesPerView: 'auto',
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
    grabCursor: true,
    freeMode: true,
    autoplay: {
        delay: 1000,
        disableOnInteraction: true,
    },
    speed: 2000,
});

var swiper_tablet = new Swiper('.tablet-gallery-vertical', {
    direction: 'vertical',
    slidesPerView: 'auto',
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
    grabCursor: true,
    freeMode: true,
    autoplay: {
        delay: 1000,
        disableOnInteraction: true,
    },
    speed: 2000,
});

var swiper_mobile = new Swiper('.mobile-gallery-vertical', {
    direction: 'vertical',
    slidesPerView: 'auto',
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
    grabCursor: true,
    freeMode: true,
    autoplay: {
        delay: 1000,
        disableOnInteraction: true,
    },
    speed: 2000,
});

var swiper_desktop = new Swiper('.desktop-gallery', {
    slidesPerView: 1,
    spaceBetween: 0,
    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
    },
    grabCursor: true,
    freeMode: false,
    autoplay: {
        delay: 1000,
        disableOnInteraction: true,
    },
    speed: 2000,
});

var swiper_tablet = new Swiper('.tablet-gallery', {
    slidesPerView: 1,
    spaceBetween: 0,
    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
    },
    grabCursor: true,
    freeMode: false,
    autoplay: {
        delay: 1000,
        disableOnInteraction: true,
    },
    speed: 2000,
});

var swiper_mobile = new Swiper('.mobile-gallery', {
    slidesPerView: 1,
    spaceBetween: 0,
    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
    },
    grabCursor: true,
    freeMode: false,
    autoplay: {
        delay: 1000,
        disableOnInteraction: true,
    },
    speed: 2000,
});

var swiper_mobile = new Swiper('#mission-statement .swiper', {
    slidesPerView: 1,
    spaceBetween: 60,
    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
    },
    grabCursor: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoHeight: false,
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    speed: 500,
    // effect: "coverflow",
    //   grabCursor: true,
    //   centeredSlides: true,
    //   slidesPerView: "auto",
    //   coverflowEffect: {
    //     rotate: 90,
    //     stretch: 0,
    //     depth: 200,
    //     modifier: 1,
    //     slideShadows: false,
    //   },
    //   loop: false,
});

var swiper_related_projects = new Swiper('.related-projects-swiper', {
    effect: "cards",
    grabCursor: true,
});
