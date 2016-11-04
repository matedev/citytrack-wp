

$(document).ready(function() {

    $('#block2 .col-md-6').matchHeight();
    $('#block2 .col-sm-12').matchHeight();
    $('#block3 .img-container').matchHeight();
    $('#partner-block .img-container').matchHeight();

    $('.users-description').truncate({
        'maxLines': 5,
        'truncateString': '&nbsp;&#8230;',
        'showText': 'Read More', 'hideText': "Read Less", 'animate':true
    });

    /*$('.navbar-nav li a').on('click',function(e){
        $(this).parent().parent().find('.active').removeClass('active');
        $(this).parent().addClass('active');
    })*/

});

    $(document).on("click", ".btn-attend", function () {
        var mTitle = $(this).data('title');
        var mDesc = $(this).data('desc');
        var mDate = $(this).data('date');
        $(".modal-header h1").text("Attend to the " + mTitle);
        $("#event-desc").text(mDesc);
    });

