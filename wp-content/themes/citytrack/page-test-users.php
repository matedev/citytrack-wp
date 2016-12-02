<?php
/*Template Name: test-users*/


get_header();

/*$src = wp_get_attachment_image_src( get_post_thumbnail_id(4), 'thumbnail_size' );
$splash_url = $src[0];*/

?>

<div id="test-users">
    <div class="splash-block">
        <!--img src="<?php echo get_template_directory_uri()?>/assets/img/citymap_white.png" id="img-map-white"-->
    </div>

    <div class="container separator">
        <div class="separator-content"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo_marker_small.png" height="64px"></div>
    </div>

    <div class="block1 block">
        <div class="container">
            <div class="row text-center text-light">
                <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>         
                            <?php the_content(); ?>
                        <?php }
                    }
                ?>
            </div>
        </div>         
    </div>

    <div id="block2" class="block">
        <div class="background-img"></div>

        <div class="container separator">
            <h1 class="separator-content"><?php echo __("Lotteries for test users!", "citytrack"); ?></h1>
        </div>
        <div class="container text-light">
            <?php the_field('lotteries'); ?>
        </div>
        <div class="layer"></div>
    </div>

    <div id="block3">
        <div class="container">
                <?php
                    if ( have_rows('scrollable_container', 4) ):
                        while ( have_rows('scrollable_container', 4) ) : the_row(); 
                ?>
                            <div class="col-md-5 col-md-push-1 text-center">
                                <img src="<?php $logo = get_sub_field('logo'); echo $logo['url']; ?>" height="63px">
                                <h2 class="text-blue">
                                    <?php the_sub_field('header')?>
                                </h2>
                                <div class="text-light users-description">
                                    <?php the_sub_field('description')?>
                                </div>
                            </div>
                <?php            
                        endwhile;
                    endif
                ?>
        </div>      
    </div>
    <div id="block4">
        <div class="container separator">
            <h1 class="separator-content"><?php echo __("What to do?", "citytrack"); ?></h1>
            <P class="text-center text-light">
                <?php the_field('what_to_do'); ?>
            </P>
        </div>        
    </div>
</div>  

<?php include 'inc/partners.php';?>
<?php get_footer(); ?>