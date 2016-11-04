<?php
/*Template Name: partners*/


get_header();

?>
<div id="partners">
    <div class="splash-block"></div>

    <div id="block1" class="block">
        <div class="container">
            <div class="separator">
                <h1 class="separator-content"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" height="63px"></h1>
            </div>
            <div class="row">
                <h2 class="text-center text-blue col-lg-6 col-lg-push-3 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
                    Interested in the pilot?
                </h2>
            </div>
                <p class="text-center text-light">
                    Are you interested in joining the Citytrack piloting project? Do you own a business in Tampere city centre? 
                    Could your customers for example benefit from indoor positionging? 
                    Or do you have other ideas and are looking for someone to achieve them with?
                </p>
                <p class="text-center padding-t30">
                    If you think CityTrack could be the right thing for your business, please contact us! 
                    <br>Send e-mail to <a href="mailto:marko.luomi@uta.fi">marko.luomi@uta.fi</a>.
                </p>
                <p class="text-center padding-50">
                    <button type="button" class="btn btn-blue" data-toggle="modal" href='#modal-contact'>Contact Us</button>
                </p>
        </div>
    </div>

    <section id="cd-timeline" class="cd-container">
        <div class="cd-timeline-block cd-timeline-block-disabled">
            <div class="cd-timeline-img cd-picture"> 
                <i class="fa fa-group text-white text-center" aria-hidden="true"></i>
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h2 class="text-blue">Initial meeting</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                <button type="button" class="btn btn-blue btn-attend" data-toggle="modal" data-title="initial meeting" 
                data-date="Oct 30" data-desc="Please note: meeting starts at 9:00 in Pinni B 1029." href='#modal-attend'>Attend</button>
                <span class="cd-date">Oct 30</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->
        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture"> 
                <i class="fa fa-info text-white text-center" aria-hidden="true"></i>
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h2 class="text-blue">Kick off meeting</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                <button type="button" class="btn btn-blue btn-attend" data-toggle="modal" data-title="kick off meeting" 
                data-date="Nov 14" data-desc="Please note: meeting starts at 9:00 in Pinni B 1029." href='#modal-attend'>Attend</button>
                <span class="cd-date">Nov 14</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture">
                <i class="fa fa-cogs text-white text-center" aria-hidden="true"></i>
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h2 class="text-blue">Technical meeting</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                <button type="button" class="btn btn-blue btn-attend" data-toggle="modal" data-title="technical meeting" 
                data-date="Nov 18" data-desc="Please note: meeting starts at 9:00 in Pinni B 1029." href='#modal-attend'>Attend</button>
                <span class="cd-date">Nov 18</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->
    </section> <!-- cd-timeline -->


    <div class="container separator">
            <h1 class="separator-content">CityTrack Project Partners</h1>
    </div>

    <div id="partner-block" class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-beemray.jpg" alt="Beemray logo">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-allbright.jpg" alt="Tampere All Bright logo">
                </div>

                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-here.jpg" alt="Here logo">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-sryhma.jpg" alt="Shryma logo">
                </div>
                <div class="col-md-4 col-sm-6 img-container clear-both">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-finnpark.jpg" alt="Finnpark logo">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-talo.jpg" alt="Tampere Talo logo">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-tampere.jpg" alt="Tampere logo">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-tredea.jpg" alt="Tredea logo">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-kesko.jpg" alt="Kesko logo">
                </div>
                <div class="col-md-4 col-md-push-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/logo-uta.jpg" alt="UTA logo">
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>