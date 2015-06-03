<?php include (STYLESHEETPATH . '/_/inc/global/head-html.php'); ?>	

<?php 
$color = get_field('page_colour', $post->ID);
$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$bg_img = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
$bg_img_url = $bg_img[0];
?>

<body id="landing-page" <?php body_class($font_size); ?>>
	
<?php if (in_array("page", $active_scripts)) {
$op_script = get_field('on_page_script', $post->ID);	
?>
<?php echo $op_script; ?>
<?php } ?>


<div class="tlw-wrapper">
	<div class="lp-bg-img hidden-xs hidden-sm" style="background-image: url(<?php echo $bg_img_url; ?>)"></div><div class="col-overlay hidden-xs hidden-sm bg-col-<?php echo (!empty($color)) ? $color : 'red'; ?>"></div><div class="striped-overlay hidden-xs hidden-sm"></div>
	
	<!-- HEADER LOGO AND NAVIGATION -->
	<header class="header" role="banner">
	 <?php include (STYLESHEETPATH . '/_/inc/global/col-strip.php'); ?>	

		<div class="header-inner">
			<p class="text-hide logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></p>
		</div>
		
			
		<div class="lp-header bg-col-<?php echo (!empty($color)) ? $color : 'red'; ?>">
			<div class="container">
				<h1 class="text-center"><?php the_title(); ?></h1>
			</div>
		</div>
				
	</header>
		
	<!-- MAIN CONTENT START -->
	<div class="container">
		
	<div class="lp-bg-img hidden-md hidden-lg" style="background-image: url(<?php echo $bg_img_url; ?>)"></div>
	
	<div class="content">