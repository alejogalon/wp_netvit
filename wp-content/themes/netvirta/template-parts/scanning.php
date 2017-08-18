<?php
/*
Template Name: Scanning
*/
get_header();
?>
<div class="scanning">
	<div class="scanning-banner banner bg-inline">
		<?php
		while( have_rows('scanning_page_content')): the_row();
			if( get_row_layout() == 'scanning_banner'):
				$heading = get_sub_field('heading');
				$subheading = get_sub_field('subheading');
				$banner_img = get_sub_field('banner_img');	
		?>
			<div class="heading animatedParent animateOnce">
				<h1 class="animated fadeInDownShort"><?php echo $heading; ?></h1>
				<div class="sub-heading animated fadeInUpShort delay-500">
					<?php echo $subheading; ?>
				</div>
			</div>
			 <div class="banner-img">
				<img src="<?php echo $banner_img; ?>" alt="Scanning Banner Image">
			</div> 
		<?php endif; endwhile; ?>
	</div> <!-- End Scanning Banner-->

	<div class="verifyt-scanning p-sec-80">
		<?php
		while( have_rows('scanning_page_content')): the_row();
			if( get_row_layout() == 'verifyt_scanning'):
				$heading = get_sub_field('heading');
				$image = get_sub_field('image');

		?>
			<div class="scanning-content bg-inline" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/styles/images/verifyt_scanning_img.png');">
				<div class="heading text-center animatedParent animateOnce">
					<h1 class="animated fadeInUpShort"><?php echo $heading; ?></h1>
				</div>
				<div class="content">
					<div class="container">
						<div class="col-md-4 left-content animatedParent animateOnce" data-sequence='500'>
							<?php
								$i = 1;
								while( have_rows('left_content')): the_row();
									$heading = get_sub_field('heading');
									$description = get_sub_field('description');
							?>
							<div class="left-right-content animated fadeInUpShort" data-id='<?php echo $i; ?>'>
								<div class="heading">
									<h3><?php echo $heading; ?></h3>
								</div>
								<div class="description"><?php echo $description; ?></div>
							</div>
						    <?php $i++; endwhile; ?>
					    </div>
					    <div class="col-md-offset-4 col-md-4 right-content animatedParent animateOnce" data-sequence='500'>
						    <?php
						    	$i = 1;
								while( have_rows('right_content')): the_row();
									$heading = get_sub_field('heading');
									$description = get_sub_field('description');
							?>
							<div class="left-right-content animated fadeInUpShort" data-id='<?php echo $i; ?>'>
								<div class="heading">
									<h3><?php echo $heading; ?></h3>
								</div>
								<div class="description"><?php echo $description; ?></div>
							</div>
							<?php $i++; endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; endwhile; ?>
	</div> <!-- End Verifyt Scanning-->

	<div class="wide-range-app p-sec-80 animateOnce animatedParent">
		<div class="container">
			<?php 
			while( have_rows('scanning_page_content')): the_row();
				if( get_row_layout() == 'wide_range_app'):
					$heading = get_sub_field('heading');
			?>
			<div class="heading text-center animated fadeInUpShort">
				<h1><?php echo $heading; ?></h1>
			</div>
			<div class="content-images">
				<ul>
					<?php
						while( have_rows('content_images')): the_row();
							$image = get_sub_field('image');
							$text = get_sub_field('text');
					?>
					<li>
						<div class="content">
							<div class="images bg-inline" style="background-image: url('<?php echo $image; ?>');">
							</div>
							<div class="context transform-top50 text-center"><?php echo $text; ?></div>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; endwhile; ?>
		</div>
	</div> <!-- End Wide Range App-->

	<div class="how-it-works p-sec-80 text-center animatedParent animateOnce">
		<div class="container">
			<?php 
			while( have_rows('scanning_page_content')): the_row();
				if( get_row_layout() == 'how_it_works'):
					$heading = get_sub_field('heading');
			?>
				<div class="heading animated fadeInUpShort">
					<h1><?php echo $heading; ?></h1>
				</div>
				<?php
					while( have_rows('column_content')): the_row();
						$column_number = get_sub_field('column_number');
						$column_context = get_sub_field('column_context');
				?>
				<div class="col-md-4 p-0 content">
					<div class="sub-content">
						<div class="column-number">
							<span class="number"><?php echo $column_number; ?></span>
						</div>
						<div class="column-context">
							<?php echo $column_context; ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>