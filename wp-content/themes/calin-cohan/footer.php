<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package calin-cohan
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- SCRIPTS 
========================================-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/preloader.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plagin.js"></script>

<!-- Custom Script 
==========================================-->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom-scripts.js"></script>

<?php wp_footer(); ?>

</body>
</html>