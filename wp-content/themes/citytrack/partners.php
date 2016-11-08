<?php
/*Template Name: partners*/


get_header();

$src = wp_get_attachment_image_src( get_post_thumbnail_id(11), 'thumbnail_size' );
$splash_url = $src[0];

?>
<div id="partners">
     <div class="splash-block" style="background-image: url(<?php echo $splash_url; ?>);"></div>

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

        <?php
            if ( have_rows('events','option') ):
                while ( have_rows('events','option') ) : 
                    the_row();
        ?> 
            <div class="cd-timeline-block cd-timeline-block-disabled">
                <div class="cd-timeline-img cd-picture"> 
                <?php 
                    switch (get_sub_field('type')) {
                        case 'Initial':
                            echo '<i class="fa fa-group text-white text-center" aria-hidden="true"></i>';
                            break;
                        case "Kick off":
                            echo '<i class="fa fa-info text-white text-center" aria-hidden="true"></i>';
                            break;
                        case "Technical":
                            echo '<i class="fa fa-cogs text-white text-center" aria-hidden="true"></i>';
                            break;               
                    }
                ?>
                </div> <!-- cd-timeline-img -->
                <div class="cd-timeline-content">
                    <h2 class="text-blue"><?php the_sub_field('title') ?></h2>
                    <p><?php the_sub_field('description') ?></p>
                    <button type="button" class="btn btn-blue btn-attend" data-toggle="modal" data-title="<?php the_sub_field('title') ?>" 
                    data-date="<?php the_sub_field('date') ?>" data-desc="Please note: meeting starts at <?php the_sub_field('time') ?> 
                    in <?php the_sub_field('place') ?>." href='#modal-attend'>Attend</button>
                    <span class="cd-date"><?php the_sub_field('date') ?></span>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->                       
        <?php
                endwhile;
            endif;
        ?>

       
    </section> <!-- cd-timeline -->


    <div class="container separator">
            <h1 class="separator-content">CityTrack Project Partners</h1>
    </div>

    <div id="partner-block" class="block">
        <div class="container">
            <div class="row">
                <?php
                    if ( have_rows('partner_logos','option') ):
                        while ( have_rows('partner_logos','option') ) : the_row(); 
                ?>
                            <div class="col-md-4 col-sm-6 img-container">
                                <a href="<?php the_sub_field('url'); ?>" target="_blank">
                                    <span class="helper"></span><img class="img-class" src="<?php $logo = get_sub_field('logo'); echo $logo['url']; ?>"
                                     alt="<?php the_sub_field('name'); ?>">
                                 </a>
                            </div>
                <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>
<?php get_footer(); ?>