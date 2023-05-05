	<footer role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 center-mobile small-screen-padding">
						<a href="<?php bloginfo('url'); ?>/" title="SITE NAME" class="footer-logo"><?php $image = get_field('site_footer_logo', 'option');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?></a>
						<?php wp_nav_menu( array( 'container_class' => 'footer-menu-container', 'menu_class' => 'footer-menu', 'menu_id' => '','theme_location' => 'footer' ) ); ?>
						<p>
							© <?php echo date("Y"); ?> <?php the_field('copyright_text', 'option'); ?>
						</p>
						<a href="https://realityhouse.co.uk" id="footer_rh" target="_blank">Website by <img src="<?php bloginfo('template_directory'); ?>/img/logo-realityhouse.svg" width="118" height="15" alt="realityhouse"></a>
				</div>
				<div class="col-lg-5">
						<?php the_field('legal_text', 'option'); ?>
				</div>
				<div class="col-lg-3  center-mobile">
					<ul class="social-links">
						<?php if(get_field('facebook_url', 'option')) { ?>
								<li class="social-facebook"><a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
							<?php } ?>
						<?php if(get_field('instagram_url', 'option')) { ?>
							<li class="social-insta"><a href="<?php the_field('instagram_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
						<?php } ?>
						<?php if(get_field('linkedin_url', 'option')) { ?>
							<li class="social-linkedin"><a href="<?php the_field('linkedin_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></li>
						<?php } ?>
						<?php if(get_field('youtube_url', 'option')) { ?>
							<li class="social-youtube"><a href="<?php the_field('youtube_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a></li>
						<?php } ?>
					</ul>
					<?php wp_nav_menu( array( 'container_class' => 'footer-menu-legal', 'menu_class' => 'footer-menu', 'menu_id' => '','theme_location' => 'footer-legal' ) ); ?>
				</div>
			</div>
		</div>
	</footer>
</div>
<div id="fb-root"></div>
<?php wp_footer();?>
<script src="https://kit.fontawesome.com/77414d9407.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
