<?php
/**
 * @package WordPress
 * @subpackage Base_theme
 */
?>
<?php if ( is_active_sidebar('right-sidebar-inner') ) : ?>
<div class="sidebar-blog">
	<?php dynamic_sidebar( 'right-sidebar-inner' ); ?>
</div>
<?php endif; ?>
