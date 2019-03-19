<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class("search-result"); ?> id="post-<?php the_ID(); ?>">

    <header class="search-header">

        <h6 class="search-result-type"><?php echo (get_post_type() === "page" ? __("Page", "understrap") : get_the_category()); ?></h6>
        <?php the_title( sprintf( '<h4 class="search-result-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
            '</a></h4>' ); ?>
        <h6 class="search-result-link"><?php echo esc_url(get_permalink()); ?></h6>

    </header><!-- .entry-header -->

    <div class="search-summary">

        <?php the_excerpt(); ?>

    </div><!-- .entry-summary -->

</article><!-- #post-## -->
