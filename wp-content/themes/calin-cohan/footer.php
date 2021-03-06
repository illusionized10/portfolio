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
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center"><span>© Copyright 2018 Calin Cohan</span></div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- SCRIPTS 
========================================-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/preloader.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plagin.js"></script>

<!-- Custom JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom-scripts.js"></script>

<!-- Custom JS 2.0 -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>