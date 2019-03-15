<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">

        <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
            '</a></h3>' ); ?>

    </header><!-- .entry-header -->



    <div class="entry-summary">

        <?php the_excerpt(); ?>

    </div><!-- .entry-summary -->

</article><!-- #post-## -->
