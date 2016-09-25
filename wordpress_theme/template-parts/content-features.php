<?php
// Custom Fields


$intro_lead = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin.
Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.";

$intro_quote = "\"Simplicity is the ultimate sophistication\"";

$intro_quoted = "Leonardo da Vinci";


$readMore = sprintf(
		esc_html_x( 'Read More', 'read more', 'minimalism' ));
?>


    <section>
      <div class="container">
  	    <div class="row">
          <div id="content" class="col-sm-12">
              <div class="feature">
    		    		<h4>About Me</h4>
    		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="row">
                  <div class="col-sm-12">
                    <a class="photo_hover3" href="#"><img src="/wp-content/themes/minimalism/assets/img/picture1.jpg" alt="picture1"></a>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-sm-12">
                    <button type="button" class="btn btn-primary btn-md">
                      <?php echo $readMore; ?>
                    </button>
                  </div>
                </div>
    		    	</div><!-- widget -->


              <div class="feature">
                <h4>Projects</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="row">
                  <div class="col-sm-12">
                    <a class="photo_hover3" href="#"><img src="/wp-content/themes/minimalism/assets/img/picture2.jpg" alt="picture1"></a>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-sm-12">
                    <button type="button" class="btn btn-primary btn-md">
                      <?php echo $readMore; ?>
                    </button>
                  </div>
                </div>
              </div><!-- widget -->

              <div class="feature">
                <h4>Latest Posts</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="row">
                  <div class="col-sm-12">
                    <a class="photo_hover3" href="#"><img src="/wp-content/themes/minimalism/assets/img/picture3.jpg" alt="picture1"></a>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-sm-12">
                    <button type="button" class="btn btn-primary btn-md">
                      <?php echo $readMore; ?>
                    </button>
                  </div>
                </div>
              </div><!-- widget -->
          </div>
        </div>
      </div>
    </section>