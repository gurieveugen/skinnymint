<?php
/**
 * @package WordPress
 * @subpackage Base_Theme
 */
?>

<?php get_header(); ?>

<div id="main" class="main-blog container">
	<div class="clearfix">
		<div class="content-blog">
			<div class="h-posts-feed">
				<!-- Posts feed -->
				<?php echo do_shortcode( '[posts_feed]' ); ?>
				<!-- Posts feed end -->
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<!-- Editor's picks -->
	<?php echo do_shortcode('[editors_picks]'); ?>
	<!-- Editor's picks end -->
	
	<!-- Instagram feed -->
	<?php echo do_shortcode('[instagram_feed]'); ?>
	<!-- Instagram feed end -->
</div>

<?php get_footer(); ?>