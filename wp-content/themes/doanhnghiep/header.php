<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/images/favicon.ico">

	<?php $url_site =  get_site_url('null','/wp-content/themes/doanhnghiep', 'http');  ?>
	<!-- css -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animate.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
	<!-- js -->
	<script src="<?php echo BASE_URL; ?>/js/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
	<?php wp_head(); ?>
</head>


<body <?php body_class() ?>>

	<div class="bg_opacity"></div>

	<?php if ( wp_is_mobile() ) { ?>
		<div id="menu_mobile_full">
			<nav class="mobile-menu">
				<p class="close_menu"><span><i class="fa fa-times" aria-hidden="true"></i></span></p>
				<?php 
				$args = array('theme_location' => 'menu_mobile');
				?>
				<?php wp_nav_menu($args);?>
			</nav>
		</div>
	<?php }?>

	<header class="header">
		<div class="top_header">
			<!-- display account top_header mobile -->
	
			<span class="icon_mobile_click"><i class="fa fa-bars" aria-hidden="true"></i></span>
			<div class="container">
				<div class="logo_site">
					<?php 
					if(has_custom_logo()){
						the_custom_logo();
					}
					else { ?> 
						<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
					<?php } ?>
				</div>
				<div class="tg_language">
						<ul class="site-lang">
							<?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?>
						</ul>
					</div>
				<div class="search_header">
						<div class="btn-click-search">
							<i class="fa fa-search"></i>
						</div>
						<?php get_search_form(); ?>
						
					</div>
					<nav class="nav nav_primary">
					<?php 
					$args = array('theme_location' => 'primary');
					?>
					<?php wp_nav_menu($args); ?>
				</nav>
					
			</div>
		</div>
			<?php if(is_front_page() && !is_home()){ ?>
				<div class="tg_commit">
					<div class="container">
						<div class="wrap_ul_commit">
							<ul class="row">
								<?php if(get_option('idx_commit_title_one')  ){ ?>
								<li class="col-sm-4">
									<div class="wrap_commit">
										<figure class="thumbnail"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></figure>
										<div class="textwidget">
											<p><?php echo get_option('idx_commit_title_one'); ?> </p>
											<span><?php echo get_option('idx_commit_desc_one'); ?></span>	
										</div>
									</div>
								</li>
								<?php } ?>
								<?php if(get_option('idx_commit_title_two')  ){ ?>
								<li class="col-sm-4">
									<div class="wrap_commit">
										<figure class="thumbnail"><i class="fa fa-star-o" aria-hidden="true"></i></figure>
										<div class="textwidget">
											<p><?php echo get_option('idx_commit_title_two'); ?> </p>
											<span><?php echo get_option('idx_commit_desc_two'); ?></span>
										</div>
									</div>
								</li>
								<?php } ?>
								<?php if(get_option('idx_commit_title_two')  ){ ?>
								<li class="col-sm-4">
									<div class="wrap_commit">
										<figure class="thumbnail"><i class="fa fa-phone" aria-hidden="true"></i></figure>
										<div class="textwidget">
											<p><?php echo get_option('idx_commit_title_three'); ?> </p>
											<span><?php echo get_option('idx_commit_desc_three'); ?></span>
										</div>

									</div>
								</li>
								<?php } ?>
							</ul>
						</div>

					</div>
				</div>
			<?php } ?>
		</header>



