<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>
        <?php 
            wp_title( '·', TRUE, 'right' );
    	?>    
    </title>
	<?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/favicon-16x16.png" sizes="16x16">
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                    <span><img id="logo" src="<?php echo get_template_directory_uri()?>/assets/img/logo_border.png" alt="" height="98px"></span>
                </a>
            </div>
            <div class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                    <?php wp_nav_menu(array("theme_location" => "primary", 'container' => '', 'items_wrap' => '%3$s')); ?>
                </ul>
            </div>
        </div>
    </nav>