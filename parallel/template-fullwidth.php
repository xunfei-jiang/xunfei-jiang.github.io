<?php
/**
 Template Name: Full-width Template
 * Pages for our theme
 *
 * @package WordPress
 * @subpackage Parallel
 * @since Parallel 1.0
 */
?>
<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<div class="content">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					     <h2 class="entry-title"><?php the_title(); ?></h2>
					    
						     <div class="entry">

								<?php the_content(); ?>

						     </div>
					     
					 </div>
					
					 <?php endwhile;?>

				 <?php endif; ?>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>