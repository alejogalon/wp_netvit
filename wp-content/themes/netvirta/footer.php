<div class="footer">
	<div class="footer-content">
		<div class="container p-0">
			<div class="row m-0">
				<div class="col-md-5">
					<div id="locations">
						<div class="footer-heading">
							<p>Locations</p>
						</div>
						<?php
					     while( have_rows('locations', 'option') ) : the_row();
					        $name = get_sub_field('name');
					        $address = get_sub_field('address');
						?>	
							<div class="col-md-6 p-0">
								<div class="footer-subhead">
									<p><?php echo $name; ?></p>
									<p><?php echo $address; ?></p>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="col-md-4 p-0">
					<div id="request-verifyt-demo">
						<?php
					     while( have_rows('column_2', 'option') ) : the_row();
					        $heading = get_sub_field('heading');
					        $content = get_sub_field('content');
					        $button_url = get_sub_field('button_url');
					        $button_label = get_sub_field('button_label');
						?>	
						<div class="footer-heading">
							<p><?php echo $heading; ?></p>
						</div>
						<div class="footer-subhead">
							<p><?php echo $content; ?></p>
							<div class="contact-us learn-more">
								<a href="<?php echo $button_url; ?>">
									<?php echo $button_label; ?>
								</a>
							</div>
						</div>
					<?php endwhile; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div id="contact-us">
						<div class="footer-heading">
							<p>Contact us</p>
						</div>
						<div class="footer-subhead">
							<?php
						     while( have_rows('column_3', 'option') ) : the_row();
						        $heading = get_sub_field('heading');
						        $content = get_sub_field('content');
							?>	
							<p><?php echo $heading; ?></p>
							<p><?php echo $content; ?></p>
							<p class="contact-learnmore">
								<a href="#contact-us-page" class="btn-link">
									Learn more
								</a>
							</p>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-media">
		<div class="container">	
			<div class="copyright-media-content afterclear">
					<div class="copyright pull-left">
						© Copyright <?php echo date('Y'); ?> Netvirta.
					</div>
					<a href="#linkedIn" class="pull-right">
					<div class="media-conversation pull-right">
						<p>Join the conversation</p>
					</div>
					</a>
			</div>
		</div>
	</div>
</div> <!-- Footer -->
</div>
<?php wp_footer(); ?>
</body>
</html>