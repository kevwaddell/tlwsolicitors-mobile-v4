<section class="page-content post-list">

			<h3 class="icon-header red mag-bot-0">
			<?php
			if ( is_day() ) :
			printf( __( 'Daily Archives: %s', 'tlwsolicitors' ), get_the_date() );
			elseif ( is_month() ) :
			printf( __( 'Monthly Archives: %s', 'tlwsolicitors' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'tlwsolicitors' ) ) );
			elseif ( is_year() ) :
			printf( __( 'Yearly Archives: %s', 'tlwsolicitors' ), get_the_date( _x( 'Y', 'yearly archives date format', 'tlwsolicitors' ) ) );
			else :
			_e( 'Archives' );
			endif;
			?>
			</h3>
			
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
			<h3 class="text-center">Sorry</h3>
			<p class="text-center">There is no archived news at the moment.</p>
			<?php endif; ?>
	
</section>
