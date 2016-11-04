    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h2>CityTrack Project</h2>
                    <p class="text-light padding-30">
                        CityTrack is a project of university of Tampere. The project seeks to combine 
                        seamless indoor and outdoor positioning with other open data to provide both 
                        local business and consumers with new opportunities and possibilities.
                    </p>
                    <p>
                        <strong>Interested? Got questions? 
                        Feedback?</strong> Send email to 
                        <strong><a href="mailto:marko.luomi@uta.fi">marko.luomi@uta.fi</a></strong>.
                        
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <h2>Contact Information</h2>
                    <h2 class="padding-30 margin-0">Social Media</h2>
                    <ul class="social-list">
                        <li><a href="" class="red fa fa-facebook fa-2x"></a></li>
                        <li><a href="" class="red fa fa-youtube fa-2x"></a></li>
                        <li><a href="" class="red fa fa-twitter fa-2x"></a></li>
                    </ul>
                    <p class="text-center padding-50">
                        <button type="button" class="btn btn-white" data-toggle="modal" href='#modal-contact'>Contact Us</button>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <h2>Location</h2>
                    <p class="text-light padding-30">Kalevantie 4, 331000 Tampere</p>

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
                              icon: '<?php echo get_template_directory_uri()?>/assets/img/logo.png',
                              title: 'Tampereen yliopisto',
                              map: map
                            });
                        };
                    </script>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <small class="text-blue text-light" >2016 &copy; All rights reserved</small>
    </footer>

    <?php include 'inc/modals.php';?>

</div>