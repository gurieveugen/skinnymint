<?php
get_header(); 
the_post();
Posts::read(get_the_id()); 
$categories = Posts::getCategories(get_the_id());
$cat_names  = array();
$user = get_user_by('id', get_current_user_id());
$category = '';

if(count($categories))
{
	$category = $categories[0]->term_id;
	foreach ($categories as $cat) 
	{
		$cat_names[] = $cat->name; 	
	}
}
?>

<div id="main" class="main-blog-post container">
	<div class="clearfix">
		<div class="content-blog">
			<article class="article-blog content-style">
				<h1 class="title-article"><?php the_title(); ?></h1>
				<div class="b-info-post clearfix">
					<div class="info">
						<strong class="r"><?php echo implode(' ', $cat_names); ?></strong>
						<span class="r"><?php echo $user->data->display_name; ?></span>
					</div>
					<div class="shares"> 
						<strong><?php echo Share::getSumCount(get_the_id()); ?></strong>
						Shares
					</div>
					<ul class="b-socials">
						<li><a href="<?php echo Share::getTwitter(get_the_id()); ?>" class="twitter share-blank">twitter</a></li>
						<li><a href="<?php echo Share::getFacebook(get_the_id()); ?>" class="facebook share-blank">facebook</a></li>
						<li><a href="<?php echo Share::getPinterest(get_the_id()); ?>" class="pinterest share-blank">pinterest</a></li>
					</ul>
				</div>
				<div class="b-post-heading clearfix">
					<?php
					if(has_post_thumbnail() && get_post_meta(get_the_id(), 'ai_has_a_video', true ) != 'on')
					{
						?>
						<div class="image">
						<?php the_post_thumbnail( 'medium' ); ?>
						</div>
						<?php
					}
					?>
					<div class="text">
						<div class="row-soc clearfix">
							<strong class="b-love right"><?php echo Posts::getLikes(get_the_id()); ?></strong>
							<div class="left">
								facebook like
							</div>
						</div>
						<?php the_excerpt(); ?>
					</div>
				</div>
				<?php the_content(); ?>
				<div class="b-post-socials">
					<div class="row-soc">facebook like</div>
					<div class="row-soc">
						<a href="<?php echo Share::getFacebook(get_the_id()); ?>" class="btn-fshare share-blank">Share this story</a>
						<a href="<?php echo Share::getTwitter(get_the_id()); ?>" class="btn-tweet share-blank">Tweet this story</a>
					</div>
				</div>
				<?php echo do_shortcode('[related_articles category="'.$category.'"]'); ?>
				<section class="section-comments">
					<h2>Comments</h2>
					<div id="disqus_thread"></div>
					<script type="text/javascript">
					    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
					    var disqus_shortname = 'skinnymint'; // required: replace example with your forum shortname

					    /* * * DON'T EDIT BELOW THIS LINE * * */
					    (function() {
					        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					    })();
					</script>
					<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					
					<!-- <img src="<?php echo TDU; ?>/images/temp-comments.png" alt=""> -->
				</section>
			</article>
		</div>
		<?php get_sidebar('inner'); ?>
	</div>
</div>
<div class="section-promo">
	<div class="container">
		<div class="dt">
			<div class="dtc image">
				<img src="<?php echo TDU; ?>/images/temp-product.png" alt="">
			</div>
			<div class="dtc content">
				<h3>Get Started Now</h3>
				<p>Change your lifestyle now with original 2 step natural tea program and achieve the best natural cleansing, energy boosting and detoxifying effects.</p>
				<div class="buttons">
					<a href="#" class="btn-pink">Buy Now</a>
					<a href="#" class="link">View All Products</a>
				</div>
			</div>
		</div>
	</div>
</div>
			

<?php get_footer(); ?>
