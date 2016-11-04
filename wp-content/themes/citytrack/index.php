<?php get_header(); ?>
<?php include 'inc/menu.php';?>

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
        <div class="container">
            <div class="row">
                <h2 class="text-center text-blue col-lg-6 col-lg-push-3 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
                    Indoor and outdoor positioning in Tampere city centre area
                </h2>
            </div>
                <p class="text-center text-light">
                    CityTrack project will become an unique urban test site for the design, development and piloting of modern 
                    mobility services and service-rich dense urban venues. CityTrack helps companies create a highly personalized,
                    seamless and data-driven cross-channel event and shopping experience at Tampere station area 
                    both indoors and outdoors.
                </p>
            
        </div>
    </div>

    <div id="block2" class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 padding-t60 padding-b60">
                    <p class="text-center margin-0 text-light">
                        CityTrack provides tools and analyzed information for venue owners to enhance their 
                        services in dense urban areas. This is achieved through combining contextual awareness 
                        of location data, traffic and people flow which includes open traffic data, customer
                        preferences, and customer engagement. <span class="text-blue text-regular"> In Tampere 
                        city centre around the railway station </span> CityTrack area includes <span class="text-blue text-regular"> 
                        shopping malls, parking halls, event venues, university campus, 
                        tourist attractions, and conference facilities. </span>
                    </p>
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
                 <p class="text-center col-sm-12 text-light">
                     The positioning works indoors with wireless Internet, radio and bluetooth technology. 
                     The system uses Here positioning software. Therefore CityTrack offers seamless outdoor
                      to indoors positioning, routing and maps. CityTrack also counts in bus and train 
                      traffic, events, shopping times, and weather. The services and applications developed 
                      in the area can be exported to any other location using Here assets.
                 </p>
            </div>
        </div>
    </div>

    <?php include 'inc/partners.php';?>
    <?php include 'inc/footer.php';?>
	
</body>
</html>