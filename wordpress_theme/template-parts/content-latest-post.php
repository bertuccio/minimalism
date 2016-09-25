

 <?php $the_query = new WP_Query( 'posts_per_page=1' ); 

 function new_excerpt_length($length) {
    return 150;
  }
?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 group4">
     
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <article class="post">
          <header>
            <h4>Latest article: <?php the_title(); ?></h4>

            <div class="post-details">
              <?php the_date(); ?>
            </div><!-- post-details -->
          </header>
          <div class="post-excerpt">
           <?php 
              add_filter('excerpt_length', 'new_excerpt_length');
        
              the_content();
              remove_filter('excerpt_length', 'new_excerpt_length');
            ?>
         </div><!-- post-excerpt -->
       </article>
       <?php 
          endwhile;
          wp_reset_postdata(); 
        ?>
     </div>
   </div>
 </div>
</section>