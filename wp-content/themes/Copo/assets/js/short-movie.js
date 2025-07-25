jQuery(document).ready(function ($) {



    $(window).on('load', function() {

        $(".short-movie-item").each(function () {
            let check = $(this).attr("data-enviry");

            if (check === "true") {
                var src = $(this).find(".eviry-baseplayer .eviry-poster").attr("src");
                $(this).find(".thumbnail").attr("src", src);

                let video = $(this).find(".eviry-baseplayer video").get(0);
                $(this).find(".volume-pict").trigger('click');
                $(video).trigger('click');
                $(video).on('ended', function() {
                    this.currentTime = 0;
                    $(video).trigger('click');
                });
            }
        });
    });


    $(".short-movie-item .overlay").click(function() {
        var movieID = $(this).closest(".short-movie-item").attr("data-id");
        $("#movie-popup-" + movieID).fadeIn();
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
