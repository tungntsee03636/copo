jQuery(document).ready(function ($) {
    $(".short-movie-item").each(function () {
        let videoSrc = $(this).attr("data-src");
        let previewHtml = "";
        let overlay = `<div class="overlay"></div>`;

        if (videoSrc.includes("youtube.com") || videoSrc.includes("youtu.be")) {
            let urlParams = new URL(videoSrc);
            let videoId = urlParams.searchParams.get("v") || urlParams.pathname.split("/").pop();
            previewHtml = `
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1&loop=1&playlist=${videoId}" frameborder="0" allowfullscreen></iframe>
                ${overlay}
            `;
        }
        else  {
            var scriptContent = '<script type="text/javascript">var Eviry=Eviry||{};Eviry.Player||(Eviry.Player={});Eviry.Player.embedkey="' + videoSrc + '";</script>';
            previewHtml = `
              
                <script type="text/javascript" src="https://d1euehvbqdc1n9.cloudfront.net/001/eviry/js/eviry.player.min.js"></script>
                ${overlay}
            `;
        }


        $(this).find(".preview-video").html(previewHtml);
    });

    $(".short-movie-item").click(function () {
        let videoSrc = $(this).attr("data-src");
        let videoHtml = "";

        if (videoSrc.includes("youtube.com") || videoSrc.includes("youtu.be")) {
            let urlParams = new URL(videoSrc);
            let videoId = urlParams.searchParams.get("v") || urlParams.pathname.split("/").pop();
            videoHtml = `<iframe width="300" height="584" src="https://www.youtube.com/embed/${videoId}?autoplay=1" frameborder="0" allowfullscreen></iframe>`;
        } else if (videoSrc.includes("vilvi.com")) {
            videoHtml = `<video width="300" height="584" controls autoplay><source src="${videoSrc}" type="video/mp4"></video>`;
        }
        // else if (videoSrc.includes("tiktok.com")) {
        //     videoHtml = `<blockquote class="tiktok-embed" cite="${videoSrc}" data-video-id="${videoSrc.split('/').pop()}" style="width: 100%;"><a href="${videoSrc}"></a></blockquote><script async src="https://www.tiktok.com/embed.js"></script>`;
        // }

        $("#popup-video-container").html(videoHtml);
        $("#video-popup").fadeIn();

        $(".popup-close").click(function () {
            $("#video-popup").fadeOut(function () {
                $("#popup-video-container").html("");
            });
        });
    });
});
