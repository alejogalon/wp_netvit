<?php
/*
Template Name: Case Studies
*/
get_header();
?>

<div class="case-studies">
<?php
	while( have_rows('case_studies_page_content')): the_row();
		if( get_row_layout() == 'case_studies_banner'):
				$banner_img = get_sub_field('banner_img');
				$heading = get_sub_field('heading');
?>
	<div class="case-studies-banner bg-inline banner" style="background-image: url('<?php echo $banner_img; ?>');">
		<div class="heading">
			<h1><?php echo $heading; ?></h1>
		</div>
	</div><!-- Case Studies Banner End-->
<?php endif; endwhile; ?>

<?php
	while( have_rows('case_studies_page_content')): the_row();
		if( get_row_layout() == 'case_studies_contents'):
			while( have_rows('case_study_contents')): the_row();
				$logo = get_sub_field('logo');
				$heading = get_sub_field('heading');
				$background = get_sub_field('background');
?>
	<div class="case-studies-contents p-sec-80" style="background-color: <?php echo $background; ?>">
		<div class="container content">
			<div class="logo text-center">
				<img src="<?php echo $logo; ?>" alt="logo">
			</div>
			<div class="heading text-center">
				<?php echo $heading; ?>
			</div>
			<?php 
				while( have_rows('content')): the_row();
					$contents = get_sub_field('contents');	
			?>
			<div class="contents">
				<?php echo $contents; ?>
			</div>	
			<?php endwhile; ?>
		</div>
	</div>
<?php endwhile; endif; endwhile; ?>
</div>
<?php get_footer(); ?>