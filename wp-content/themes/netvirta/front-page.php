<?php
/**
 * The front page template file
 * Template Name: Homepage
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
	while( have_rows('homepage_content')): the_row();
		if( get_row_layout() == 'homepage_banner'):
			$banner_img = get_sub_field('banner_img');
			$heading = get_sub_field('heading');
			$foreground_image = get_sub_field('foreground_image');
?>
<div class="homepage-banner banner bg-inline" style="background-image: url('<?php echo $banner_img; ?>');">
	<div class="container">
		<div class="heading animatedParent animateOnce">
			<h1 class="animated fadeInDownShort"><?php echo $heading; ?></h1>
		</div>
		<div class="banner-img transform-50">
			<img src="<?php echo $foreground_image; ?>" alt="Verify Head Scan">
		</div>	
	</div>
</div>	 <!-- Homepage Banner -->
<?php endif; endwhile; ?>

<div class="products-services text-center animatedParent animateOnce p-sec-80">
	<div class="container p-0">
		<?php
		while( have_rows('homepage_content')): the_row();
			if( get_row_layout() == 'products_and_services'):
				while( have_rows('content')) : the_row();
				$heading = get_sub_field('heading');
				$sub_heading = get_sub_field('sub_heading');
				$link_url_heading = get_sub_field('link_url_heading');
				$link_url_sub_heading = get_sub_field('link_url_sub_heading');
		?>
		<div class="col-md-6 p-0">
			<div class="products animated fadeInRight">
				<a href="<?php echo $link_url_heading; ?>">
					<h1><?php echo $heading; ?></h1>
				</a>
			</div>
			<div class="services animated fadeInLeft">
				<a href="<?php echo $link_url_sub_heading; ?>">
					<h3><?php echo $sub_heading; ?></h3>
				</a>
			</div>
			<hr>
		</div>
		<?php endwhile; endif; endwhile;?>
	</div>
</div> <!-- Products & Services -->

<!-- Start Verifyt -->
<div class="verifyt" id="verifyt-mobile-app">
	<?php 
		while( have_rows('homepage_content')): the_row();
			if( get_row_layout() == 'verifyt_mobile_app'):
				$heading = get_sub_field('heading');
				$content = get_sub_field('content');
				$button_url = get_sub_field('button_url');
				$button_label = get_sub_field('button_label');
				$screenshot_image = get_sub_field('screenshot_image');
	?>
	<div class="col-md-6 p-0">
		<div class="verifyt-mobile">
			<div class="verifyt-mobile-img">
				<div class="verify-mobile-holder">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/styles/images/verifyt_mobile.jpg" alt="Verifyt Mobile Image Case">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/styles/images/verifyt_part1.jpg" alt="Verifyt Mobile Image Part1" class="verifyt_part1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/styles/images/verifyt_part2.jpg" alt="Verifyt Mobile Image Part2" class="verifyt_part2">
				</div>
				<div class="verify-mobile-content">
					<img src="<?php echo $screenshot_image; ?>" alt="Verifyt Mobile Image Content">
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 p-0">
		<div class="verifyt-content animatedParent animateOnce" data-sequence='100'>
			<h2 class="verifyt-heading animated fadeInLeftShort" data-id='1'><?php echo $heading; ?></h2>
			<div class="verifyt-heading-content">
				<?php echo $content; ?>
			</div>
			<div class="learn-more">
				<a href="<?php echo $button_url; ?>">
					<?php echo $button_label; ?>
				</a>
			</div>
		</div>
	</div>
	<?php endif; endwhile; ?>
</div> <!-- Verifyt Mobile App -->

<div class="verifyt" id="verifyt-platform"> 
	<div class="container">
		<?php 
			while( have_rows('homepage_content')): the_row();
				if( get_row_layout() == 'verifyt_platform'):
					$heading = get_sub_field('heading');	
					$content = get_sub_field('content');
					$button_url = get_sub_field('button_url');
					$button_label = get_sub_field('button_label');
			?>
		<div class="col-md-6 pull-right">
			<div class="verifyt-platform-icon">
				<ul class="animatedParent animateOnce" data-sequence="100">
					<?php
						$i = 1;
						while( have_rows('icon_block')): the_row();
							$label = get_sub_field('label');	
							$label_hover = get_sub_field('label_hover');
							$icon = get_sub_field('icon');
							$link_url = get_sub_field('link_url');
					?>
					<li class="animated fadeInUpShort" data-id="<?php echo $i; ?>">
						<a href="<?php echo $link_url; ?>">
							<div class="platform-content bg-inline" style="background-image: url('<?php echo $icon; ?>');">

								<span class="platform-content-desc">
									<?php echo $label; ?>
								</span>
								<span class="platform-desc-active">
									<?php echo $label_hover; ?>
								</span>	
							</div>
						</a>
					</li>
					<?php $i++; endwhile; ?>
				</ul>
			</div>
		</div>
		<div class="col-md-6">
			<div class="verifyt-content animatedParent animateOnce" data-sequence='100'>
				<h2 class="verifyt-heading animated fadeInLeftShort" data-id='1'><?php echo $heading; ?></h2>
				<div class="verifyt-heading-content">
					<?php echo $content; ?>
				</div>
				<div class="learn-more">
					<a href="#verifyt-platform-page">
						learn more
					</a>
				</div>
			</div>
		</div>
		<?php endif; endwhile;?>
	</div>
</div>	<!-- Verifyt Platform -->
<!-- End Verifyt-->

<?php
	while( have_rows('homepage_content')): the_row();
		if( get_row_layout() == 'testimonials'):
			$quote = get_sub_field('quote');	
			$author_name = get_sub_field('author_name');
			$author_title = get_sub_field('author_title');
			$background_image = get_sub_field('background_image');
?>
<div class="testimonials bg-inline animatedParent animateOnce" style="background-image: url('<?php echo $background_image; ?>');">
	<div class="container">
		
		<div class="testimonials-content transform-50">
			<div class="testimonials-quote animated fadeInDownShort">
				<span class="left-quote"></span>
					<span class="quote-content">
						<?php echo $quote; ?>
					</span>
				<span class="right-quote"></span>
			</div>
			<div class="testimonials-founder animated fadeInUpShort delay-500">
				<?php echo $author_name; ?><span class="lighter-font"><?php echo ' '.$author_title; ?></span>
			</div>
		</div>
	</div>
</div> <!-- Testimonials -->
<?php endif; endwhile; ?>

<?php
	while( have_rows('homepage_content')): the_row();
		if( get_row_layout() == 'request_demo'):
			$background_image = get_sub_field('background_image');	
			$heading = get_sub_field('heading');
			$button_url = get_sub_field('button_url');
			$button_label = get_sub_field('button_label');
?>
<div class="request-demo bg-inline" style="background-image: url('<?php echo $background_image; ?>');">
	<div class="col-md-offset-6 col-md-6 request-demo-content">
		<div class="request-demo-context transform-50 animatedParent animateOnce">
			<h1 class="animated fadeInDownShort"><?php echo $heading; ?></h1>
			<div class="learn-more animated fadeInUpShort delay-500">
				<a href="<?php echo $button_url; ?>">
					<?php echo $button_label; ?>
				</a>
			</div>
		</div>
	</div>
</div> <!-- Request Demo -->
<?php endif; endwhile; ?>

<?php get_footer();
