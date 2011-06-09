
<?php get_header(); ?>
	
		<div id="container">	
			<div id="content">
			
<?php the_post(); ?>			
			
<?php rewind_posts(); ?>
			
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
				</div><!-- #nav-above -->
<?php } ?>			

<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="entry-meta">
						<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
						<?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
					</div><!-- .entry-meta -->
					
					<div class="entry-content">
<?php the_content()?>
					</div><!-- .entry-content -->

					<div class="entry-utility">
					</div><!-- #entry-utility -->	
				</div><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>			

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
				</div><!-- #nav-below -->
<?php } ?>			
			
			</div><!-- #content -->		
		</div><!-- #container -->
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>
