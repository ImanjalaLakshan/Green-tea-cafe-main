
"use strict";

const leftArrow = document.querySelector('.left-arrow'),
      rightArrow = document.querySelector('.right-arrow'),
      slider = document.querySelector('.slider');

/** Scroll right **/
function scrollRight() {
    if (slider.scrollWidth - slider.clientWidth === slider.scrollLeft) {
        slider.scrollTo({
            left: 0,
            behavior: "smooth"
        });
    } else {
        slider.scrollBy({
            left: window.innerWidth,
            behavior: "smooth"
        });
    }
}

/** Scroll left **/
function scrollLeft() {
    if (slider.scrollLeft === 0) {
        slider.scrollTo({
            left: slider.scrollWidth,
            behavior: "smooth"
        });
    } else {
        slider.scrollBy({
            left: -window.innerWidth,
            behavior: "smooth"
        });
    }
}

let timerId = setInterval(scrollRight, 7000);

/********/
function resetTimer() {
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 7000);
}

/********/
slider.addEventListener('click', function(ev) {
    if (ev.target === leftArrow) {
        scrollLeft();
        resetTimer();
    }
});

slider.addEventListener('click', function(ev) {
    if (ev.target === rightArrow) {
        scrollRight();
        resetTimer();
    }
})
