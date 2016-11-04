<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>
        <?php 
            wp_title( '·', TRUE, 'right' );
            bloginfo( 'name' );
    	?>    
    </title>
	<?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes">
    <link rel='shortcut icon' href='<?php echo get_template_directory_uri()?>/favicon.ico' type='image/x-icon'/>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                    <span><img id="logo" src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="" height="35px"></span>
                    <span>CityTrack</span>
                </a>
            </div>
            <div class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                <?php wp_nav_menu(array("theme_location" => "primary", 'container' => '', 'items_wrap' => '%3$s')); ?>
                    <!--li><a href="index.php">Citytrack</a></li>
                    <li><a href="users.php">Pilot users</a></li>
                    <li><a href="partners.php">Partners</a></li>
                    <li><a href="blog.php">Blog</a></li-->
                </ul>
            </div>
        </div>
    </nav>