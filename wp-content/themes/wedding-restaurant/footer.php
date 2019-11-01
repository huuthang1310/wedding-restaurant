<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wedding_Restaurant
 */
?>

<?php get_template_part( 'module/module-9', 'footer' ); ?>
<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- Magnific-popup -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<!-- Owl-coursel -->
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<!-- Script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>

</html>