
(function($){
    $(document).ready(function() {

        $('#block2 .col-md-6').matchHeight();
        $('#block2 .col-sm-12').matchHeight();
        $('#block3 .img-container').matchHeight();
        $('#partner-block .img-container').matchHeight();
        $('#partner-list .img-container').matchHeight();
        $('#footer .same-height').matchHeight();

        $('.post-body').truncate({
            'maxLines': 5,
            'truncateString': '&nbsp;&#8230;',
            'showText': 'Read More',
            'hideText': "Read Less"/*, 
            'animate':true*/
        });

        $(' #blog #posts .apost .img-container img').addClass("img-responsive");

        $('#partner-list .img-container').slice(-4).addClass("col-md-push-2 col-xs-6");
        $('#partner-list .img-container').slice(-2).addClass("col-sm-push-3");

        $('#partner-block .img-container').slice(-2).addClass("col-md-push-3");
        $('#partner-block .img-container').slice(-1).addClass("col-sm-push-4");

        $( "#contantform-send" ).bind( "click", function(event) {
            event.preventDefault();
            if (validateForm("contactform")){
                $('#modal-contact').modal('hide');
                $("#modal-contact #contactform").submit();
            }
        });  

        $("#modal-contact #contactform").submit(function( event ) {
            ct_mailsubmit($('#modal-contact #contactform').serializeArray());
            event.preventDefault();
            return false;
        });

        $('#modal-contact').on('hidden.bs.modal', function () {
            $("#modal-contact .no-empty").removeClass("warning");
        })

        $("#attendform-send").bind( "click", function(event) {
            event.preventDefault();
            if (validateForm("attendform")){
                $('#modal-attend').modal('hide');
                $("#modal-attend #attendform").submit();
            }
        });  

        $("#modal-attend #attendform").submit(function( event ) {
            ct_attendsubmit($('#modal-attend #attendform').serializeArray());
            event.preventDefault();
            return false;
        });

        $('#modal-attend').on('hidden.bs.modal', function () {
            $("#modal-attend .no-empty").removeClass("warning");
        })
    });

    $(document).on("click", ".btn-attend", function () {
        var mTitle = $(this).data('title');
        var mDesc = $(this).data('desc');
        var mDate = $(this).data('date');
        var mTime = $(this).data('time');
        $("#modal-attend #event-name").val(mTitle);
        $("#modal-attend #event-date").val(mDate);
        $("#modal-attend #event-time").val(mTime);
        $("#modal-attend .modal-header h1").text("Attend to the " + mTitle);
        $("#event-desc").text(mDesc);

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
            'action': 'ct_email',
            'contact_data': formdata
        }, function (response) {
            if (response == 'error'){
                $('#error-modal').modal('show');
                $('#error-modal .modal-body').empty();
                $('#error-modal .modal-header').empty();
                $('#error-modal .modal-header').append('<h1>Sorry</h1>!');
                $('#error-modal .modal-body').append('Something went wrong!<br/><br/>');
            }else{  
                $('#error-modal').modal('show');
                $('#error-modal .modal-body').empty();
                $('#error-modal .modal-header').empty();
                $('#error-modal .modal-header').append('<h1>Thank you for your interest!</h1>');
                $('#error-modal .modal-body').append('We will contact you soon');
            }
            $("#modal-contact #contactform").trigger('reset');
        });
    }

    function ct_attendsubmit(formdata){
        jQuery.post(ct_ajax.ajaxurl, {
            'action': 'ct_attend',
            'attend_data': formdata
        }, function (response) {
            if (response == 'error'){
                $('#error-modal').modal('show');
                $('#error-modal .modal-body').empty();
                $('#error-modal .modal-header').empty();
                $('#error-modal .modal-header').append('<h1>Sorry</h1>!');
                $('#error-modal .modal-body').append('Something went wrong!<br/><br/>');
            }else{  
                $('#error-modal').modal('show');
                $('#error-modal .modal-body').empty();
                $('#error-modal .modal-header').empty();
                $('#error-modal .modal-header').append('<h1>Thank you for attending!</h1>');
                $('#error-modal .modal-body').append('We received your registration');
            }
            $("#modal-attend #attendform").trigger('reset');
        });        
    }

})(jQuery);

    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });
 
    function labnolThumb(id) {
        var thumb = '',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }
 
    function labnolIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/HGRl9iePLFc?autoplay=1";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }