<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div id="single-post" class="container">
    <?php get_template_part( 'loop-templates/content-visual', 'page' ); ?>
</div>

<!-- Wrapper end -->

<?php get_footer(); ?>
