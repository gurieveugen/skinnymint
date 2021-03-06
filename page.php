<?php
/**
 *
 * @package WordPress
 * @subpackage Base_Theme
 */
?>
<?php get_header(); ?>
<div id="main" class="main-page container">
<div class="content-blog">
	<article class="article-blog content-style">
		<?php if ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page_header">
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<div class="page-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>

					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="page-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'theme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
				</div><!-- .entry-content -->

				<footer class="entry-meta">
					<?php edit_post_link( __( 'Edit', 'theme' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-meta -->
			</article><!-- #post -->
			<?php comments_template(); ?>
		<?php endif; ?>
	</article>
</div>
<?php get_sidebar('inner'); ?>
</div>
<?php get_footer(); ?>
