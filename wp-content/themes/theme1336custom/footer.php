    	</div><!--.container_24-->
    </div><!--.container-->    
	<div id="footer-wrapper">
	
  	<footer id="footer">
      <div id="footer_banner">
        <div class="footer_3col">
          sponsered by
        </div>
        <div class="footer_3col">
          sign up for email updates
        </div>
        <div class="footer_3col">
          soc media links
        </div>
        <div class="clear"></div>
      </div>

      <div id="footer_nav">
        <div class="footer_4col">
          <h5 class="mid_title">Our Role</h5>
          <ul>
            <li><a href="">Our Promise</a></li>
            <li><a href="">Team</a></li>
          </ul>
        </div>
        <div class="footer_4col">
          <h5 class="mid_title">Get Involved</h5>
          <ul>
            <li><a href="">Be a mentor</a></li>
            <li><a href="">Activity Lead FAQ</a></li>
          </ul>
        </div>
        <div class="footer_4col">
          <h5 class="mid_title">Donate</h5>
          <ul>
            <li><a href="">Donate Online</a></li>
            <li><a href="">Recurring Donation</a></li>
          </ul>
        </div>
        <div class="footer_4col">
          <h5 class="mid_title">For Partners</h5>
          <ul>
            <li><a href="">Book an Event</a></li>
            <li><a href="">Teacher Resources</a></li>
          </ul>
        </div>

      </div>

  		<div id="widget-footer">
          	<div class="top-bg">
              	<div class="container_24 clearfix">
  			<div class="grid_8">
  				<?php if ( ! dynamic_sidebar( 'First Footer Widget Area' ) ) : ?>
                    <!--Widgetized Footer-->
                  <?php endif; ?>
                </div>
                <div class="grid_8">
  				<?php if ( ! dynamic_sidebar( 'Second Footer Widget Area' ) ) : ?>
                    <!--Widgetized Footer-->
                  <?php endif; ?>
                </div>
                <div class="grid_8">
  				<?php if ( ! dynamic_sidebar( 'Third Footer Widget Area' ) ) : ?>
                    <!--Widgetized Footer-->
                  <?php endif; ?>
                </div>
  		</div><!--.container-->
              </div>
          </div>
          <?php if ( of_get_option('footer_menu') == 'true') { ?>  
            <nav class="footer">
              <?php wp_nav_menu( array(
                'container'       => 'ul', 
                'menu_class'      => 'footer-nav', 
                'depth'           => 0,
                'theme_location' => 'footer_menu' 
                )); 
              ?>
            </nav>
          <?php } ?>
          <div id="notice_bar" class="lower_footer">
            <span>Cascades Science Center Foundation is a nonprofit, tax-exempt charitable organization under Section 501 (c)(3) of the Internal Revenue Code. Donations are tax-deductible as allowed by law.</span>
          </div>
          <div id="lower_bar" class="lower_footer">
            <span id="copyright">
            	<?php $myfooter_text = of_get_option('footer_text'); ?>
              <?php if($myfooter_text){?>
                <?php echo of_get_option('footer_text'); ?>
              <?php } ?>
            </span>
            <ul>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Terms & Conditions</a></li>
            </ul>
          </div>
          <div class="clear"></div>
  	</footer>
  </div><!-- end footer-wrapper -->
</div><!--#main-->

<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->

<script type="text/javascript"> Cufon.now(); </script>
<?php echo stripslashes(of_get_option('ga_code')); ?><!-- Show Google Analytics -->
</body>
</html>