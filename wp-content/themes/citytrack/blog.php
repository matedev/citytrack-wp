<?php
/*Template Name: blog*/


get_header();

$src = wp_get_attachment_image_src( get_post_thumbnail_id(9), 'thumbnail_size' );
$splash_url = $src[0];

?>

<div id="blog">
    <div class="splash-block" style="background-image: url(<?php echo $splash_url; ?>);"></div>

    <div class="container separator">
        <h1 class="separator-content"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" height="63px"></h1>
    </div>

    <div id="posts" class="block container">
        <div class="row apost">
            <div class="post-header col-md-12">
                    <p>Posted on <span id="post-date">16.10.2016</span>
                    <strong> by <span id="post-author">XY</span></strong></p>
                
            </div>
            <div class="post-img col-md-5">
                <div class="img-container text-center">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/blog-img.jpg">
                </div>
            </div>
            <div class="post-body col-md-7">
                <h1 class="post-title text-blue">
                    This is the title of a blog post
                </h1>
                <p class="post-text demo1">
                    CityTrack project will become an unique urban test site for the design, 
                    development and piloting of modern mobility services and service-rich 
                    dense urban venues. CityTrack helps companies create a highly 
                    personalized,seamless and data-driven cross-channel event....
                </p>
                <p class="text-right">
                    <button type="button" class="btn btn-blue" data-toggle="" href=''>Read more</button>
                </p>
            </div>
        </div>
        <div class="row apost">
            <div class="post-header col-md-12">
                    <p>Posted on <span id="post-date">16.10.2016</span>
                    <strong> by <span id="post-author">XY</span></strong></p>
                
            </div>
            <div class="post-img col-md-5">
                <div class="img-container text-center">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/blog-img.jpg">
                </div>
            </div>
            <div class="post-body col-md-7">
                <h1 class="post-title text-blue">
                    This is the title of a blog post
                </h1>
                <p class="post-text demo1">
                    CityTrack project will become an unique urban test site for the design, 
                    development and piloting of modern mobility services and service-rich 
                    dense urban venues. CityTrack helps companies create a highly 
                    personalized,seamless and data-driven cross-channel event....                                                                       
                </p>
                <p class="text-right">
                    <button type="button" class="btn btn-blue" data-toggle="" href=''>Read more</button>
                </p>
            </div>
        </div>
        <div class="row apost">
            <div class="post-header col-md-12">
                    <p>Posted on <span id="post-date">16.10.2016</span>
                    <strong> by <span id="post-author">XY</span></strong></p>
                
            </div>
            <div class="post-img col-md-5">
                <div class="img-container text-center">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/blog-img.jpg">
                </div>
            </div>
            <div class="post-body col-md-7">
                <h1 class="post-title text-blue">
                    This is the title of a blog post
                </h1>
                <p class="post-text demo1">
                    CityTrack project will become an unique urban test site for the design, 
                    development and piloting of modern mobility services and service-rich 
                    dense urban venues. CityTrack helps companies create a highly 
                    personalized,seamless and data-driven cross-channel event....                                                                       
                </p>
                <p class="text-right">
                    <button type="button" class="btn btn-blue" data-toggle="" href=''>Read more</button>
                </p>
            </div>
        </div>
    </div>
</div>  

<?php include 'inc/partners.php';?>
<?php get_footer(); ?>