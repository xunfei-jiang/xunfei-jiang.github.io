<?php
/**
 * 404 Page for our theme
 *
 * @package WordPress
 * @subpackage Parallel
 * @since Parallel 1.0
 */
?>

<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?>">

			<div class="content">
				
			
                <h2><?php _e('Error 404 : Page not found!', 'parallel'); ?></h2>

                <p><?php _e('The page you\'re trying to locate is missing or can\'t be found.', 'parallel'); ?></p>
			

			</div>

		</div>

		<?php get_sidebar(); ?>

	</div>
	
</div>

<?php get_footer(); ?>






