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
                <div class="col-md-4 text-center">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon_1.png" height="63px">
                    <h2 class="text-blue">What is CityTrack?
                    </h2>
                    <div class="text-light users-description">
                        <p>CityTrack is an application in development designed to make your life easier. 
                        Once the app is finished, it will guide you around Tampere city centre, both 
                        indoors and outdoors. It will also inform you of possible interesting events 
                        near you,  and have awesome offers from local businesses.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon_2.png" height="63px">
                    <h2 class="text-blue">Possibilities</h2>
                    <div class="text-light users-description">
                        <p class="text-truncate">In the future, CityTrack app will combine open data from different resources. 
                        It will know if there are traffic jams, when the next bus to your destination is 
                        coming, where to park your car if you want to take a train from the railway 
                        station, and much more.</p>
                        <p>The app’s indoor positioning is made possible with 
                        wireless networks and Bluetooth low energy technology.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/icon_3.png" height="63px">
                    <h2 class="text-blue">Download the app</h2>
                    <div class="text-light users-description">
                        <p>The app is only developed for Android at first, iOS app unfortunately won’t 
                        be available as fast. The first version of the Android app should be available
                         for download in Google’s Play Store towards the end of the year 2016. More 
                         accurate information will be published here later.</p>
                         <p>Some partners will 
                         develop their own apps on top of our CityTrack app, a link to those apps 
                         will also be posted here once those apps are available in Play Store.</p>
                     </div>
                </div>
            </div>
        </div>         
    </div>

    <div class="block2 block">
        <div class="container">
            <div class="row text-center">
                <h2 class="text-blue">Would you like to test CityTrack?</h2>
                <p class="text-light">Make a reservation</p>
            </div>
        </div>
    </div>
</div>  

<?php include 'inc/partners.php';?>
<?php get_footer(); ?>