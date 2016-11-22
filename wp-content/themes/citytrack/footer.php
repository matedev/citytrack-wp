    <div id="footer">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/track.png" class="img-track">
        <div class="container">
            <div class="row">
                <div class="col-md-8 same-height">
                    <div>
                        <?php
                            the_field('footer_column_1','option');
                        ?>                    
                    </div>
                    <strong>Interested? Got questions?</strong> <br/>
                    Send email to <strong><a href="mailto:marko.luomi@uta.fi">marko.luomi@uta.fi</a></strong>.
                     <p class="text-regular">
                        <button type="button" class="btn btn-white" data-toggle="modal" href='#modal-contact'><?php echo __("Contact Us", "citytrack"); ?></button>
                    </p>                          
<?php /*                    <div class="col-sm-4 same-height">
                        <h2 class=" padding-t10 text-light">Follow Us</h2>
                        <?php
                            if ( have_rows('footer_column_2','option') ):
                                while ( have_rows('footer_column_2','option') ) : the_row(); 
                        ?>
                                    <ul class="social-list">
                                    <?php if(get_sub_field('facebook') ): ?>
                                
                                    <?php
                                        endif;    
                                    ?>
                                    <?php if(get_sub_field('youtube') ): ?>
                                        <li><a href="<?php the_sub_field('youtube'); ?>" class="fa fa-youtube fa-2x"></a></li>
                                    <?php
                                        endif;    
                                    ?>
                                    <?php if(get_sub_field('linkedin') ): ?>
                                        <li><a href="<?php the_sub_field('linkedin'); ?>" class="fa fa-linkedin fa-2x"></a></li>
                                    <?php
                                        endif;
                                    ?>                                                       
                                    </ul>
                        <?php
                                endwhile;
                            endif;    
                        ?>
                    </div>
*/?>                </div>              
                <div class="col-md-4 text-center same-height">
                    <?php
                        the_field('footer_column_3','option');
                    ?>
                    <div id="map"></div>

                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA85EbXOHHYAgKFEGcAI5tthnldERQMTbo&callback=initMap">
                    </script>
                    <script type="text/javascript">
                        function initMap() {
                            var uta = {lat: 61.493736, lng: 23.778643};
                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 15,
                              center: uta,
                              disableDefaultUI: true
                            });
                            var marker = new google.maps.Marker({
                              position: uta,
                              icon: '<?php echo get_template_directory_uri()?>/assets/img/logo_marker_smaller.png',
                              title: 'Tampereen yliopisto',
                              map: map
                            });
                        };
                    </script>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/assets/img/track.png" class="img-track">
    </div>

    <footer class="text-center">
        <p>The CityTrack research project is funded by 
            <a class="text-regular" title="Tekes website" href="http://www.tekes.fi/" 
                rel="nofollow" target="_blank">
                Tekes – the Finnish Funding Agency for Innovation</a>.
        </p>
        <small class="text-blue text-light" >2016 &copy; All rights reserved</small>
    </footer>

    <?php include 'inc/modals.php';?>

</div>

</body>
</html>