<?php include (STYLESHEETPATH . '/_/inc/for-business-global/head-html.php'); ?>	

<body id="<?php echo $dir ?>" <?php body_class($font_size); ?>>
<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLBR4F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PLBR4F');</script>
<!-- End Google Tag Manager -->
<?php } ?>

<nav id="side-nav" class="animated nav-closed">
	<button id="close-nav" class="btn btn-block"><i class="fa fa-arrow-circle-left fa-2x"></i></button>
	<div class="nav-wrapper">
		<?php wp_nav_menu(array( 
		'container' => 'false', 
		'menu' => 'Main Navigation', 
		'menu_class'  => 'menu clearfix list-unstyled',
		'fallback_cb' => false ) ); 
		?>
	</div>
</nav>

<div class="tlw-wrapper nav-closed">
	
	<?php include (STYLESHEETPATH . '/_/inc/xmas/xmas-popup-banner.php'); ?>
	
	<!-- HEADER LOGO AND NAVIGATION -->
	<?php include (STYLESHEETPATH . '/_/inc/for-business-global/biz-masthead.php'); ?>	
		
	<?php if (!is_page('services-for-business')) { ?>
	<div class="header-border"></div>
	<?php }  ?>