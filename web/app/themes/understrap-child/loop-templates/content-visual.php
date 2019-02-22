<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php while(have_posts()) : the_post(); ?>

	<div class="entry-content margintopforty">

		<?php
		the_content();
		?>

	</div><!-- .entry-content -->
    <?php endwhile;?>

</article><!-- #post-## -->
