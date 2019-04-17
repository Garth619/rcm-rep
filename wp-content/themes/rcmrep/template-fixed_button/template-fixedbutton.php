<?php
	
	/* Template Name: Fixed Button */
	
	get_header();?>
	
	
	<section id="fixed_button" class="position_right"> <!-- or use the class position_left instead to position to the left hand corner -->
			
			<a href="" target="_blank" rel="noopener">
			
				<div class="fixed_button_bubble">
				
					<h3>Lorem Ipsum Dolor</h3>
					
						<div class="fixed_button_stars">
						
							<span class="star">★</span><!-- star -->
							<span class="star">★</span><!-- star -->
							<span class="star">★</span><!-- star -->
							<span class="star">★</span><!-- star -->
							<span class="star">★</span><!-- star -->
						
						</div><!-- fixed_button_stars -->
					
					</div><!-- fixed_button_bubble -->
			
					<div class="fixed_button_circle">
				
					<?php echo file_get_contents("wp-content/themes/rcmrep/images/fixed_button_icon.svg"); ?>
				
				</div><!-- fixed_button_circle -->
			
				</a>
			
			</section><!-- fixed_button -->
		
	
	<?php wp_footer();?>


</body>
</html>