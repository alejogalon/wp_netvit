<?php
/*
Template Name: Platform
*/
get_header();
?>

<div class="platform">
<?php
while( have_rows('platform_page_content')): the_row();
	if( get_row_layout() == 'platform_banner'):
		$heading = get_sub_field('heading');
		$subheading = get_sub_field('subheading');
		$banner_img = get_sub_field('banner_img');	
?>
	<div class="platform-banner banner">
		<div class="heading">	
			<h1><?php echo $heading; ?></h1>
			<div class="sub-heading">
				<?php echo $subheading; ?>
			</div>
		</div>
		<div class="banner bg-inline" style="background-image: url('<?php echo $banner_img; ?>');">
			<span class="sr-only">Banner Background Image</span>		
		</div>
	</div>
<?php endif; endwhile; ?>

	<div class="verifyt-platform-page p-sec-80 text-center">
		<div class="container">
		<?php
			while( have_rows('platform_page_content')): the_row();
			if( get_row_layout() == 'verifyt_platform'):
				$heading = get_sub_field('heading');
				$subheading = get_sub_field('subheading');
		?>
			<div class="content">
				<div class="heading">
					<h1><?php echo $heading; ?></h1>
				</div>
				<div class="sub-heading">
					<?php echo $subheading; ?>
				</div>

				<div class="tab-holder-content text-center">
					<div class="tab-content-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/styles/images/verifyt_platform1.png" alt="Verifyt">
					</div>
					<div class="tab-holder">
						<ul class="tab-nav" role="tablist">
						<?php
						 $cntr = 0; 
							while( have_rows('features')): the_row();
								$label = get_sub_field('label');
								$icon = get_sub_field('icon');
								$tab_url = get_sub_field('tab_url');
						?>
							<li class="<?php echo ($cntr == 0) ? 'active' : '' ?>">
								<a href="#<?php echo $tab_url; ?>" data-toggle="pill" aria-controls="<?php echo $tab_url; ?>" role="tab" data-toggle="tab">
									<div class="tab-img bg-inline" style="background-image: url('<?php echo $icon; ?>');">

										<span class="tab-desc">
											<?php echo $label; ?>
										</span>
									</div>
								</a>
							</li>
						<?php $cntr++; endwhile; ?>	
						</ul>

						<div class="tab-content">
							<?php
								$cntr = 0; 
								while( have_rows('features')): the_row();
									$tab_url = get_sub_field('tab_url');
									$tab_content = get_sub_field('tab_content');
									$tab_content_img = get_sub_field('tab_content_img');
							?>
								<div id="<?php echo $tab_url; ?>" class="tab-pane afterclear fade in <?php echo ($cntr == 0) ? 'active' : '' ?>">
							      	<div class="col-md-3 feature-img">
							      		<img src="<?php echo $tab_content_img; ?>" class="transform-50" alt="features icon">
							      	</div>
							      	<div class="col-md-9 feature-desc">
							      		<?php echo $tab_content ?>
							      	</div>
							    </div>
							<?php $cntr++; endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		  <?php endif; endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>