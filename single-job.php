<?php
/**
 *
 * @package WordPress
 * @subpackage dBx
 */
get_header(); ?>

	<div class="pagewrap container">
		<div class="row">		
			<div class="span8 main-content">
				<div class="page_content content-margin">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
						<h1 class="entry-title">Job Description</h1>
						<h2> <?php the_title(); ?></h2>
						<?php the_post_thumbnail( 'full' ); ?>
						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					</div><!-- #post-## -->
				<?php endwhile; // end of the loop. ?>
				</div>	
			</div>

			<div class="span4 content-margin event-sidebar">
				
				<div class="row">
					<div class="span4">
						<a class="sidebar-button" href="mailto:katie@dbfestival.com" target="_blank"><h1>SEND RESUME</h1></a>
					</div>
				</div>

				<div class="row">
					<div class="span4">
						<?php
							if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Volunteer Sidebar') ) : else :
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	
<?php	get_footer(); ?>