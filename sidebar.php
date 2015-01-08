<?php
/**
 * @package WordPress
 * @subpackage Base_theme
 */
?>
<?php if ( is_active_sidebar('right-sidebar') ) : ?>
<div class="sidebar-blog">
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</div>
<?php endif; ?>
