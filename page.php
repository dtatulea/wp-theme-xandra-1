<?php get_header(); ?>
	
		<div id="container">	
			<div id="content">
		
<?php the_post(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>					
<?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
					</div><!-- .entry-content -->
				</div><!-- #post-<?php the_ID(); ?> -->			
			</div><!-- #content -->		
		</div><!-- #container -->
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>
