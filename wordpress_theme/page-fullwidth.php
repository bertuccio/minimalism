<?php
/* Template Name: Full-width Template */	
		
$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
get_header();
?>

<!-- FEATURE IMAGE
================================================== -->

<?php if ( has_post_thumbnail() ) { ?>
<div class="container">
	<section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>
</div>
<?php } else { // Fallback image ?>
<div class="container">
	<section class="feature-image feature-image-default">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>
</div>
<?php } ?>

<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			
			<section class="main-content">
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop ?>
				
			</section><!-- main-content -->
			
		</div><!-- content -->
	</div><!-- row -->
</div><!-- container -->

<?php get_footer(); ?>