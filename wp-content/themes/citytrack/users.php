<?php
/*Template Name: users*/


get_header();

$src = wp_get_attachment_image_src( get_post_thumbnail_id(4), 'thumbnail_size' );
$splash_url = $src[0];

?>

<div id="users">
    <div class="splash-block" style="background-image: url(<?php echo $splash_url; ?>);">
    </div>

    <div class="container separator">
        <div class="separator-content"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo_marker_small.png" height="64px"></div>
    </div>

    <div class="block1 block">
        <div class="container">
            <div class="row">
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
    </div>

    <div class="container separator">
        <h1 class="separator-content">Pilots of core partners</h1>
    </div>

    <div class="block2 block">
        <div class="container">
            <div class="row text-center">
                <p>
                    Together with core partners Here, Beemray, Finnpark, Kesko, Tampere Hall and the S Group 
                    we pilot new services related to <strong><span style="color: #115788;">urban mobility</span></strong> and 
                    <strong><span style="color: #115788;">cross-channel customer experiences</span></strong>
                    In Tampere city centre around the railway station 
                </p>
                <?php /*
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>         
                            <?php the_content(); ?>
                        <?php }
                    }
               */ ?>
            </div>
        </div>
        <div class="container partner-images-container">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <div class="col-sm-4 col-xs-12 img-container">
                        <img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/partners2.jpg ?>">
                    </div>
                    <div class="col-sm-4 col-xs-12 img-container">
                        <img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/partners4.jpg ?>">
                    </div>
                    <div class="col-sm-4 col-xs-12 img-container">
                        <img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/partners5.jpg ?>">
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-10 col-md-push-1">
                <div class="col-sm-4 col-sm-push-2 col-xs-12 img-container">
                    <img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/partners1.jpg ?>">
                </div>
                <div class="col-sm-4 col-sm-push-2 col-xs-12 img-container">
                    <img class="img-class" src="<?php echo get_template_directory_uri()?>/assets/img/partners3.jpg ?>">
                </div>   
            </div>                
            </div>  
        </div>
    </div>
</div>  

<?php include 'inc/partners.php';?>
<?php get_footer(); ?>