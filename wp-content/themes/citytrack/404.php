<?php get_header(); ?>
<div class="pagetitlebar pageid_<?php echo the_ID();?>" style="height: 340px;background-image: url('<?php echo get_template_directory_uri();?>/img/404.png'); background-size: contain;
    background-position: center center;background-repeat: no-repeat;">
</div>

<div class="container">
	<div class="pcontent">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center page404">
					<p><?php echo __('Az Ön által keresett oldal sajnos nem található.','cordia'); ?></p>
						<p><?php echo __('Kérjük, látogasson el a <a href="'. get_bloginfo('url') .'">főoldalunkra</a> és válogasson kedvére projektjeink közül!','cordia'); ?></p>
					</div>
				</div>
			</main>
		</div>
	</div>
	<?php get_footer(); ?>