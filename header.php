<?php
/**
 * @package WordPress
 * @subpackage Base_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic&subset=latin,greek-ext,greek,latin-ext,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
	<link media="all" rel="stylesheet" type="text/css" href="<?php echo TDU; ?>/css/all.css">
	<title><?php echo (wp_title( ' ', false, 'right' ) == '') ? get_bloginfo('name') : wp_title( ' ', false, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); 
		wp_head(); ?>
	<script type="text/javascript" src="js/jquery.main.js" ></script>
	<!--[if lt IE 9]>
		<script src="<?php echo TDU; ?>/js/html5shiv.min.js"></script>
		<script src="<?php echo TDU; ?>/js/respond.min.js"></script>
		<![endif]-->
		<!--[if lte IE 9]>
		<script type="text/javascript" src="<?php echo TDU; ?>/js/jquery.placeholder.min.js"></script>
		<script type="text/javascript">
			jQuery(function(){
				jQuery('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	<script>
	jQuery(window).scroll(function(){
		if(jQuery(window).scrollTop() > 100){
			jQuery('header-cart-items').css({position:fixed, top: 0});
		}
	});
	</script>
</head>
<body <?php body_class(); ?>>
		<div id="spree-header">
			<div id="nav-notification">
				<div class="container">
					<nav class="navbar" id="top-nav-bar">
						<ul id="localization-selector" class="list-inline list-unstyled pull-left col-md-3 col-sm-6 col-xs-12">
							<li id="locale-select" class="small" data-hook="">
								<form accept-charset="UTF-8" action="/locale/set" method="post">
									<div style="display:none"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="WJfVDuTAUjhVF14UchIwIjyExd6h9KK8oTeY3rqEu1U="></div>
									<div class="select2-container select2" id="s2id_locale">
										<a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">English</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1">
										<div class="select2-drop select2-display-none select2-with-searchbox">
											<div class="select2-search">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>
											<ul class="select2-results" role="listbox" id="select2-results-1">   </ul>
										</div>
									</div>
									<select class="select2 select2-offscreen" data-href="/locale/set" id="locale" name="locale" tabindex="-1" title="">
										<option value="es">Español</option>
										<option value="fr">Français</option>
										<option value="zh-CN">中文(简体)</option>
										<option selected="selected" value="en">English</option>
									</select>
									<noscript>
										&lt;input name="commit" type="submit" value="Save changes" /&gt;
									</noscript>
								</form>
							</li>
							<li id="currency-select" class="small" data-hook="">
								<form accept-charset="UTF-8" action="/currency/set.html" method="post">
									<div style="display:none"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="WJfVDuTAUjhVF14UchIwIjyExd6h9KK8oTeY3rqEu1U="></div>
									<div class="select2-container" id="s2id_currency">
										<a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-3"><img class="flag currency-usd" src="<?php echo TDU; ?>/images/blank.gif"> <span>USD</span></span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3">
										<div class="select2-drop select2-display-none select2-with-searchbox">
											<div class="select2-search">       <label for="s2id_autogen3_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="">   </div>
											<ul class="select2-results" role="listbox" id="select2-results-3">   </ul>
										</div>
									</div>
									<select class="select2-currency select2-offscreen" data-href="/currency/set" id="currency" name="currency" tabindex="-1" title="">
										<option value="SGD">Singapore</option>
										<option selected="selected" value="USD">USA</option>
										<option value="EUR">Europe</option>
										<option value="AUD">Australia</option>
										<option value="GBP">United Kingdom</option>
										<option value="PHP">Philippines</option>
										<option value="THB">Thailand</option>
										<option value="MYR">Malaysia</option>
										<option value="JPY">Japan</option>
										<option selected="selected" value="USD">Rest of World</option>
									</select>
									<noscript>
										&lt;input name="commit" type="submit" value="Save changes" /&gt;
									</noscript>
								</form>
							</li>
						</ul>
						<div id="shipping-notification" class="col-md-6">
							Free express delivery within Ukraine!
						</div>
						<ul id="nav-bar" class="nav small pull-right hidden-sm hidden-xs" data-hook="">
							<li id="link-to-login"><a href="/login">Log In</a></li>
							<li id="link-to-signup"><a href="/signup">Sign Up</a></li>
							<li id="search-bar" data-hook="">
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<header id="header" data-hook="">
				<nav>
					<div class="navbar" id="main-nav-bar">
						<div class="container">
							<figure class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="logo">
								<a href="/"><img alt="Logo" src="<?php echo TDU; ?>/images/logo.png"></a>
							</figure>
							<div class="col-lg-9 col-md-9 col-sm-8 col-xs-6">
								<div id="nav-bar-quick-links">
									<div class="cart pull-right">
										<div data-hook="" id="link-to-cart">
											<a class="cart-info full" href="/cart">
												<div class="cart-icon">&nbsp;</div>
												<span class="cart-count">1</span>
											</a>
										</div>
										<script>
											Spree.fetch_cart()
											 
										</script>
									</div>
									<div class="menu-toggle">
										<button class="navbar-toggle" data-target="#nav-bar-collapse" data-toggle="collapse" type="button">
											<span class="sr-only">Toggle Menu</span>
											<div class="icon-bars">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</div>
											<span class="note">Menu</span>
										</button>
									</div>
									<div class="page-links pull-right hidden-sm hidden-xs">
										<ul class="nav navbar-nav" id="nav-bar">
											<li>
												<a href="/products" id="shop-link">Shop</a>
											</li>
											<li><a href="/love_board">Love Board</a></li>
											<li><a href="/reviews">Reviews</a></li>
											<li class="current open-drop"><a href="#">Lifestyle</a></li>
											<li class=""><a href="/ambassadors">Ambassadors</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hidden-lg">
						<div class="collapse navbar-collapse" id="nav-bar-collapse">
							<ul class="nav navbar-nav" id="nav-bar">
								<li>
									<a href="/products">Shop</a>
								</li>
								<li class="current"><a href="/reviews">Real Results</a></li>
								<li class=""><a href="/love_board">Love Board</a></li>
								<li class=""><a href="/ambassadors">Ambassadors</a></li>
							</ul>
							<ul class="nav navbar-nav">
								<li>
									<div id="localization">
										<ul id="localization-selector" class="list-inline list-unstyled pull-left col-md-3 col-sm-6 col-xs-12">
											<li id="locale-select" class="small" data-hook="">
												<form accept-charset="UTF-8" action="/locale/set" method="post">
													<div style="display:none"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="WJfVDuTAUjhVF14UchIwIjyExd6h9KK8oTeY3rqEu1U="></div>
													<div class="select2-container select2" id="s2id_locale">
														<a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">English</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
														<div class="select2-drop select2-display-none select2-with-searchbox">
															<div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>
															<ul class="select2-results" role="listbox" id="select2-results-2">   </ul>
														</div>
													</div>
													<select class="select2 select2-offscreen" data-href="/locale/set" id="locale" name="locale" tabindex="-1" title="">
														<option value="es">Español</option>
														<option value="fr">Français</option>
														<option value="zh-CN">中文(简体)</option>
														<option selected="selected" value="en">English</option>
													</select>
													<noscript>
														&lt;input name="commit" type="submit" value="Save changes" /&gt;
													</noscript>
												</form>
											</li>
											<li id="currency-select" class="small" data-hook="">
												<form accept-charset="UTF-8" action="/currency/set.html" method="post">
													<div style="display:none"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="WJfVDuTAUjhVF14UchIwIjyExd6h9KK8oTeY3rqEu1U="></div>
													<div class="select2-container" id="s2id_currency">
														<a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4"><img class="flag currency-usd" src="<?php echo TDU; ?>/images/blank.gif"> <span>USD</span></span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
														<div class="select2-drop select2-display-none select2-with-searchbox">
															<div class="select2-search">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>
															<ul class="select2-results" role="listbox" id="select2-results-4">   </ul>
														</div>
													</div>
													<select class="select2-currency select2-offscreen" data-href="/currency/set" id="currency" name="currency" tabindex="-1" title="">
														<option value="SGD">Singapore</option>
														<option selected="selected" value="USD">USA</option>
														<option value="EUR">Europe</option>
														<option value="AUD">Australia</option>
														<option value="GBP">United Kingdom</option>
														<option value="PHP">Philippines</option>
														<option value="THB">Thailand</option>
														<option value="MYR">Malaysia</option>
														<option value="JPY">Japan</option>
														<option selected="selected" value="USD">Rest of World</option>
													</select>
													<noscript>
														&lt;input name="commit" type="submit" value="Save changes" /&gt;
													</noscript>
												</form>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<ul class="nav navbar-nav">
								<li id="link-to-login"><a href="/login">Log In</a></li>
								<li id="link-to-signup"><a href="/signup">Sign Up</a></li>
							</ul>
						</div>
					</div>
					<div class="row" id="products-slider" style="display: none;">
						<div class="col-md-8 col-md-offset-2 hidden-sm hidden-xs">
							<a class="arrow left">
							<span class="fa fa-chevron-left"></span>
							</a>
							<ul class="list-unstyled">
								<li class="product">
									<a href="/products/double_boost">
									<img alt="Dboost" src="https://s3-ap-southeast-1.amazonaws.com/skinnymint-production/app/public/spree/products/42/product/dboost.png?1418094035">
									<span class="product-name">
									Double Boost
									</span>
									</a>
								</li>
								<li class="product">
									<a href="/products/28-day-ultimate-teatox">
									<img alt="28 day 01" src="https://s3-ap-southeast-1.amazonaws.com/skinnymint-production/app/public/spree/products/4/product/28_Day-01.png?1409886247">
									<span class="product-name">
									28 Day Ultimate Teatox
									</span>
									</a>      
								</li>
								<li class="product">
									<a href="/products/besties-value-teatox-2x28-day-test">
									<img alt="Besties 01" src="https://s3-ap-southeast-1.amazonaws.com/skinnymint-production/app/public/spree/products/7/product/Besties-01.png?1409886276">
									<span class="product-name">
									Besties Value Teatox (2x28 Day)
									</span>
									</a>      
								</li>
								<li class="product">
									<a href="/products/14-day-starter-teatox">
									<img alt="14 day 01" src="https://s3-ap-southeast-1.amazonaws.com/skinnymint-production/app/public/spree/products/1/product/14_Day-01.png?1409886217">
									<span class="product-name">
									14 Day Starter Teatox
									</span>
									</a>      
								</li>
								<li class="product">
									<a href="/products/morning-boost">
									<img alt="M boost 01" src="https://s3-ap-southeast-1.amazonaws.com/skinnymint-production/app/public/spree/products/10/product/M-Boost-01.png?1409886304">
									<span class="product-name">
									Morning Boost
									</span>
									</a>      
								</li>
								<li class="product">
									<a href="/products/night-cleanse">
									<img alt="N cleanse 01" src="https://s3-ap-southeast-1.amazonaws.com/skinnymint-production/app/public/spree/products/13/product/N-Cleanse-01.png?1409886332">
									<span class="product-name">
									Night Cleanse
									</span>
									</a>      
								</li>
							</ul>
							<a class="arrow right">
							<span class="fa fa-chevron-right"></span>
							</a>
						</div>
					</div>
				</nav>
			</header>
			<div class="header-row">
				<div class="container">
					<form action="#" class="form-search">
						<button class="btn-search">Search</button>
						<div class="holder">
							<input type="text" value="" placeholder="Search and press Enter">
						</div>
					</form>
					<script>
						jQuery(function(){
							jQuery('.btn-search').click(function(){
								jQuery('.form-search .holder').toggleClass('open');
								return false;
							});
						});
					</script>
					<ul class="nav-sub">
						<li><a href="#">Tips</a></li>
						<li><a href="#">Recipe</a></li>
						<li><a href="#">Fitness</a></li>
						<li><a href="#">Tea</a></li>
						<li><a href="#">Weight Loss</a></li>
						<li class="has-drop">
							<a href="#">Experts</a>
							<ul>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="wrapper">
			<div id="content">