<?php
/*
Template Name: Contact Us
*/
get_header();
?>
<div class="contact-us">
	<?php
		while( have_rows('contact_us_field')): the_row();
			if( get_row_layout() == 'contact_us_banner'):
				$heading = get_sub_field('heading');
				$banner_img = get_sub_field('banner_img');
		?>
	<div class="contact-us-banner banner bg-inline" style="background-image: url('<?php echo $banner_img ?>');">
		<div class="heading">
			<h1><?php echo $heading; ?></h1>
		</div>
	</div>
	<?php endif; endwhile;?>

	<div class="contact-us-content p-sec-80">
		<div class="container">
		<?php
		while( have_rows('contact_us_field')): the_row();
			if( get_row_layout() == 'contact_us_content'):
				$heading = get_sub_field('heading');
				$left_content = get_sub_field('left_content');
		?>
			<div class="heading text-center">
				<h1><?php echo $heading ?></h1>
			</div>
			<div class="col-md-3 left-content">
				<?php echo $left_content ?>
			</div>
			<div class="col-md-9 right-content"> 	
				<?php echo do_shortcode('[contact-form-7 id="309" title="Contact form 1"]');?>
			</div>
		<?php endif; endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>