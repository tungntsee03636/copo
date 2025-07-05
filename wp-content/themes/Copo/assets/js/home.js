jQuery(document).ready(function ($) {
    // SHORT MOVIE MODAL
    $(".short-movie-item").click(function() {
        var movieID = $(this).closest(".short-movie-item").attr("data-id");
        $("#short-movie-popup-" + movieID).fadeIn();
    });

    $(".movie-item").click(function() {
        var movieID1 = $(this).closest(".movie-item").attr("data-id");
        $("#movie-popup-" + movieID1).fadeIn();
    });


    $(".close-btn").click(function() {
        var $popup = $(this).closest('.popup');
        var $iframe = $popup.find('iframe');
        var src = $iframe.attr('src');

        $popup.fadeOut();
        $iframe.attr('src', '');
        $iframe.attr('src', src);
        $('body').removeClass('no-scroll');
    });

    $(window).click(function(event) {
        if ($(event.target).hasClass("popup")) {
            var $popup = $(event.target);
            $popup.fadeOut();

            var $iframe = $popup.find('iframe');
            var src = $iframe.attr('src');

            $iframe.attr('src', '');
            $iframe.attr('src', src);
            $('body').removeClass('no-scroll');
        }
    });

    if ($("#homepage").length) {
        $(".banner-bottom").remove();
    }

    const swiper = new Swiper(".short-movie-list", {
        centeredSlides: true,
        simulateTouch:true,
        slidesPerView: 1.6,
        grabCursor: true,
        freeMode: false,
        spaceBetween: 35.8,
        loop: true,
        mousewheel: false,
        keyboard: {
            enabled: true
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        pagination: {
            el: ".short-movie-list .swiper-pagination",
            dynamicBullets: false,
            clickable: true
        },

        breakpoints: {
            767: {
                slidesPerView: 4.29,
                spaceBetween: 55.6,
            },
        },

    });


    const swiper01 = new Swiper(".calling-list", {
        centeredSlides: true,
        simulateTouch:true,
        slidesPerView: 1.141,
        grabCursor: true,
        freeMode: false,
        spaceBetween: 14,
        loop: true,
        mousewheel: false,
        keyboard: {
            enabled: true
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        breakpoints: {
            767: {
                slidesPerView: 2.45,
                spaceBetween: 39,
            },
        },

    });

    const swiper02 = new Swiper(".company-movie-list", {
        centeredSlides: true,
        simulateTouch:true,
        slidesPerView: 3.5,
        // slidesPerView: "auto",
        grabCursor: true,
        freeMode: false,
        spaceBetween: 24,
        loop: true,
        mousewheel: false,
        keyboard: {
            enabled: true
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        pagination: {
            el: ".company-movie-list .paginationn",
            dynamicBullets: false,
            clickable: true
        },

    });

    const interview = new Swiper(".interviews-list-inner", {
        centeredSlides: false,
        simulateTouch:true,
        slidesPerView: 4.05,
        // slidesPerView: "auto",
        grabCursor: true,
        freeMode: false,
        spaceBetween: 30,
        loop: true,
        mousewheel: false,
        keyboard: {
            enabled: true
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        pagination: {
            el: ".interviews-list-inner .paginationn",
            dynamicBullets: false,
            clickable: true
        },

    });


    const copo_labo = new Swiper(".hint-list-inner", {
        centeredSlides: false,
        simulateTouch:true,
        slidesPerView: 4.05,
        // slidesPerView: "auto",
        grabCursor: true,
        freeMode: false,
        spaceBetween: 30,
        loop: true,
        mousewheel: false,
        keyboard: {
            enabled: true
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        pagination: {
            el: ".hint-list-inner .paginationn",
            dynamicBullets: false,
            clickable: true
        },

    });

});