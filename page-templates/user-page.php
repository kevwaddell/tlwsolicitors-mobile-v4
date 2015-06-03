<?php 
/*
Template Name: User page
*/
 ?>

<?php get_template_part( 'parts/headers/header', 'user' ); ?>

<!-- MAIN CONTENT START -->

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		

<div class="wrap-center">	
	<div class="login-warning">
		<div class="alert alert-danger">
			<i class="icon fa fa-desktop fa-lg"></i>
			<p>Please use the <strong>Desktop</strong> website to login.</p>
			<a href="<?php echo get_option('home'); ?>/" class="btn btn-default btn-block"><i class="fa fa-arrow-circle-left pull-left"></i>Return to main site</a>
		</div>
	</div>
</div>
			
<?php endwhile; ?>
<?php endif; ?>

<!-- MAIN CONTENT END -->

<?php get_template_part( 'parts/footers/footer', 'user' ); ?>
