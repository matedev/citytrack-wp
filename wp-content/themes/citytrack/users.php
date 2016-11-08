<?php
/*Template Name: users*/


get_header();

$src = wp_get_attachment_image_src( get_post_thumbnail_id(4), 'thumbnail_size' );
$splash_url = $src[0];

?>

<div id="users">
    <div class="splash-block" style="background-image: url(<?php echo $splash_url; ?>);"></div>

    <div class="container separator">
        <h1 class="separator-content"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" height="63px"></h1>
    </div>

    <div class="block1 block">
        <div class="container">
            <div class="row">
                <?php
                    if ( have_rows('scrollable_container', 4) ):
                        while ( have_rows('scrollable_container', 4) ) : the_row(); 
                ?>
                            <div class="col-md-4 text-center">
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

    <div class="block2 block">
        <div class="container">
            <div class="row text-center">
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
</div>  

<?php include 'inc/partners.php';?>
<?php get_footer(); ?>