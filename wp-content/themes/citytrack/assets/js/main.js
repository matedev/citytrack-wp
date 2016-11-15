
(function($){
    $(document).ready(function() {

        $('#block2 .col-md-6').matchHeight();
        $('#block2 .col-sm-12').matchHeight();
        $('#block3 .img-container').matchHeight();
        $('#partner-block .img-container').matchHeight();
        $('#partner-list .img-container').matchHeight();
        $('#footer .same-height').matchHeight();

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

        $( "#contactform" ).submit(function( event ) {
            event.preventDefault();
            if (validateForm($(this).attr('id'))){
                ct_mailsubmit($('#modal-contact #contactform').serialize());
            }
        });   

    });

    $(document).on("click", ".btn-attend", function () {
        var mTitle = $(this).data('title');
        var mDesc = $(this).data('desc');
        var mDate = $(this).data('date');
        $(".modal-header h1").text("Attend to the " + mTitle);
        $("#event-desc").text(mDesc);
    });

    $( "#modal-contact #contactform" ).submit(function( event ) {
      event.preventDefault();
    });

    function validateForm(id){
        var ok = true;
        $('#' + id + ' .no-empty').each(function(index,element){
            if( !$(this).val() ) {
                  $(this).addClass('warning');
                  ok = false;
            }
        })
        return ok;
    }


    function ct_mailsubmit(formdata) {
        jQuery.post(ct_ajax.ajaxurl, {
            'action': 'ct_email'
        }, function (response) {
            console.log(response);
            /*if (response == '1'){
                $('#error-modal').modal('show');
                $('#error-modal .modal-body').empty();
                $('#error-modal .modal-title').empty();
                $('#error-modal .modal-title').append('Sajnáluk!');
                $('#error-modal .modal-body').append('A kért időpontra a foglalás nem lehetséges, kérjük válasszon másikat!<br/><br/>');
                $('#error-modal .modal-body').append('Sürgős esetben kérjük hívja a következő számot: 06/96/523-020.');
            }else{
                $('#error-modal').modal('show');
                $('#error-modal .modal-body').empty();
                $('#error-modal .modal-title').empty();
                $('#error-modal .modal-title').append('Köszönjük!');
                $('#error-modal .modal-body').append('Foglalását a kért időpontra regisztráltuk!<br/><br/>');
                $('#fogl-form').trigger('reset');
            }*/
        });
    }

})(jQuery);