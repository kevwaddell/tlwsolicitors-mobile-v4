	
		<!-- FOOTER START -->
		<section id="footer-info">
			
			<?php wp_nav_menu(array( 'container_class' => 'social-links clearfix', 'theme_location' => 'social_links_menu', 'fallback_cb' => false ) ); ?>
		
			<footer class="container-fluid">

					<div class="compliance-notice">
						<?php $compliance_notice = get_field('compliance_notice', 'option');?>
						<?php if (isset($compliance_notice)) { ?>
						<?php echo $compliance_notice; ?>
						<?php }  ?>
					</div>
				
				<div class="copyright">
					<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
				</div>
				
			</footer>
			
		</section>
		
		<div class="nav-overlay"></div>
		
</div><!-- MAIN WRAPPER END -->
		
		<button id="back-2-top" class="hidden"><i class="fa fa-chevron-circle-up fa-2x"></i><span class="sr-only">Back to top</span></button>
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('User actions') ) : ?><?php endif; ?>
		
		<?php include (STYLESHEETPATH . '/_/inc/global/no-script.php'); ?>
				
		<?php wp_footer(); ?>

	</body>
</html>