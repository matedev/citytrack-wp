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
    <div id="feedback"></div>
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
            <div class="row">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/track.png" class="img-track">
                <div class="col-sm-6 padding-t30">
                    <h2 class="text-center text-blue"><?php echo __("Registration", "citytrack"); ?></h2>
                    <form id="registerform" method="POST" role="form">
                        <div class="form-group">
                            <label for="user-name" class="text-blue"><?php echo __("Name", "citytrack"); ?></label>
                            <input type="text" class="form-control no-empty" id="name" name="name" placeholder="<?php echo __("Enter your name", "citytrack"); ?>">
                        </div>
                        <div class="form-group">
                            <label for="user-email" class="text-blue"><?php echo __("E-mail", "citytrack"); ?></label>
                            <input type="email" class="form-control no-empty" id="email" name="email" placeholder="<?php echo __("Enter your e-mail", "citytrack"); ?>">
                        </div>
                        <div class="form-group">
                            <label for="user-phone" class="text-blue"><?php echo __("Phone", "citytrack"); ?></label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="<?php echo __("001122333", "citytrack"); ?>">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label  class="text-blue"><input type="checkbox" id="user-member" value=""><?php echo __("I am a member of student organization", "citytrack"); ?></label>
                            </div>
                        </div>
                        <div id="group-option" class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sel1" class="text-blue"><?php echo __("Organization", "citytrack"); ?></label>
                                    <select class="form-control" id="reggroup">
                                        <option class="group-select"><?php echo __("Select", "citytrack"); ?></option>
                                        <?php
                                            if ( have_rows('student_groups', 367) ):
                                                while ( have_rows('student_groups', 367) ) : the_row(); 
                                        ?>
                                                    <option value="<?php the_sub_field('student_group_name')?>" data-code="<?php the_sub_field('code')?>"><?php the_sub_field('student_group_name')?></option>
                                        <?php            
                                                endwhile;
                                            endif
                                        ?>
                                        <option class="group-other" value="<?php echo __("Other", "citytrack"); ?>" data-code=""><?php echo __("Other", "citytrack"); ?></option>                                        
                                    </select>
                                </div> 
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group" id="group-code-box" style="display: none">
                                    <label for="user-name" class="text-blue"><?php echo __("Code", "citytrack"); ?></label>
                                    <input type="text" class="form-control" id="regcode" name="regcode" placeholder="<?php echo __("Group code", "citytrack"); ?>">
                                </div>
                                <div class="form-group" id="group-name-box" style="display: none">
                                    <label for="user-name" class="text-blue"><?php echo __("Name", "citytrack"); ?></label>
                                    <input type="text" class="form-control" id="other-group-name" name="othergroup" placeholder="<?php echo __("Organization name", "citytrack"); ?>">
                                </div>                           
                            </div>
                        </div>                                        
                        <div class="form-group">
                            <input id="user-group" class="hidden" type="text" name="usergroup" value="">
                        </div>
                        <div class="reg-info text-center">
                            <?php echo __("Contact details are used only for research-related communication and the lotteries.", "citytrack"); ?>
                        </div>
                        <div class="btnwrap text-center"> 
                            <button id="registerform-send" type="submit" class="btn btn-blue sendbtn"><?php echo __("Register", "citytrack"); ?></button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 padding-t30">
                    <h2 class="text-center text-blue"><?php echo __("Feedback", "citytrack"); ?></h2>
                    <form id="feedbackform" method="POST" role="form">
                        <div class="form-group">
                            <label for="user-name" class="text-blue"><?php echo __("Name", "citytrack"); ?></label>
                            <input type="text" class="form-control no-empty" id="name" name="name" placeholder="<?php echo __("Enter your name", "citytrack"); ?>">
                        </div>
                        <div class="form-group">
                            <label for="user-email" class="text-blue"><?php echo __("E-mail", "citytrack"); ?></label>
                            <input type="email" class="form-control no-empty" id="email" name="email" placeholder="<?php echo __("Enter your e-mail", "citytrack"); ?>">
                        </div>
                        <div class="form-group">
                            <label for="user-phone" class="text-blue"><?php echo __("Feedback message", "citytrack"); ?></label>
                            <textarea id="message" name="message" class="form-control no-empty" rows="6"></textarea>
                        </div>                                     
                        <div class="btnwrap text-center"> 
                            <button id="feedbackform-send" type="submit" class="btn btn-blue sendbtn"><?php echo __("Send", "citytrack"); ?></button>
                        </div>
                    </form>
                </div>
                <img src="<?php echo get_template_directory_uri()?>/assets/img/track.png" class="img-track">
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
                    if ( have_rows('scrollable_container', 279) ):
                        while ( have_rows('scrollable_container', 279) ) : the_row(); 
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