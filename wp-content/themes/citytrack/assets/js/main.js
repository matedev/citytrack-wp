
(function($){
    $(document).ready(function() {

        $('#block2 .col-md-6').matchHeight();
        $('#block2 .col-sm-12').matchHeight();
        $('#block3 .img-container').matchHeight();
        $('#partner-block .img-container').matchHeight();
        $('#partner-list .img-container').matchHeight();

        /*$('.users-description').truncate({
            'maxLines': 5,
            'truncateString': '&nbsp;&#8230;',
            'showText': 'Read More', 'hideText': "Read Less", 'animate':true
        });*/

        $(' #blog #posts .apost .img-container img').addClass("img-responsive");

        $('#partner-list .img-container').slice(-4).addClass("col-md-push-2 col-xs-6");
        $('#partner-list .img-container').slice(-2).addClass("col-sm-push-3");

        $('#partner-block .img-container').slice(-2).addClass("col-md-push-3");
        $('#partner-block .img-container').slice(-1).addClass("col-sm-push-4");
    });

    $(document).on("click", ".btn-attend", function () {
        var mTitle = $(this).data('title');
        var mDesc = $(this).data('desc');
        var mDate = $(this).data('date');
        $(".modal-header h1").text("Attend to the " + mTitle);
        $("#event-desc").text(mDesc);
    });

})(jQuery);