<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-
    <?php the_ID(); ?>">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <h2 class="card-title"><?php the_title(); ?></h2>

                <p class="card-text pt-3"><?php echo wp_trim_words(get_the_content(), 1000); ?></p>

            </div>
            <div class="col-md-6">
                <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
            </div>
        </div>
    </div>
</article><!-- #post-## -->