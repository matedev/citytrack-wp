
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

        /*$('#partner-list .img-container').slice(-4).addClass("col-md-push-2 col-xs-6");
        $('#partner-list .img-container').slice(-2).addClass("col-sm-push-3");

        $('#partner-block .img-container').slice(-2).addClass("col-md-push-3");
        $('#partner-block .img-container').slice(-1).addClass("col-sm-push-4");*/
        $('#partner-list .img-container').slice(-5).addClass("col-sm-push-1");

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
        });

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
        });

        $("#registerform-send").bind( "click", function(event) {
            event.preventDefault();
            if (validateForm("registerform")){
                $("#registerform").submit();
            }
        });  

        $("#registerform").submit(function(event) {
            var $form = $(this);
            if ($form.data('submitted') === true) {
              // Previously submitted - don't submit again
              event.preventDefault();
            } else {
              // Mark it so that the next submit can be ignored
              $form.data('submitted', true);
              ct_registersubmit($('#registerform').serializeArray());
              event.preventDefault();
            }
        });

        $('#modal-attend').on('hidden.bs.modal', function () {
            $("#modal-attend .no-empty").removeClass("warning");
        });

        $('#btn-reg-update').bind("click", function(event){
            event.preventDefault();
            var arr = new Array();
            $('#registrations tr.modified').each(function(index,element){
                var obj = new Object();
                obj.userid = $(this).data("userid");
                obj.group = $(this).find("#reg-user-group").prop('checked');
                obj.other = $(this).find("#reg-user-other").val();
                arr.push(obj);
            });
            registration_update(arr); 
        });

        $('#registrations input').change(function() {
            $(this).parent().parent("td").css("background-color", "green");
            $(this).parent().parent("td").addClass("modified");
            $(this).parent().parent().parent("tr").css("background-color", "lightgreen");
            $(this).parent().parent().parent("tr").addClass("modified");
            $(this).parent().parent().parent("tr").addClass("modified");
        }); 

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
        $('#' + id + ' .no-empty').removeClass("warning");
        $('#' + id + ' .no-empty').each(function(index,element){
            if( !$(this).val() ) {
                  $(this).addClass('warning');
                  ok = false;
            }
        });
        $('#' + id + ' input[type=email]').each(function(index,element) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test($(this).val())){
                $(this).addClass('warning');
                ok = false;
            }
        })
        $('#' + id + ' input[type=number]').each(function(index,element){
            if($(this).val().length > 12){
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
            }else{  
                $('#thanks-modal').modal('show');
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
            }else{  
                $('#thanks-modal').modal('show');
            }
            $("#modal-attend #attendform").trigger('reset');
        });        
    }

    function ct_registersubmit(formdata){
        jQuery.post(ct_ajax.ajaxurl, {
            'action': 'ct_register',
            'register_data': formdata
        }, function (response) {
            if (response == 'error'){
                $('#error-reg-modal').modal('show');
            }else{  
                $('#thanks-modal').modal('show');
                $("#registerform").trigger('reset');
                $("#registerform").data('submitted', true);
            }
        });
    }

    function registration_update(tabledata){
        jQuery.post(ct_ajax.ajaxurl, {
            'action': 'ct_registration_update',
            'update_data': tabledata
        }, function (response) {
            if (response == 'error'){
                $('#error-reg-modal').modal('show');
            }
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