</div>
    </div>
    <!--==============================footer=================================-->
    <!--markup footer-->
    <footer class="footer footer_2">
      <div class="footer_top_part">
        <div class="container">
          <div class="row">
			<?php
				dynamic_sidebar('footer_widget');
			?>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="widget widget_text" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
                <a href="<?php bloginfo('home'); ?>" class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banglavision24blogo.png" alt=""></a>
              </div>
			  <div class="widget widget_social_icons clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
                <ul class="footer_social">
                  <li class="facebook">
                    <span class="tooltip">Facebook</span>
                    <a href="https://www.facebook.com/banglavision24/">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="twitter">
                    <span class="tooltip">Twitter</span>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="google_plus">
                    <span class="tooltip">Google+</span>
                    <a href="#">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                  <li class="linkedin">
                    <span class="tooltip">LinkedIn</span>
                    <a href="#">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                  <li class="youtube">
                    <span class="tooltip">Youtube</span>
                    <a href="#">
                      <i class="fa fa-youtube-play"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--copyright part-->
      <div class="footer_bottom_part">
        <div class="container clearfix">
			<div class="row clearfix">
				<div class="col-md-5">
					<div class="copy-right">
						<p>&copy; 2016 <span>Banglavision24</span>. All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="visit_counter">
						<h3>Visitors</h3>
						<p><?php require_once('counter.php'); ?></p>
					</div>
				</div>
				<div class="col-md-5">
					<div class="dauthor">
						<p>Design & Developed By: <span><a href="http://deelko.com" target="_blank">DEELKO</a></span></p>
					</div>
				</div>
			</div>
        </div>
      </div>
    </footer>
  </div>

  <!--scripts include-->
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-2.1.0.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-ui.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.queryloader2.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jflickrfeed.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/circles.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/retina.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/apear.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/styleswither.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/colorpicker.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/plugins/twitter/jquery.tweet.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/script.js"></script>
  <script>
    /*var colors = [['#fa985d', '#ffffff']], circles = [];
    var child = document.getElementById('circles-1');
    circles.push(Circles.create({
        id:         child.id,
        value:      6.5,
        radius:     19,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-3');
    circles.push(Circles.create({
        id:         child.id,
        value:      6.2,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-4');
    circles.push(Circles.create({
        id:         child.id,
        value:      6.2,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-7');
    circles.push(Circles.create({
        id:         child.id,
        value:      7.7,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-8');
    circles.push(Circles.create({
        id:         child.id,
        value:      5.0,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-9');
    circles.push(Circles.create({
        id:         child.id,
        value:      8.0,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-10');
    circles.push(Circles.create({
        id:         child.id,
        value:      6.2,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-11');
    circles.push(Circles.create({
        id:         child.id,
        value:      6.2,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-12');
    circles.push(Circles.create({
        id:         child.id,
        value:      6.2,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-13');
    circles.push(Circles.create({
        id:         child.id,
        value:      6.2,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));

    var child = document.getElementById('circles-14');
    circles.push(Circles.create({
        id:         child.id,
        value:      6.2,
        radius:     14,
        width:      3,
        maxValue:   10,
        duration:   1000,
        text:       function(value){return value;},
        colors:    ['#fa985d', '#ffffff']
    }));*/
  </script>

  

</body>

<!-- Mirrored from velikorodnov.com/html/revija/home_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2016 17:15:50 GMT -->
</html>

<?php
wp_footer();
?>