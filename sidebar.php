<?php
/**
 * Title: Sidebar Template
 *
 * Description: Defines sidebar content.
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category Cyber Chimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
?>

<div id="secondary" <?php cyberchimps_filter_sidebar_right_class(); ?>>
	
	<?php do_action( 'cyberchimps_before_sidebar' ); ?>

	<div id="sidebar">
	<?php if ( !dynamic_sidebar( 'sidebar-right' ) ) : ?>
		
		<div class="widget-container">    
			<h3 class="widget-title"><?php _e('Pages', 'fit-essential' ); ?></h3>
			<ul>
    			<?php wp_list_pages('title_li=' ); ?>
    		</ul>
    	</div>
    
		<div class="widget-container">    
    		<h3 class="widget-title"><?php _e( 'Archives', 'fit-essential' ); ?></h3>
    		<ul>
    			<?php wp_get_archives('type=monthly'); ?>
    		</ul>
    	</div>
        
		<div class="widget-container">
			<h3 class="widget-title"><?php _e('Categories', 'fit-essential' ); ?></h3>
			<ul>
				<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>
        </div>
        
        <div class="widget-container">
        	<h3 class="widget-title"><?php _e('WordPress', 'fit-essential' ); ?></h3>
        	<ul>
        		<?php wp_register(); ?>
        		<li><?php wp_loginout(); ?></li>
        		<li><a href="<?php echo esc_url( __('http://wordpress.org/', 'fit-essential' )); ?>" target="_blank" title="<?php esc_attr_e('Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'fit-essential'); ?>"> <?php _e('WordPress', 'fit-essential' ); ?></a></li>
        		<?php wp_meta(); ?>
    		</ul>
		</div>
		
		<div class="widget-container">
			<h3 class="widget-title"><?php _e('Subscribe', 'fit-essential' ); ?></h3>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)', 'fit-essential' ); ?></a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)', 'fit-essential' ); ?></a></li>
			</ul>
		</div>
		
	<?php endif; ?>
	</div><!-- #sidebar -->
	
	<?php do_action( 'cyberchimps_after_sidebar' ); ?>
	
</div><!-- #secondary -->