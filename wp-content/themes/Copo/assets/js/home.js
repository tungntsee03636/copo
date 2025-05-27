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
});