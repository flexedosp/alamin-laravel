var swiper;
var swiper2;
var swiper3;
var autoSlide2;
var autoSlide3;

/* ==============================
   AUTO SLIDE swiper2
================================ */
function startAutoSlide2() {
    clearInterval(autoSlide2);

    // ❌ JIKA SLIDE <= 1 → JANGAN AUTOSLIDE
    if (!swiper2 || swiper2.slides.length <= 1) return;

    autoSlide2 = setInterval(function () {
        if (swiper2.isEnd) {
            swiper2.slideTo(0, swiper2.params.speed);
        } else {
            swiper2.slideNext();
        }
    }, 6000);
}

/* ==============================
   AUTO SLIDE swiper3
================================ */
function startAutoSlide3() {
    clearInterval(autoSlide3);

    // ❌ JIKA SLIDE <= 1 → JANGAN AUTOSLIDE
    if (!swiper3 || swiper3.slides.length <= 1) return;

    autoSlide3 = setInterval(function () {
        if (swiper3.isEnd) {
            swiper3.slideTo(0, swiper3.params.speed);
        } else {
            swiper3.slideNext();
        }
    }, 6000);
}

/* ==============================
   DOCUMENT READY
================================ */
$(document).ready(function () {
    /* ---------- Swiper HERO ---------- */
    swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    /* ---------- Swiper CONTENT 1 ---------- */
    swiper2 = new Swiper(".mySwiper2", {
        slidesPerView: "auto",
        loop: false,
        spaceBetween: 50,
        speed: 800,
        pagination: {
            el: ".swiper-pagination-content",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        on: {
            init: function () {
                startAutoSlide2();
            },
        },
    });

    /* ---------- Swiper CONTENT 2 ---------- */
    swiper3 = new Swiper(".mySwiper3", {
        slidesPerView: "auto",
        loop: false,
        spaceBetween: 50,
        speed: 800,
        pagination: {
            el: ".swiper-pagination-content",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        on: {
            init: function () {
                startAutoSlide3();
            },
        },
    });

    /* ---------- PAUSE SAAT HOVER ---------- */
    $(".mySwiper2").hover(
        function () {
            clearInterval(autoSlide2);
        },
        function () {
            startAutoSlide2();
        }
    );

    $(".mySwiper3").hover(
        function () {
            clearInterval(autoSlide3);
        },
        function () {
            startAutoSlide3();
        }
    );
});
