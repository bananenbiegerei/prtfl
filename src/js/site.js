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

// Opacity Control System
class OpacityController {
    constructor() {
        this.activeElement = null;
        this.init();
    }

    init() {
        console.log('OpacityController initialized');

        // Listen for elements with data-opacity-trigger attribute
        document.addEventListener('mouseenter', (e) => {
            if (!e.target || typeof e.target.closest !== 'function') return;
            const trigger = e.target.closest('[data-opacity-trigger]');
            if (trigger) {
                console.log('Opacity trigger activated:', trigger);
                this.setOpacity(trigger);
            }
        }, true);

        document.addEventListener('mouseleave', (e) => {
            if (!e.target || typeof e.target.closest !== 'function') return;
            const trigger = e.target.closest('[data-opacity-trigger]');
            if (trigger) {
                console.log('Opacity trigger deactivated');
                this.resetOpacity();
            }
        }, true);
    }

    setOpacity(activeElement) {
        this.activeElement = activeElement;
        const opacityValue = activeElement.dataset.opacityValue || '0.3';
        const excludeSelector = activeElement.dataset.opacityExclude || '';
        const targetSelector = activeElement.dataset.opacityTarget || '';
        const targetContainer = activeElement.dataset.opacityContainer || '';
        const highlightSelf = activeElement.dataset.opacityHighlight !== undefined; // New option

        let elements = [];

        // Mode 0: Highlight only self - dim ALL siblings
        if (highlightSelf) {
            console.log('Highlight self mode: dimming all siblings');
            const parentContainer = activeElement.parentElement;
            if (!parentContainer) return;

            const allSiblings = Array.from(parentContainer.children);

            allSiblings.forEach(element => {
                // Only the active element stays bright
                const shouldStayBright = element === activeElement ||
                                        (excludeSelector && element.matches(excludeSelector));

                if (shouldStayBright) {
                    element.style.opacity = '1';
                    element.style.filter = 'none';
                    element.style.transition = 'opacity 0.3s ease, filter 0.3s ease';
                    element.style.pointerEvents = 'auto';
                } else {
                    element.style.opacity = opacityValue;
                    element.style.filter = 'blur(8px)';
                    element.style.transition = 'opacity 0.3s ease, filter 0.3s ease';
                    element.style.pointerEvents = 'none';
                }
            });

            this.affectedElements = allSiblings;
            return; // Exit early
        }
    }

    resetOpacity() {
        if (!this.affectedElements) return;

        this.affectedElements.forEach(element => {
            element.style.opacity = '1';
            element.style.filter = 'none';
            element.style.pointerEvents = 'auto';
        });

        this.activeElement = null;
        this.affectedElements = null;
    }
}

// Initialize the opacity controller when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.opacityController = new OpacityController();
});
