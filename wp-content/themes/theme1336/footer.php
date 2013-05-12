    	</div><!--.container_24-->
    </div><!--.container-->    
	<div id="footer-wrapper">
	</div>
	<footer id="footer">
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
        <div id="copyright">
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
        <?php $myfooter_text = of_get_option('footer_text'); ?>
          
          <?php if($myfooter_text){?>
            <?php echo of_get_option('footer_text'); ?>
          <?php } else { ?>
          <!--Removing copyright material-->
          <?php } ?>
        </div>
	</footer>
</div><!--#main-->

<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->

<script type="text/javascript"> Cufon.now(); </script>
<?php echo stripslashes(of_get_option('ga_code')); ?><!-- Show Google Analytics -->
</body>
</html>