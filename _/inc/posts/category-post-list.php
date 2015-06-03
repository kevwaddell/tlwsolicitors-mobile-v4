<section class="page-content post-list">
			
	<h3 class="icon-header red mag-bot-0"><?php single_cat_title(); ?></h3>
	
	<?php if ( have_posts() ): ?>
		
			<?php while ( have_posts() ) : the_post(); 
			$month = get_the_date('M');
			$day = get_the_date('j');
			$year = get_the_date('Y');
			?>	
		
			
	<article <?php post_class(); ?>>
		<a href="<?php esc_url( the_permalink() ); ?>" title="View: <?php the_title_attribute(); ?> article" rel="bookmark">
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
			<span class="month"><?php echo $month; ?></span>
			<span class="day"><?php echo $day; ?></span>
			<span class="year"><?php echo $year; ?></span>
		</time>
		<h4><?php the_title(); ?></h4>
		<?php the_excerpt(); ?>
		</a>
	</article>

	<?php endwhile; ?>
	
				
	<div class="page-links">
		<?php wp_pagenavi(); ?>
	</div>
	
	
	<?php else: ?>
	<div class="well text-center">
		<h3>Sorry</h3>
		<p>There is no <strong><?php single_cat_title(); ?></strong> at the moment.</p>
	</div>
	<?php endif; ?>

</section>