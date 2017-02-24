<?php 
/*Template Name: base-template*/


get_header(); 

?>

<div id="main">
    <div class="container separator" style="margin-top: 100px;">
            <h1 class="separator-content"><?php echo __("Legal notices", "citytrack"); ?></h1>
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
        </div>
    </div>

    <div class="container separator">
        <div class="separator-content"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo_marker_small.png" height="64px"></div>
    </div>
	
</div>  