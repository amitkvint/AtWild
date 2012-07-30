<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
    <p>Diseño Web y mas cosas</p>
    <div id="fixed" class="widget-area">
    <ul>
    <li id="permanent">
    <a href="http://www.wpclases.wordpress.com" title="Trucos CSS Amit Kvint" target="_blank">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wpclases.png" width="150" height="200"/></a>
    </li>
    </ul>

		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<aside id="archives" class="widget">
                	
                    <h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>

						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
            
           

		</div><!-- #secondary .widget-area -->
<?php endif; ?>