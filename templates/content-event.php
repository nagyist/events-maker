<?php
/**
 * The template for displaying event content within loops.
 *
 * Override this template by copying it to yourtheme/content-event.php
 *
 * @author 	Digital Factory
 * @package Events Maker/Templates
 * @since 	1.1.0
 */
 
if (!defined('ABSPATH')) exit; // Exit if accessed directly

// Extra event classes
$classes = apply_filters('em_loop_event_classes', array('hcalendar'));

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
		
		<?php
		/**
		 * em_before_loop_event hook
		 * 
		 * @hooked em_display_event_thumbnail - 10
		 */
		do_action('em_before_loop_event');
		?>

	    <header class="entry-header">
	    	
	    	<?php
			/**
			 * em_before_loop_event_title hook
			 * 
			 * @hooked em_display_event_categories - 10
			 */
			do_action ('em_before_loop_event_title');
			?>

	        <h3 class="entry-title summary">
	        	
	        	<a href="<?php the_permalink(); ?>" class="url" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	        	
	        </h3>
	        
	        <?php
			/**
			 * em_after_loop_event_title hook
			 * 
			 * @hooked em_display_loop_event_meta - 10
			 * @hooked em_display_event_locations - 20
			 * @hooked em_display_event_organizers - 30
			 */
			do_action ('em_after_loop_event_title');
			?>

	    </header>
		
		<?php
		/**
		 * em_after_loop_event hook
		 * 
		 * @hooked em_display_event_excerpt - 10
		 * @hooked em_display_event_tags - 20
		 */
		do_action('em_after_loop_event');
		?>
	
	</article>