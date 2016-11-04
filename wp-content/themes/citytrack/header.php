<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>
        <?php 
            wp_title( '�', TRUE, 'right' );
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