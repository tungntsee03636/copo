jQuery(document).ready(function ($) {



    $(window).on('load', function() {
        console.log("load xong r");
        $(".short-movie-item").each(function () {
            let check = $(this).attr("data-enviry");

            if (check === "true") {
                var src = $(this).find(".eviry-baseplayer .eviry-poster").attr("src");
                $(this).find(".thumbnail").attr("src", src);

                let video = $(this).find(".eviry-baseplayer video").get(0);
                console.log(video);
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
        $(this).closest(".popup").fadeOut();
    });

    $(window).click(function(event) {
        if ($(event.target).hasClass("popup")) {
            $(event.target).fadeOut();
        }
    });
});
