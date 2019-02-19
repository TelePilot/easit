<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<?php
$startDate = am_get_the_startdate('U');
$endDate = am_get_the_enddate('U');
$startTime = am_get_the_startdate('H:i');
?>

<article <?php post_class(); ?> id="post-
    <?php the_ID(); ?>">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <h2 class="card-title"><?php the_title(); ?></h2>
      <?php if ( $startTime !== '00:00') { ?>
      <h4 class="card-subtitle text-capitalize">
          <?php am_the_startdate('l', '<b>', ' </b>');

          am_the_startdate('j F H:i');
          if ($startDate !== $endDate) {
            am_the_enddate('H:i', ' - ');
          }
        ?>
      </h4>
    <?php } ?>

      <p class="card-text pt-3"><?php echo wp_trim_words(get_the_content(), 1000); ?></p>

            </div>
            <div class="col-md-6">
                <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
            </div>
        </div>
    </div>









    <footer class="entry-footer">

        <?php understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->