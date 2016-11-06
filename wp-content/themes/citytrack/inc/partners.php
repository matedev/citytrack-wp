    <div class="container separator partner-separator">
            <h1 class="separator-content">CityTrack Partners</h1>
    </div>

    <div id="partner-block">
        <div class="container">
            <div class="row">
                <?php
                    if ( have_rows('partner_logos','option') ):
                        $ctr = 1;
                        while ( have_rows('partner_logos','option') ) : the_row(); 
                            if ($ctr < 7) :
                ?>
                            <div class="col-md-2 col-sm-4 img-container">
                                <a href="<?php the_sub_field('url'); ?>" target="_blank">
                                    <span class="helper"></span><img class="img-class" src="<?php $logo = get_sub_field('logo'); echo $logo['url']; ?>"
                                     alt="<?php the_sub_field('name'); ?>">
                                 </a>
                            </div>                            
                      <?php else : ?>
                            <div class="col-md-2 col-md-push-2 col-sm-4 img-container">
                                <a href="<?php the_sub_field('url'); ?>" target="_blank">   
                                    <span class="helper"></span><img class="img-class" src="<?php $logo = get_sub_field('logo'); echo $logo['url']; ?>"
                                     alt="<?php the_sub_field('name'); ?>">
                                </a>
                            </div>
                <?php
                            endif;
                            $ctr = $ctr+1;
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>