<?php
/*Template Name: partners*/


get_header();

$src = wp_get_attachment_image_src( get_post_thumbnail_id(11), 'thumbnail_size' );
$splash_url = $src[0];

?>
<div id="partners">
    <div class="splash-block" style="background-image: url(<?php echo $splash_url; ?>);">
        <!--img src="<?php echo get_template_directory_uri()?>/assets/img/citymap_white.png" id="img-map-white"-->
    </div>

    <div class="container separator">
        <div class="separator-content"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo_marker_small.png" height="64px"></div>
    </div>

    <div id="block1" class="block">
        <div class="container text-center">
            <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>         
                        <?php the_content(); ?>
                    <?php }
                }
            ?>
            <p class="padding-t50">
                <button type="button" class="btn btn-blue" data-toggle="modal" href='#modal-contact'>Contact Us</button>
            </p>
        </div>
    </div>
    

    <div class="container separator">
        <h1 class="separator-content">Events</h1>
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
                        case 'Information':
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
                    data-date="<?php the_sub_field('date') ?>" data-time="<?php the_sub_field('time') ?>" data-desc="Please note: meeting starts at <?php the_sub_field('time') ?> 
                    in <?php the_sub_field('place') ?>." href='#modal-attend'>Attend</button>
                    <span class="cd-date"><?php the_sub_field('date') ?></span>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->                       
        <?php
                endwhile;
            endif;
        ?>


        <?php
            if ( have_rows('more_events','option') ):
                while ( have_rows('more_events','option') ) : 
                    the_row();
        ?> 
            <div class="cd-timeline-block cd-timeline-block-disabled">
                <div class="cd-timeline-img cd-picture"> 
                    <i class="fa fa-forward text-white text-center fa-rotate-90" aria-hidden="true"></i>
                </div> <!-- cd-timeline-img -->
                <div class="cd-timeline-content">
                    <h2 class="text-blue"><?php the_sub_field('title') ?></h2>
                    <p><?php the_sub_field('description') ?></p>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->                       
        <?php
                endwhile;
            endif;
        ?>

    </section> <!-- cd-timeline -->


    <div id="block2">
        <div class="container separator">
            <h1 class="separator-content">We offer</h1>
        </div>
        <div class="background-img"></div>
        <div class="layer"></div>
        <div class="container text-center">
            <?php the_field('block_1'); ?>
        </div>
    </div>
</div>

<?php include 'inc/partners.php';?>
<?php get_footer(); ?>