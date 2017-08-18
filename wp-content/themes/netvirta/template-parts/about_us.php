<?php
/*
Template Name: About Us
*/
get_header();
?>

<div class="about-us">
<?php
while( have_rows('about_us_content')): the_row();
	if( get_row_layout() == 'about_us_banner'):
		$heading = get_sub_field('heading');
		$banner_img = get_sub_field('banner_img');
?>
	<div class="about-us-banner banner bg-inline" style="background-image: url('<?php echo $banner_img; ?>');">
		<div class="heading">
			<h1><?php echo $heading; ?></h1>
		</div>
	</div>
<?php endif; endwhile; ?>
	<div class="company-overview p-sec-80">
		<div class="container">
			<?php
			while( have_rows('about_us_content')): the_row();
				if( get_row_layout() == 'company_overview'):
					$heading = get_sub_field('heading');
					$column_1 = get_sub_field('column_1');
					$column_2 = get_sub_field('column_2');	
			?>
			<div class="heading text-center">
				<h1><?php echo $heading; ?></h1>
			</div>
			<div class="col-md-6 column-content">
				<?php echo $column_1; ?>
			</div>
			<div class="col-md-6 column-content">
				<?php echo $column_2; ?>
			</div>
			<?php endif; endwhile; ?>			
		</div>
	</div>
<?php
	while( have_rows('about_us_content')): the_row();
		if( get_row_layout() == 'about_us_team'):
			$heading = get_sub_field('heading');
			$background = get_sub_field('background');
?>
	<div class="about-us-team p-sec-80" style="background-color: <?php echo $background; ?>">
		<div class="container">
			<div class="heading text-center">
				<h1><?php echo $heading; ?></h1>
			</div>
			<?php
				while( have_rows('team_members')): the_row();
					$first_name = get_sub_field('first_name');
					$last_name = get_sub_field('last_name');
					$title_position = get_sub_field('title_position');
					$bio = get_sub_field('bio');
					$photo = get_sub_field('photo');
					$linkedin_url = get_sub_field('linkedin_url');
			?>
			<div class="col-md-6">
				<div class="content">
					<div class="content-img">
						<img src="<?php echo $photo; ?>" alt="Team Members">
					</div>
					<div class="content-info">
						<div class="name">
							<?php echo $first_name.' '.$last_name; ?>
						</div>
						<div class="position">
							<?php echo $title_position; ?>
						</div>
						<div class="bio">
							<?php echo $bio; ?>
						</div>
						<div class="linkedin">
							<a href="<?php echo $linkedin_url; ?>">
								Learn more about <?php echo $first_name; ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; endwhile; ?>
</div>

<?php get_footer(); ?>