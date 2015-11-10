<footer>
  <div class="container">
    <p>&copy; Lizziecodes <?php echo date('Y'); ?> designed and developed by Lizzie Painter</p>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script> new WOW().init();</script>
<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>