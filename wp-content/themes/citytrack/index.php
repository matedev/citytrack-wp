<?php 
/*Template Name: citytrack*/


get_header(); 

?>

<div id="main">
    <div class="splash-block">
        <div class="container">
            <!--img src="<?php echo get_template_directory_uri()?>/assets/img/citymap_white.png" id="img-map-white"-->
            <img src="<?php echo get_template_directory_uri()?>/assets/img/phone.png" id="img-phone">
        </div>  
    </div>

    <div class="container separator">
        <div class="separator-content"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo_marker_small.png" height="64px"></div>
    </div>

    <div id="block1" class="block">
        <div class="container text-center">
            <?php the_field('block_1'); ?>
        </div>
    </div>

    <div class="container separator">
            <h1 class="separator-content"><?php echo __("Targets", "citytrack"); ?></h1>
    </div>

    <div class="block">
        <div class="container text-center text-light">
            <?php the_field('block_2'); ?>
        </div>
    </div>

    <div id="block2" class="block">
        <div class="background-img"></div>
        <div class="container">
                <div class="row">
                    <div class="col-md-6 padding-50 text-center">
                        <?php the_field('block_3'); ?>
                    </div>
                    <div class="col-md-6 col-sm-12 padding-t60 padding-b60">
                        <div class="youtube-player embed-video embed-responsive" data-id="VIDEO_ID">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/video.jpg">
                        </div>
                    </div>
                </div>
        </div>
        <div class="layer">
        </div>
    </div>  

    <div id="block3" class="block">
         <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php the_field('block_4'); ?>
                </div>
            </div>
        </div>
    </div>
</div>  

<?php include 'inc/partners.php';?>
<?php get_footer(); ?>