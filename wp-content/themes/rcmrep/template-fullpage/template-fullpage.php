<?php
	
	/* Template Name: Full Page */
	
	get_header();
	
	get_template_part('template-fullpage/sections-fullpage/section','topbanner');
	get_template_part('template-fullpage/sections-fullpage/section','socialmediabox');
	get_template_part('template-fullpage/sections-fullpage/section','formbox');
	get_template_part('template-fullpage/sections-fullpage/section','reviewbox');
	get_template_part('template-fullpage/sections-fullpage/section','promobox');
	
	get_footer(); ?>
