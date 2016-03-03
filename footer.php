<footer>
  <div id="instafeed"><?php  dynamic_sidebar( 'insta-widget-area' ); ?></div>
  <div class="container">
  	<ul class="footer-top">
  		<?php  dynamic_sidebar( 'footer-widget-area' ); ?>
  	</ul>
  	<div class="footer-bottom">
  		<div class="logo">
          <img src="<?php site_icon_url(); ?>" alt="">
        </div>
  		 <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'social'
        )); ?>
  		<p class="copyright">&copy; Suzette McCanny <?php echo date('Y'); ?></p>
    	<p class="love">Handmade with Love in Toronto</p>
    </div>
    
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>