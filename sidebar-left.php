<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Indrajeet
 */



global $indrajeet_sidebar_left_size;
if ($indrajeet_sidebar_left_size == null || !is_numeric($indrajeet_sidebar_left_size)) {
    $indrajeet_sidebar_left_size = 3;
}


if ( ! is_active_sidebar( 'Sidebar-2' ) ) {
	return;
}
?>

<aside id="sidebar-left" class="widget-area col-md-<?php echo $indrajeet_sidebar_left_size; ?>">
	<?php dynamic_sidebar( 'Sidebar-2' ); ?>
</aside><!-- #secondary -->
