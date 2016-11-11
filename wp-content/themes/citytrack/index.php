<?php 
/*Template Name: citytrack*/


get_header(); 

?>

<div id="main">
    <div class="splash-block">
        <div class="container">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/phone.png" id="img-phone">
        </div>  
    </div>
    
    <div class="container separator">
            <h1 class="separator-content"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" height="63px"></h1>
    </div>

    <div id="block1" class="block">
        <div class="container text-center">
            <?php the_field('block_1'); ?>
        </div>
    </div>

    <div id="block2" class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 padding-t60 padding-b60 text-center">
                    <?php the_field('block_2'); ?>
                </div>
                <div class="col-md-6 col-sm-12 padding-t60 padding-b60">
                    <div class="embed-video embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/HGRl9iePLFc" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <div id="block3" class="block">
         <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php the_field('block_3'); ?>
                </div>
            </div>
        </div>
    </div>
</div>  

<?php include 'inc/partners.php';?>
<?php get_footer(); ?>