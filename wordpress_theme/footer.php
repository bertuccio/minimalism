<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minimalism
 */

?>

<?php wp_footer(); ?>

    <!-- ######## FOOTER ######## -->
    <footer>
      <div class="container">
        <div class="col-sm-7">
          <i class="fa fa-twitter-square fa-3x"></i>
          <i class="fa fa-instagram fa-3x"></i>
          <i class="fa fa-facebook-square fa-3x"></i>
        </div><!-- end col -->
        <div class="col-sm-5">
          <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'minimalism' ), 'minimalism', '<a href="http://underscores.me/" rel="designer">marija zaric & adrian lorenzo</a>' ); ?>
        </div><!-- end col -->
      </div><!-- container -->
    </footer>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.0.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
