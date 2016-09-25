<?php
/*
	Template Name: Home Page	
*/

get_header(); ?>

	<?php get_template_part('template-parts/content','intro'); ?>

	<?php get_template_part('template-parts/content','features'); ?>
	
	<?php get_template_part('template-parts/content','latest-post'); ?>

<?php get_footer(); ?>